<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

if (isset ($_POST['btn-nuevatag'])) {
    $nuevatag = $_POST['nuevatag'];
    $sql = "INSERT INTO libros_tags (tag) values ('$nuevatag');";
    mysqli_query($conexion, $sql);
}

if (isset ($_POST['btn-cambiotag'])) {
    $nuevatag = $_POST['cambiotag'];
    $idTag = $_POST['seltag'];
    $sql = "UPDATE libros_tags SET tag = '$nuevatag' WHERE id = '$idTag';";
    mysqli_query($conexion, $sql);
}

if (isset ($_POST['btn-nuevaeditorial'])) {
    $nuevaeditorial = $_POST['nuevaeditorial'];
    $sql = "INSERT INTO libros_editoriales (editorial) values ('$nuevaeditorial');";
    mysqli_query($conexion, $sql);
}

if (isset ($_POST['btn-cambioeditorial'])) {
    $cambioeditorial = $_POST['cambioeditorial'];
    $idEditorial = $_POST['seleditorial'];
    $sql = "UPDATE libros_editoriales SET editorial = '$cambioeditorial' WHERE id = '$idEditorial';";
    mysqli_query($conexion, $sql);
}

if (isset ($_POST['btn-nuevoautor'])) {
    $nuevoautor = $_POST['nuevoautor'];
    $sql = "INSERT INTO libros_autores (autor) values ('$nuevoautor');";
    mysqli_query($conexion, $sql);
}

if (isset ($_POST['btn-cambioautor'])) {
    $cambioautor = $_POST['cambioautor'];
    $idAutor = $_POST['selautor'];
    $sql = "UPDATE libros_autores SET autor = '$cambioautor' WHERE id = '$idAutor';";
    mysqli_query($conexion, $sql);
}

?>
<main label="configurarbiblio">
    <header>
        <i class='bx bx-book'></i> Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Configurar datos de precarga</h4>
            </div>
        </header>
    </section>
    <section>
        <div class="text-center pt-4">
            <h5>Autores</h5>
        </div>
        <div class="card shadow p-3">
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                    <label for="seleditorial" class="form-label d-flex"><i class='bx bx-edit me-2 bx-sm' ></i>Editar un Autor</label>
                        <select class="form-select" name="selautor" id="selautor" required>
                            <option disabled selected>Seleccionar un Autor</option>
                            <?php $get_autor = get_autores();
                            while ($autor = mysqli_fetch_array($get_autor)) { ?>
                                <option value="<?= $autor['id'] ?>">
                                    <?= $autor['autor'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <label for="cambioautor" class="form-label small">Cambios</label>
                        <input type="text" class="form-control" id="cambioautor" name="cambioautor" aria-describedby="cambioautor"
                            required>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <button class="btn btn-success w-100" type="submit" name="btn-cambioautor"><i class='bx bxs-save' ></i> Guardar cambios</button>
                    </div>
                </div>
            </form>
            <hr>
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-8 mb-3">
                    <label for="nuevaeditorial" class="form-label d-flex"><i class='bx bx-plus-circle bx-sm me-2'></i>Cargar un nuevo autor</label>
                        <input type="text" class="form-control" id="nuevoautor" name="nuevoautor" aria-describedby="nuevoautor"
                            placeholder="ej: Borges, Jorge Luis" required>                            
                    </div>
                    <div class="col-4 mb-3">
                        <button class="btn btn-warning w-100" type="submit" name="btn-nuevoautor"><i class='bx bx-cloud-upload' ></i>Guardar nuevo autor</button>
                    </div>
                </div>
                <div class="alert alert-warning small p-2"><i class='bx bx-error-circle text-warning'></i> Para cargar multiples autores en un mismo libro, seguir un criterio. Por ej: "Apellido, Nombre - Apellido, Nombre"</div>
            </form>
        </div>
    </section>
    <section>
        <div class="text-center pt-4">
            <h5>Editoriales</h5>
        </div>
        <div class="card shadow p-3">
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <label for="seleditorial" class="form-label d-flex"><i class='bx bx-edit me-2 bx-sm' ></i> Editar una Editorial</label>
                        <select class="form-select" name="seleditorial" id="seleditorial" required>
                            <option disabled selected>Seleccionar una editorial</option>
                            <?php $get_editoriales = get_editoriales();
                            while ($editorial = mysqli_fetch_array($get_editoriales)) { ?>
                                <option value="<?= $editorial['id'] ?>">
                                    <?= $editorial['editorial'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <label for="cambioeditorial" class="form-label d-flex small">Cambios</label>
                        <input type="text" class="form-control" id="cambioeditorial" name="cambioeditorial"
                            aria-describedby="cambioeditorial" required>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <button type="submit" class="btn btn-success w-100" name="btn-cambioeditorial"><i class='bx bxs-save' ></i> Guardar cambios</button>
                    </div>
                </div>
            </form>
            <hr>
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-8 mb-3">
                        <label for="nuevaeditorial" class="form-label d-flex"><i class='bx bx-plus-circle bx-sm me-2'></i> Cargar una nueva Editorial</label>
                        <input type="text" class="form-control" id="nuevaeditorial" name="nuevaeditorial" aria-describedby="nuevaeditorial"
                            placeholder="ej: ECC Ediciones" required>
                    </div>
                    <div class="col-4 mb-3">
                        <button class="btn btn-warning w-100" type="submit" name="btn-nuevaeditorial"><i class='bx bx-cloud-upload' ></i> Guardar nueva Editorial</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="text-center pt-4">
            <h5>Etiquetas</h5>
        </div>
        <div class="card shadow p-3">
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                    <label for="seleditorial" class="form-label d-flex"><i class='bx bx-edit me-2 bx-sm' ></i>Editar una Etiquetas</label>
                        <select class="form-select" name="seltag" id="seltag" required>
                            <option disabled selected>Seleccionar una Etiqueta</option>
                            <?php $get_tag = get_tags();
                            while ($tag = mysqli_fetch_array($get_tag)) { ?>
                                <option value="<?= $tag['id'] ?>">
                                    <?= $tag['tag'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <label for="cambiotag" class="form-label small">Cambios</label>
                        <input type="text" class="form-control" id="cambiotag" name="cambiotag"
                            aria-describedby="cambiotag" required>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-6 mb-3">
                        <button type="submit" class="btn btn-success w-100" name="btn-cambiotag"><i class='bx bxs-save' ></i> Guardar
                            cambios</button>
                    </div>
                </div>
            </form>
            <hr>
            <form action="configurar.php" method="post">
                <div class="row align-items-end">
                    <div class="col-8 mb-3">
                    <label for="nuevaeditorial" class="form-label d-flex"><i class='bx bx-plus-circle bx-sm me-2'></i>Cargar una nueva Etiqueta</label>
                        <input type="text" class="form-control" id="nuevatag" name="nuevatag"
                            aria-describedby="nuevatag" placeholder="ej: Educación para la Ciudadanía" required>
                    </div>
                    <div class="col-4 mb-3">
                        <button class="btn btn-warning w-100" type="submit" name="btn-nuevatag"><i class='bx bx-cloud-upload' ></i> Guardar nueva
                        Etiqueta</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>