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
$where = " ";
$mesactual = date('m');
$whereaino = "";


/*
SELECT SMT.materia, SMT.archivo, data_materias.nomenclatura, data_materias.anio
FROM data_materias
LEFT JOIN  
(SELECT  anio, materia, archivo FROM mesas_trabajos WHERE anio = 1 AND mes = 8) SMT 
ON SMT.materia = data_materias.nomenclatura
WHERE data_materias.anio = 1
*/


if (isset($_POST['filtrar'])) {
    if (isset($_POST['mes']) && $_POST['mes'] != 0) {
        $mesactual = $_POST['mes'];
    }
    if (isset($_POST['anio']) && $_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where = " WHERE data_materias.anio = $anio ";
        $whereaino = " anio = $anio AND ";
    }
}

if (isset($_POST['faltan'])) {
    $where = " WHERE SMT.fechadecarga IS NULL ";
    if (isset($_POST['mes']) && $_POST['mes'] != 0) {
        $mesactual = $_POST['mes'];
    }
    if (isset($_POST['anio']) && $_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where .= " AND data_materias.anio = $anio ";
        $whereaino = " anio = $anio AND ";
    }
}

$trabajosQ =
    "SELECT data_materias.nombre, data_materias.anio, SMT.archivo, SMT.tipo, SMT.cargadopornombre, SMT.mes, SMT.fechadecarga, data_materias.nomenclatura
FROM data_materias
LEFT JOIN  
(SELECT anio, materia, archivo, tipo, cargadopornombre, mes, fechadecarga
FROM mesas_trabajos WHERE $whereaino mes = $mesactual AND aniolectivo = $aniolectivo) SMT 
ON SMT.materia = data_materias.nomenclatura
$where
ORDER BY data_materias.anio, data_materias.nombre";
$conexion = conectar();
$trabajosA = mysqli_query($conexion, $trabajosQ);
$ok = 0;
$flag = 1;
?>

<main label="guias">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section>
        <form action="guiasmesas.php" method="post">
            <div class="card shadow rounded pb-3 border border-dark">
                <div class="card-header text-bg-dark ">
                    Guías y Trabajos Prácticos
                </div>
                <div class="card-body">
                    <div class="row align-items-end">
                        <div class="col-xl-3 col-6">
                            <label for="mes" class="form-label mt-3 small">Mes de la mesa:</label>
                            <select class="form-select" name="mes" id="mes" required>
                                <option value="0" selected disabled>Mes</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="4">Abril</option>
                                <option value="5">Mayo</option>
                                <option value="6">Junio</option>
                                <option value="7">Julio</option>
                                <option value="8">Agosto</option>
                                <option value="9">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>
                        </div>
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
                        <!--<div class="col-xl-2 col-6">
                        <label for="tipo" class="form-label mt-3 small">Tipo:</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <option value="ninguno" selected disabled>Tipo</option>
                            <option value="Acreditacion">Acreditacion</option>
                            <option value="Previos">Previos</option>
                        </select>
                    </div>-->
                        <div class="col-xl-6 col-12 d-flex  pt-3">
                            <button class="btn btn-success w-50 d-flex btn-sm justify-content-center mx-1" name="filtrar">Filtrar<i class='bx bx-filter-alt bx-sm ms-2'></i></button>
                            <button class="btn btn-danger w-50 d-flex btn-sm justify-content-center" name="faltan">Faltan<i class='bx bx-question-mark bx-sm ms-2'></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <div class="card shadow rounded p-3 mt-2 border border-dark">
            <?php if (mysqli_num_rows($trabajosA) != 0) {
                while ($tps = mysqli_fetch_array($trabajosA)) {
                    $rad = $flag % 2;
                    if ($rad == 0) {
                        $fila = ' bg-success bg-opacity-10';
                    } else {
                        $fila = '';
                    }
            ?>
                    <div class="row border-3 <?= $fila ?> border-bottom border-success border-opacity-25 py-2">
                        <div class="col-xl-2 col-10 small" class=" d-flex justify-content-center ">
                            <?php if ($tps['fechadecarga'] != null) { ?>
                                <?= date('d/m/y', strtotime($tps['fechadecarga'])) ?>
                            <?php } else { ?>
                                <span class="text-danger">Sin cargar</span>
                            <?php } ?>
                        </div>
                        <div class="col-xl-3 col-12 order-xl-2 order-3 small">
                            <?php if ($tps['mes'] != null) { ?>
                                <i class='bx bx-calendar me-2' ></i><?= get_meses($tps['mes']) ?> /
                                <i class='bx bx-calendar-edit me-2' ></i><?= $tps['tipo'] ?>
                            <?php } ?>
                        </div>                       
                        <div class="col-xl-1 col-2 small">
                            <?= $tps['anio'] . '°' ?>
                        </div>
                        <div class="col-xl-3 col-12  small">
                        <?php if ($tps['cargadopornombre'] != null) { ?>
                            <i class='bx bxs-user me-2'></i><?= $tps['cargadopornombre'] ?>
                            <?php } ?>
                     
                        </div>
                        <div class="col-xl-3 col-12 order-last small fw-semibold">
                            <?php if ($tps['fechadecarga'] != null) { ?>
                                <a class="btn btn-success btn-sm w-100" href="../mesasdeexamen/trabajos/<?= $tps['archivo'] ?>" target="_blank"><?= $tps['nombre'] ?><i class='ms-1 bx bxs-download text-light '></i></a>
                            <?php } else { ?>
                                <?= $tps['nombre'] ?>
                            <?php } ?>
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