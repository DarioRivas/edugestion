<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$idLibro = 0;
$cargarEjemplar = 0;
if (isset ($_GET['libro'])) {
    $idLibro = $_GET['libro'];
    $inventario = $_GET['inventario'];
    $ejemplares = $_GET['ejemplares'];
    $inventarioTotal = $inventario + $ejemplares - 1;
    $libroArray = get_libros($idLibro);
    $libro = mysqli_fetch_assoc($libroArray);
    $cargarEjemplar = 1;
}
$dt = date("Y-m-d");
?>
<main>
    <header>
        <i class='bx bx-book'></i> Biblioteca
    </header>
    <section>
        <header>
            <div class="text-center">
                <h4>Cargar ejemplares</h4>
            </div>
        </header>
    </section>
    <?php if ($cargarEjemplar == 1) { ?>
        <section>
            <div class="card text-bg-success shadow p-3">
                <div class="row">
                    <div class="col">
                        Libro: <span class="fw-bold">
                            <?= $libro['titulo'] ?>
                        </span>
                    </div>
                    <div class="col">Ejemplares: <span class="fw-bold">
                            <?= $ejemplares ?>
                        </span>
                    </div>
                    <div class="col">Inventario desde <span class="fw-bold">
                            <?= $inventario ?>
                        </span> al
                        <span class="fw-bold">
                            <?= $inventarioTotal ?>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- CARGA DE EJEMPLARES -->
    <?php
    if ($cargarEjemplar == 1) {
        for ($i = $inventario; $i <= $inventarioTotal; $i++) { ?>
            <section class="my-3">
                <div class="card shadow p-3">
                    <div class="row">
                        <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                            <label for="lugar" class="form-label">ID</label>
                            <input type="text" class="form-control" id="lugar" name="lugar" aria-describedby="lugar"
                                value="<?= $idLibro ?>" disabled>
                        </div>
                        <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                            <label for="inventario" class="form-label">Inventario</label>
                            <input type="text" class="form-control" id="inventario" name="inventario" value="<?= $i ?>"
                                aria-describedby="inventario" required>
                        </div>
                        <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select" name="estado" id="estado" required>
                                <?php $get_estados = get_estados();
                                while ($row = mysqli_fetch_array($get_estados)) { ?>
                                    <option value="<?= $row['id'] ?>">
                                        <?= $row['descripcion'] ?>
                                    </option>
                                <?php }
                                mysqli_data_seek($get_estados, 0)
                                    ?>
                            </select>
                        </div>
                        <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
                            <label for="fechaalta" class="form-label">Fecha Alta</label>
                            <input type="date" class="form-control" id="fechaalta" name="fechaalta" aria-describedby="fechaalta"
                                value="<?= $dt ?>" required>
                        </div>
                        <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
                            <label for="fechabaja" class="form-label">Fecha Baja</label>
                            <input type="date" class="form-control" id="fechabaja" name="fechabaja"
                                aria-describedby="fechabaja">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" id="observaciones" name="observaciones"
                                aria-describedby="observaciones" placeholder="Observaciones">
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    } ?>
    <div class="my-3 text-center">
        <button class="btn btn-success">Guardar ejemplares</button>
    </div>
</main>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>