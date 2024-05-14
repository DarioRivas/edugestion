<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$libroId = $_GET['id'];
$libro = get_fichaLibro($_GET['id']);
$ejemplares = get_ejemplares($_GET['id']);
$cantidadEjemplares = mysqli_num_rows($ejemplares);
$contadorEjemplares = 0;
$alert = "";
if (isset($_GET['text'])) {
    $alert = $_GET['text'];
}
?>
<main label="cargarlibros">
    <header>
        <i class='bx bx-book'></i> Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Ficha del Libro</h4>
                <h3>
                    <?= $libro['titulo'] ?>
                </h3>
            </div>
        </header>
        <?php if (isset($_GET['text'])) { ?>
            <?php if ($_GET['text'] == 'Error no') { ?>
                <div class="alert alert-success my-4">
                    Libro/Ejemplar actualizado correctamente <i class='bx bx-happy-alt'></i>
                </div>
            <?php } else { ?>
                <div class="alert alert-danger my-4">
                    <?= $_GET['text'] ?>
                </div>
            <?php } ?>
        <?php } ?>
        <div class="card shadow p-3 rounded bg-success bg-opacity-50">
            <form action="libroeditarpost.php?id=<?= $libroId ?>" method="post">
                <div class="row">
                    <div class="col-3 col-xl-3 my-1"><span class="fw-semibold">ID Interno:
                            <?= $libro['id'] ?></span>
                    </div>
                    <div class="col-6 col-xl-6 my-1"><span class="fw-semibold">ISBN:</span>
                        <input type="text" class="form-control" id="isbn" name="isbn" aria-describedby="isbn"
                            value="<?= $libro['isbn'] ?>">
                    </div>
                    <div class="col-3 col-xl-3 my-1"><span class="fw-semibold">Ejemplares:
                            <?= $cantidadEjemplares ?></span>
                    </div>
                    <div class="col-xl-7 col-12 my-1"><span class="fw-semibold">Título:</span>
                        <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo"
                            value="<?= $libro['titulo'] ?>">
                    </div>
                    <div class="col-xl-1 col-12 my-1"><span class="fw-semibold">Edición:</span>
                        <input type="text" class="form-control" id="edicion" name="edicion" aria-describedby="edicion"
                            value="<?= $libro['edicion'] ?>">
                    </div>
                    <div class="col-xl-4 col-12 my-1">
                        <span class="fw-semibold">Autor:</span>
                        <select class="form-select" name="autor" id="autor" required>
                            <optgroup label="Actual:">
                                <option value="<?= $libro['idAutor'] ?>">
                                    <?= $libro['autor'] ?>
                                </option>
                            </optgroup>
                            <?php $get_autores = get_autores();
                            while ($row = mysqli_fetch_array($get_autores)) { ?>
                                <option value="<?= $row['idAutor'] ?>">
                                    <?= $row['autor'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xl-4 col-12 my-1">
                        <span class="fw-semibold">Editorial:</span>
                        <select class="form-select" name="editorial" id="editorial" required>
                            <optgroup label="Actual:">
                                <option value="<?= $libro['idEditorial'] ?>">
                                    <?= $libro['editorial'] ?>
                                </option>
                            </optgroup>
                            <?php $get_editoriales = get_editoriales();
                            while ($row = mysqli_fetch_array($get_editoriales)) { ?>
                                <option value="<?= $row['idEditorial'] ?>">
                                    <?= $row['editorial'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xl-4 col-6 my-1"><span class="fw-semibold">Lugar:</span>
                        <input type="text" class="form-control" id="lugar" name="lugar" aria-describedby="lugar"
                            value="<?= $libro['lugar'] ?>">
                    </div>
                    <div class="col-xl-4 col-6 my-1"><span class="fw-semibold">Año:</span>
                        <input type="text" class="form-control" id="anio" name="anio" aria-describedby="anio"
                            value="<?= $libro['anio'] ?>">
                    </div>
                    <div class="col-xl-4 col-6 my-1">
                        <span class="fw-semibold">
                            Ciclo:</span>
                        <select class="form-select" name="ciclo" id="ciclo" required>
                            <optgroup label="Actual:">
                                <option value="<?= $libro['ciclo'] ?>">
                                    <?= get_ciclos($libro['ciclo']) ?>
                                </option>
                            </optgroup>
                            <option value="0">Todos</option>
                            <option value="1">1er año</option>
                            <option value="2">2do año</option>
                            <option value="3">3er año</option>
                            <option value="4">4to año</option>
                            <option value="5">5to año</option>
                            <option value="6">6to año</option>
                            <option value="7">Ciclo Básico</option>
                            <option value="8">Ciclo Superior</option>
                        </select>
                    </div>
                    <div class="col-xl-8 col-12 my-1"><span class="fw-semibold">Tags:</span>
                        <input type="text" class="form-control" id="tags" name="tags" aria-describedby="tags"
                            value="<?= $libro['tags'] ?>">
                    </div>
                </div>
                <div class="row text-center pt-3">
                    <div class="col">
                        <button class="btn btn-success" type="submit" name="btnGuardar" id="btnGuardar">Guardar cambios
                            en el libro</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card shadow p-3 rounded bg-success bg-opacity-50 mt-4 text-center">
            <p>Cargar imagen de portada</p>
            <form action="libroeditarpost.php?id=<?= $libroId ?>" method="post" enctype="multipart/form-data">
                <div id="imagen1">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="imageInput" id="imageInput" style="z-index: 100;">
                    </div>
                    <input type="file" id="imagenRedimensionada" name="imagenRedimensionada" style="display: none;">
                    <canvas id="canvas" style="display: none;"></canvas>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-6 p-3 text-center">
                            <span class="small">Imagen Actual</span>
                            <img class="mx-auto d-block  mt-2" src="portadas/<?= $libro['portada'] ?>"
                                style="display: block; height:150px;">
                        </div>
                        <div class="col-6 p-3 text-center">
                            <span class="small">Nueva Imagen</span>
                            <img class="mx-auto d-block mt-2" id="preview" src="" style="display: block; height:150px;">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-12 align-items-center">
                            <button class="btn btn-success d-flex w-100 justify-content-center" type="submit"
                                id="btnEnviar" name="btnEnviar">Guardar
                                imagen<i class='bx bxs-cloud-upload bx-sm ms-2'></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php if ($ejemplares == '') { ?>
            <section class="text-center my-3">
                <h4>Ejemplares</h4>
            </section>
            <div class="card shadow p-3 my-3 rounded">
                <div class="alert alert-warning">No se registran ejemplares cargados de este libro.</div>
            </div>
        <?php } else {
            while ($ej = mysqli_fetch_array($ejemplares)) {
                $contadorEjemplares++; ?>
                <div class="card shadow p-3 my-3 rounded">
                    <form action="libroeditarpost.php?id=<?= $libroId ?>" method="post">
                        <div class="row align-items-start mt-2">
                            <div class="col-xl-1 col-12 mt-2 aling-items-center text-center">
                                <span class="fw-semibold small">Ejemplar</span>
                                <span class="badge bg-secondary fs-6 mt-1">
                                    <?= $contadorEjemplares ?>
                                </span>
                            </div>
                            <div class="col-xl-2 col-6 mt-2">
                                <span class="fw-semibold small">Inventario</span>
                                <input type="text" class="form-control" id="inventario" name="inventario"
                                    aria-describedby="inventario" value="<?= $ej['inventario'] ?>">
                            </div>
                            <div class="col-xl-3 col-6 mt-2">
                                <span class="fw-semibold small">Estado</span>
                                <select class="form-select" name="estado" id="estado" required>
                                    <optgroup label="Actual:">
                                        <option value="<?= $ej['estadoid'] ?>">
                                            <?= $ej['estado'] ?>
                                        </option>
                                    </optgroup>
                                    <?php $get_estados = get_estados();
                                    while ($row = mysqli_fetch_array($get_estados)) { ?>
                                        <option value="<?= $row['id'] ?>">
                                            <?= $row['descripcion'] ?>
                                        </option>
                                    <?php }
                                    mysqli_data_seek($get_estados, 0) ?>
                                </select>
                            </div>
                            <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mt-2">
                                <span for="fechaalta" class="form-label fw-semibold small">Fecha de alta</span>
                                <input type="date" class="form-control" id="fechaalta" name="fechaalta"
                                    aria-describedby="fechaalta" value="<?= date($ej['fechaalta']) ?>">
                            </div>
                            <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mt-2">
                                <span for="fechabaja" class="form-label fw-semibold small">Fecha de baja</span>
                                <input type="date" class="form-control" id="fechabaja" name="fechabaja"
                                    aria-describedby="fechabaja" value="<?= date(($ej['fechabaja'])) ?>">
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-xl-8 col-12 my-2">
                                <span class="fw-semibold small">Observaciones</span>
                                <input type="text" class="form-control" id="descripcion" name="descripcion"
                                    aria-describedby="descripcion" value="<?= $ej['observaciones'] ?>">
                            </div>
                            <div class="col-xl-4 col-12 my-2">
                                <button class="btn btn-success btn-sm w-100" type="submit" name="btnGuardarEj"
                                    id="btnGuardarEj">Guardar cambios en el ejemplar</button>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="ejemplar" name="ejemplar" value="<?= $ej['id'] ?>">
                    </form>
                </div>
            <?php }
        } ?>
        </div>
    </section>
    <section class="text-center my-3">
        <h4>Cargar nuevos ejemplares</h4>
        <form action="libroeditarpost.php?id=<?= $libroId ?>" method="post">
            <div class="card p-3">
                <div class="row align-items-end justify-content-center">
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="ejemplares" class="form-label">Cantidad de ejemplares</label>
                        <input type="number" class="form-control" id="ejemplares" name="ejemplares"
                            aria-describedby="inventario" min=1 required>
                    </div>
                    <input type="hidden" class="form-control" id="libro" name="libro" value="<?= $_GET['id'] ?>"
                        aria-describedby="libro">
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="inventario" class="form-label">Número de inventario inicial</label>
                        <input type="number" class="form-control" id="inventario" name="inventario"
                            aria-describedby="inventario" min=1 required>
                    </div>
                    <div class="col-xl-3 col-12 mt-3">
                        <button class="btn btn-success px-5" type="submit" name="btnAgregarEj">Cargar
                            ejemplares</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>

<script src="../_assets/js/menu.js"></script>
<script>
    $(document).ready(function () {
        $('#imageInput').on('change', function (e) {
            const fileInput = document.getElementById('imageInput');
            const file = fileInput.files[0];
            const fileRedimensionada = document.getElementById('imagenRedimensionada');
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const img = new Image();
                    img.onload = function () {
                        const canvas = document.getElementById('canvas');
                        const ctx = canvas.getContext('2d');

                        const width = 400;
                        const height = 565;

                        canvas.width = width;
                        canvas.height = height;

                        let newWidth = width;
                        let newHeight = height;

                        if (img.width > img.height) {
                            newWidth = img.width * (height / img.height);
                        } else {
                            newHeight = img.height * (width / img.width);
                        }

                        const offsetX = (width - newWidth) / 2;
                        const offsetY = (height - newHeight) / 2;

                        ctx.drawImage(img, 0, 0, img.width, img.height, offsetX, offsetY, newWidth, newHeight);

                        // Obtener la imagen redimensionada como un archivo Blob
                        canvas.toBlob(function (blob) {
                            const newFile = new File([blob], file.name, { type: 'image/jpeg' });
                            // Mostrar la imagen redimensionada como previsualización
                            const previewImg = document.getElementById('preview');
                            previewImg.style.display = 'block';
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(newFile);
                            previewImg.src = URL.createObjectURL(newFile);

                            // Asignar la imagen redimensionada al campo oculto en el formulario
                            fileRedimensionada.files = dataTransfer.files;
                        }, 'image/jpeg');
                    };
                    img.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>