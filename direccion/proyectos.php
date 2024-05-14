<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/admin.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$consulta = '';
$aniolectivo = date('Y');
$where = " WHERE P.aniolectivo = '$aniolectivo' ";


if (isset($_POST['filtrar'])) {
    if (isset($_POST['anio']) && $_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where .= " AND P.anio = '$anio' ";
    }
}

$proyectosQ = "SELECT P.anio, M.nombre AS materia, P.aniolectivo, P.fechadecarga, P.cargadopornombre, P.archivo
FROM proyectos P
INNER JOIN data_materias M ON P.materia = M.nomenclatura
$where 
ORDER BY P.anio, materia;";
$conexion = conectar();
$proyectosA = mysqli_query($conexion, $proyectosQ);
$ok = 0;
?>

<main label="proyectoscargados">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section class="container">
        <header>
            <div class="text-center">
                <h4>Proyectos</h4>
            </div>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente</div>
                </div>
            <?php } ?>
        </header>
    </section>
    <section>
        <form action="proyectos.php" method="post">
            <div class="card shadow rounded pb-3 px-3">
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
                    <button class="btn btn-success w-100 d-flex  justify-content-center" name="filtrar">Filtrar<i class='bx bx-filter-alt bx-sm ms-2' ></i></button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <div class="card shadow rounded p-3 mt-2">
            <?php if (mysqli_num_rows($proyectosA) != 0) {
                while ($tps = mysqli_fetch_array($proyectosA)) { ?>
                    <div class="row border-3 border-bottom border-success border-opacity-25 py-2">
                        <div class="col-xl-2 col-10">
                            <?= date('d/m/y', strtotime($tps['fechadecarga'])) ?>
                        </div>
                        <div class="col-xl-1 col-2">
                            <?= $tps['anio'] . '°' ?>
                        </div>
                        <div class="col-xl-4 col-12 fw-semibold">
                            <?= $tps['materia'] ?>
                        </div>
                        <div class="col-xl-2 col-12">
                            Prof. <?= $tps['cargadopornombre'] ?>
                        </div>
                        <div class="col-xl-2 col-12">
                            <a class="text-success" href="../docentes/proyectos/<?= $tps['archivo'] ?>"
                                target="_blank">Descargar</a>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="alert alert-warning">No se encontraron resultados que cumplan con los criterios de búsqueda.
                </div>
            <?php } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>