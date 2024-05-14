<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$sql = "SELECT * from taller_material";
$array = mysqli_query($conexion, $sql);
$cant = mysqli_num_rows($array);
?>
<main label="materialdeconsulta">
    <header>
        <i class='bx bx-wrench'></i> Taller
    </header>
    <section>
        <header>
            <div class="text-center mb-3">
                <h3>
                    Material digital de consulta para Taller
                </h3>
            </div>
        </header>
    </section>
    <section class="container">
        <div class="card shadow p-3 mb-5">
            <?php if ($cant != 0) {
                while ($row = mysqli_fetch_array($array)) { ?>
                    <div class="row align-items-center border-bottom pb-2">
                        <div class="col-xl-9 col-lg-6 col-12 d-flex align-items-center">
                            <i class='bx bx-hard-hat me-2'></i> <?= $row['seccion'] ?> <i
                                class='ms-5 bx bx-file me-2'></i><?= $row['observaciones'] ?>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 d-flex align-items-center">
                            <a href="material/<?= $row['archivo'] ?>" class="btn btn-success w-100">Descargar archivo <i
                                    class='bx bxs-file-pdf mt-1 ms-2'></i></a>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="alert alert-danger">
                    No se econtraron archivos cargados
                </div>
            <?php } ?>
        </div>
    </section>
 
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>