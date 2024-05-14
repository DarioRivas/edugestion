<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/recursos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
if (isset ($_POST['btn-cargar'])) {
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $sector = $_POST['sector'];
    $descripcion = $_POST['descripcion'];
    $ejemplares = $_POST['ejemplares'];
    $sqlRecurso = "INSERT INTO recursos (tipo, nombre, sector, descripcion) VALUES ('$tipo','$nombre','$sector','$descripcion')";
    mysqli_query($conexion, $sqlRecurso);
    $lastId = mysqli_insert_id($conexion);
    $sqlEjemplar = "INSERT INTO recursos_ejemplares (idrecurso, estado) VALUES ('$lastId', 5);";
    for ($i = 1; $i <= $ejemplares; $i++) {
        mysqli_query($conexion, $sqlEjemplar);
    }
}
?>
<main label="cargarrecursostic">
    <header>
    <i class='bx bx-desktop'></i> Recursos TIC / Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Cargar un nuevo recurso</h4>
            </div>
        </header>
        <!-- CARGA DE LIBRO BASE -->
        <div class="card shadow p-3">
            <form method="post" action="cargar.php">
                <div class="row">
                    <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <option value="0" selected disabled>Tipo</option>
                            <?php $get_tipos = get_tipos();
                            while ($tipo = mysqli_fetch_array($get_tipos)) { ?>
                                <option value="<?= $tipo['id'] ?>">
                                    <?= $tipo['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                            required>
                    </div>
                    <div class="col-xxl-4 xol-xl-4 col-lg-4 col-12 mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                            aria-describedby="descripcion" required>
                    </div>

                    <div class="col-xxl-1 xol-xl-1 col-lg-1 col-6 mb-3">
                        <label for="ejemplares" class="form-label">Ejemplares</label>
                        <input type="number" class="form-control" id="ejemplares" name="ejemplares"
                            aria-describedby="ejemplares" value="1" min="1" required>
                    </div>
                    <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                        <label for="sector" class="form-label">Sector</label>
                        <select class="form-select" name="sector" id="sector" required>
                            <option value="0" selected disabled>Sector</option>
                            <?php $get_sectores = get_sectores();
                            while ($sector = mysqli_fetch_array($get_sectores)) { ?>
                                <option value="<?= $sector['id'] ?>">
                                    <?= $sector['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="my-3 text-center">
                        <button class="btn btn-success" type="submit" name="btn-cargar">Cargar recurso y habilitar
                            ejemplares</button>
                    </div>
                </div>
            </form>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>