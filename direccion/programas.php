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
$where = ' WHERE SMT.activo = 1 ';
if (isset($_POST['filtrar'])) {
    if ($_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where = " WHERE SMT.anio = $anio AND SMT.activo = 1 ";
    }
}
$programasQ =
    "SELECT data_materias.nombre as materia, data_materias.anio, SMT.archivo, SMT.cargadopornombre, SMT.fechadecarga, data_materias.nomenclatura
FROM data_materias
LEFT JOIN
(SELECT anio, materia, archivo, cargadopornombre, fechadecarga
FROM programas where aniolectivo = $aniolectivo) SMT 
ON SMT.materia = data_materias.nomenclatura
ORDER BY data_materias.anio, data_materias.nombre";





$conexion = conectar();
$programasA = mysqli_query($conexion, $programasQ);
$ok = 0;
$flag = 1;
?>

<main label="programascargados">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section>
        <form action="programas.php" method="post">
            <div class="card shadow rounded border border-dark">
                <div class="card-header text-bg-dark ">
                    Programas
                </div>
                <div class="card-body">
                    <div class="row align-items-end">
                        <div class="col-xl-3 col-6">
                            <label for="anio" class="form-label mt-3 small">Nivel:</label>
                            <select class="form-select" name="anio" id="anio" required>
                                <option value="0" selected>TODOS</option>
                                <option value="1">1ro</option>
                                <option value="2">2do</option>
                                <option value="3">3ro</option>
                                <option value="4">4to</option>
                                <option value="5">5to</option>
                                <option value="6">6to</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-6">
                            <button class="btn btn-success btn-sm w-100 d-flex  justify-content-center" name="filtrar">Filtrar<i class='bx bx-filter-alt bx-sm ms-2'></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <div class="card shadow rounded p-3 mt-2 border border-dark">
            <div class="row  fw-semibold text-success">
                <div class="col-xl-2 col-10">
                    Fecha
                </div>
                <div class="col-xl-1 col-2">
                    Año
                </div>
                <div class="col-xl col-12 ">
                    Materia
                </div>
                <div class="col-xl-3 col-12">
                    Docente
                </div>
                <div class="col-xl-2 col-12 text-center">
                    Archivo
                </div>
            </div>
            <?php if (mysqli_num_rows($programasA) != 0) {
                while ($tps = mysqli_fetch_array($programasA)) {
                    $rad = $flag % 2;
                    if ($rad == 0) {
                        $fila = ' bg-success bg-opacity-10';
                    } else {
                        $fila = '';
                    } ?>
                    <div class="row border-3 <?= $fila ?> border-bottom border-success border-opacity-25 py-2 small">
                        <div class="col-xl-2 col-10">
                            <?php if ($tps['fechadecarga'] != null) { ?>
                                <?= date('d/m/y', strtotime($tps['fechadecarga'])) ?>
                            <?php } else { ?>
                                <span class=" text-danger">sin cargar</span>
                            <?php } ?>
                        </div>
                        <div class="col-xl-1 col-2">
                            <?= $tps['anio'] ?>
                        </div>
                        <div class="col-xl col-12 fw-semibold">
                            <?= $tps['materia'] ?>
                        </div>
                        <div class="col-xl-3 col-12">
                            <?php if ($tps['cargadopornombre'] != null) { ?>
                                <i class='bx bxs-user me-2'></i><?= $tps['cargadopornombre'] ?>
                            <?php } ?>
                        </div>
                        <div class="col-xl-2 col-12 text-center">
                            <?php if ($tps['archivo'] != null) { ?>
                                <a class="btn btn-success btn-sm w-100" href="../docentes/programas/<?= $tps['archivo'] ?>" target="_blank">Descargar</a>
                            <?php } else { ?>

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