<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include(ROOT_DIR . "_functions/recursos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

// Procesar la actualización si se envió el formulario
if (isset($_POST['btn-editar'])) {
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $sector = $_POST['sector'];
    $descripcion = $_POST['descripcion'];

    $sqlUpdate = "UPDATE recursos SET tipo = '$tipo', nombre = '$nombre', sector = '$sector', descripcion = '$descripcion' WHERE id = '$id'";
    mysqli_query($conexion, $sqlUpdate);

    echo "<script>alert('Recurso actualizado con éxito'); window.location.href='index.php';</script>";
}

// Obtener los datos actuales del recurso
$get_recurso = mysqli_query($conexion, "SELECT * FROM recursos WHERE id = '$id'");
$recurso = mysqli_fetch_array($get_recurso);

if (!$recurso) {
    echo "Recurso no encontrado.";
    exit;
}
?>
<main label="editarrecursostic">
    <header>
        <i class='bx bx-desktop'></i> Recursos TIC / Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Editar recurso: <?= htmlspecialchars($recurso['nombre']) ?></h4>
            </div>
        </header>
        <!-- EDITAR UN RECURSO -->
        <div class="card shadow p-3">
            <form method="post" action="editar.php?id=<?= $id ?>">
                <div class="row">
                    <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <?php $get_tipos = get_tipos();
                            while ($tipo = mysqli_fetch_array($get_tipos)) { ?>
                                <option value="<?= $tipo['id'] ?>" <?= ($tipo['id'] == $recurso['tipo']) ? 'selected' : '' ?>>
                                    <?= $tipo['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= htmlspecialchars($recurso['nombre']) ?>" required>
                    </div>
                    <div class="col-xxl-4 xol-xl-4 col-lg-4 col-12 mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= htmlspecialchars($recurso['descripcion']) ?>" required>
                    </div>
                    <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                        <label for="sector" class="form-label">Sector</label>
                        <select class="form-select" name="sector" id="sector" required>
                            <?php $get_sectores = get_sectores();
                            while ($sector = mysqli_fetch_array($get_sectores)) { ?>
                                <option value="<?= $sector['id'] ?>" <?= ($sector['id'] == $recurso['sector']) ? 'selected' : '' ?>>
                                    <?= $sector['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="my-3 text-center">
                        <button class="btn btn-success" type="submit" name="btn-editar">Guardar cambios</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>