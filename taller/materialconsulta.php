<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$sql = "SELECT * from taller_material";
$array = mysqli_query($conexion, $sql);
$cant = mysqli_num_rows($array);
$flag = 1;
?>
<main label="materialdeconsulta">
    <header>
        <i class='bx bx-wrench'></i> Taller
    </header>
    <section class="container">
        <div class="card shadow mb-5">
            <div class="card-header text-bg-dark">MATERIAL DIGITAL DE CONSULTA</div>
            <div class="card-body">
                <?php if ($cant != 0) {
                    while ($row = mysqli_fetch_array($array)) { 
                        $rad = $flag % 2;
                        if ($rad == 0) {
                            $fila = ' bg-success bg-opacity-10';
                        } else {
                            $fila = '';
                        }?>
                        <div class="row align-items-center <?= $fila ?> border-bottom py-2 small">
                            <div class="col-xl-2 col-lg-2 col-12 d-flex align-items-center">
                                <i class='bx bx-hard-hat me-2'></i> <?= $row['seccion'] ?> 
                            </div>
                            <div class="col-xl-3 col-lg-2 col-12 d-flex align-items-center">
                                <i class='bx bxs-user me-2'></i>  <?= $row['docente'] ?> 
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 d-flex align-items-center">
                            <i class='bx bx-file me-2'></i><?= $row['observaciones'] ?>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-12 d-flex align-items-center">
                                <a href="material/<?= $row['archivo'] ?>" class="btn btn-success btn-sm w-100">Descargar archivo <i class='bx bxs-file-pdf mt-1 ms-2'></i></a>
                            </div>
                        </div>
                    <?php $flag = $flag + 1;
                }
                $flag = 1;
                } else { ?>
                    <div class="alert alert-light">
                        No hay documentos cargados aún...
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>