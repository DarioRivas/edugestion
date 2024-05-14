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
$mesactual = " AND TP.mes = '" . date('m') . "' ";
$aniolectivo = date('Y');
$where = " WHERE TP.aniolectivo = '$aniolectivo' ";


if (isset($_POST['filtrar'])) {
    if (isset($_POST['mes']) && $_POST['mes'] != 0) {
        $mesactual = " AND TP.mes = '" . $_POST['mes'] . "' ";
    }
    if (isset($_POST['anio']) && $_POST['anio'] != 0) {
        $anio = $_POST['anio'];
        $where .= " AND TP.anio = '$anio' ";
    }
    if (isset($_POST['tipo']) && $_POST['tipo'] != 'ninguno') {
        $tipo = $_POST['tipo'];
        $where .= " AND TP.tipo = '$tipo' ";
    }
}

$trabajosQ = "SELECT TP.anio, M.nombre AS materia, TP.mes, TP.aniolectivo, TP.tipo, TP.fechadecarga, TP.cargadopornombre
FROM mesas_trabajos TP
INNER JOIN data_materias M ON TP.materia = M.nomenclatura
$where $mesactual 
ORDER BY TP.anio, materia, TP.tipo;";
$conexion = conectar();
$trabajosA = mysqli_query($conexion, $trabajosQ);
$ok = 0;
?>

<main label="guias">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section class="container">
        <header>
            <div class="text-center">
                <h4>Guías y Trabajos Prácticos</h4>
            </div>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente</div>
                </div>
            <?php } ?>
        </header>
    </section>
    <section>
        <form action="guiasmesas.php" method="post">
            <div class="card shadow rounded pb-3 px-3">
                <div class="row align-items-end">
                    <div class="col-xl-3 col-6">
                        <label for="mes" class="form-labelsmall mt-3 small">Mes de la mesa:</label>
                        <select class="form-select" name="mes" id="mes" required>
                            <option value="0" selected disabled>Mes</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
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
                    <div class="col-xl-3 col-6">
                        <label for="tipo" class="form-label mt-3 small">Tipo:</label>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <option value="ninguno" selected disabled>Tipo</option>
                            <option value="Acreditacion">Acreditacion</option>
                            <option value="Previos">Previos</option>
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
            <?php if (mysqli_num_rows($trabajosA) != 0) {
                while ($tps = mysqli_fetch_array($trabajosA)) { ?>
                    <div class="row border-3 border-bottom border-success border-opacity-25 py-2">
                        <div class="col-xl-1 col-3">
                            <?= date('d/m/y', strtotime($tps['fechadecarga'])) ?>
                        </div>
                        <div class="col-xl-1 col-3">
                            <?= get_meses($tps['mes']) ?>
                        </div>
                        <div class="col-xl-2 col-4">
                            <?= $tps['tipo'] ?>
                        </div>
                        <div class="col-xl-1 col-2">
                            <?= $tps['anio'] . '°' ?>
                        </div>
                        <div class="col-xl-4 col-12 fw-semibold">
                            <?= $tps['materia'] ?>
                        </div>
                        <div class="col-xl-3 col-12">
                            <?= $tps['cargadopornombre'] ?>
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