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
$ultimos = ' LIMIT 20 ';
$where = 'WHERE id > 0 ';

if (isset($_POST['busqueda'])) {
    if (isset($_POST['buscar']) && $_POST['buscar'] != '') {
        $buscar = $_POST['buscar'];
        $where .= " AND (
            nombre LIKE '%$buscar%'
            OR archivo LIKE '%$buscar%'
          ) ";
        $ultimos = '';
    }
}

$trabajosQ = "SELECT *
FROM log_descargas
$where
ORDER BY id DESC $ultimos ;";
$conexion = conectar();
$trabajosA = mysqli_query($conexion, $trabajosQ);
$ok = 0;
$flag = 1;
?>

<main label="guiasdescargadas">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>
    <section>
        <div class="card shadow rounded border border-dark">
            <div class="card-header text-bg-dark">
                Guías y Trabajos Prácticos descargados
            </div>
            <div class="card-body">
                <form action="guiasdescargadas.php" method="post">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <input type="text" class="form-control" name="buscar" id="buscar"
                                placeholder="Buscar por palabras clave">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-success w-100 justify-content-center d-flex" name="busqueda">Buscar<i class='bx bx-search-alt bx-sm ms-2'></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
                    } ?>
                    <div class="row border-3 <?= $fila ?> border-bottom border-success border-opacity-25 py-2 small">
                        <div class="col-xl-2 col-4">
                            <?= date('d/m/y', strtotime($tps['fecha'])) ?>
                        </div>
                        <div class="col-xl-4 col-8  fw-semibold">
                            <i class='bx bxs-user me-2'></i><?= $tps['nombre'] ?>
                        </div>
                        <div class="col-xl-6 col-12">
                            <i class='bx bxs-file-pdf me-2'></i><?= $tps['archivo'] ?>
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