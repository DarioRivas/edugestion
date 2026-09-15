<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$consulta = '';
$aniolectivo = date('Y');
$where = " WHERE P.aniolectivo = '$aniolectivo' ";


if (isset($_POST['filtrar'])) {
    if (isset($_POST['anio']) && $_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where .= " AND P.anio = '$anio' ";
    }
}

$planificacionesQ = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo, P.cuatrimestre
FROM planificaciones P
INNER JOIN data_materias M ON P.materia = M.nomenclatura
$where 
ORDER BY P.anio, materia;";
$conexion = conectar();
$planificacionesA = mysqli_query($conexion, $planificacionesQ);
$ok = 0;
$flag = 1;
?>

<main label="planificacionescargadas">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section>
        <form action="planificaciones.php" method="post">
            <div class="card shadow rounded  border border-dark">
                <div class="card-header text-bg-dark ">
                    Planificaciones
                </div>
                <div class="card-body">
                    <div class="row align-items-end">
                        <div class="col-xl-3 col-6">
                            <label for="anio" class="form-label mt-3 small">Nivel:</label>
                            <select class="form-select" name="anio" id="anio" required>
                                <option value="0" selected disabled>Año</option>
                                <option value="1">1ro</option>
                                <option value="2">2do</option>
                                <option value="3">3ro</option>
                                <option value="4">4to</option>
                                <option value="5">5to</option>
                                <option value="6">6to</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-6">
                            <button class="btn btn-success w-100 d-flex justify-content-center" name="filtrar">Filtrar<i class='bx bx-filter-alt bx-sm ms-2'></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <div class="card shadow rounded p-3 mt-2  border border-dark">
            <?php if (mysqli_num_rows($planificacionesA) != 0) {
                while ($tps = mysqli_fetch_array($planificacionesA)) { 
                    $rad = $flag % 2;
                    if ($rad == 0) {
                        $fila = ' bg-success bg-opacity-10';
                    } else {
                        $fila = '';
                    }?>
                    <div class="row border-3 <?= $fila ?> border-bottom border-success border-opacity-25 py-2 small">
                        <div class="col-xl-2 col-10">
                            <?= date('d/m/Y', strtotime($tps['fechadecarga'])) ?>
                        </div>
                        <div class="col-xl-auto col-2">
                            <?= $tps['anio'] . '°' ?>
                        </div>
                        <div class="col-xl col-12">
                            <b><?= $tps['materia'] ?></b> -
                            <?= $tps['cuatrimestre'] ?>° cuat.
                        </div>
                        <div class="col-xl-3 col-12">
                        <i class='bx bxs-user me-2'></i> <?= $tps['cargadopornombre'] ?>
                        </div>
                        <div class="col-xl-2 col-12">
                            <a class="btn btn-success btn-sm w-100" href="../docentes/planificaciones/<?= $tps['archivo'] ?>" target="_blank">Descargar</a>
                        </div>
                    </div>
                <?php $flag = $flag + 1;
                }
                $flag = 1;
            } else { ?>
                <div class="alert alert-warning">No se encontraron resultados que cumplan con los criterios de búsqueda.
                </div>
            <?php } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>