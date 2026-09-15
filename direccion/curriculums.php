<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

$conexion = conectar();

// Consulta adaptada a la tabla curriculums
$curriculumsQ = "SELECT archivo, cargadoporid, cargadopornombre, fecha FROM curriculums ORDER BY fecha DESC";
$curriculumsA = mysqli_query($conexion, $curriculumsQ);

$ok = 0;
$flag = 1;
?>

<main label="curriculumscargados">
    <header>
        <i class='bx bx-briefcase'></i> Dirección
    </header>

    <section>
        <div class="card shadow rounded mt-4 border border-dark">
            <div class="card-header text-bg-dark mb-3 rounded">
                Currículums Cargados
            </div>

            <!-- Encabezados de las columnas -->
            <div class="row fw-semibold text-success px-2">
                <div class="col-xl-3 col-10">
                    Fecha
                </div>
                <div class="col-xl-6 col-12">
                    Cargado por
                </div>
                <div class="col-xl-3 col-12 text-center">
                    Archivo
                </div>
            </div>
            <!-- Listado de datos -->
            <?php if (mysqli_num_rows($curriculumsA) != 0) {
                while ($cvs = mysqli_fetch_array($curriculumsA)) {
                    $rad = $flag % 2;
                    if ($rad == 0) {
                        $fila = ' bg-success bg-opacity-10';
                    } else {
                        $fila = '';
                    } ?>
                    <div class="row border-3 <?= $fila ?> border-bottom border-success border-opacity-25 py-2 small align-items-center px-2">
                        <!-- Fecha -->
                        <div class="col-xl-3 col-10">
                            <?php if ($cvs['fecha'] != null) { ?>
                                <?= date('d/m/y', strtotime($cvs['fecha'])) ?>
                            <?php } else { ?>
                                <span class="text-danger">sin cargar</span>
                            <?php } ?>
                        </div>

                        <!-- Nombre de quien cargó -->
                        <div class="col-xl-6 col-12 fw-semibold">
                            <?php if ($cvs['cargadopornombre'] != null) { ?>
                                <i class='bx bxs-user me-2'></i><?= $cvs['cargadopornombre'] ?>
                            <?php } ?>
                        </div>

                        <!-- Botón de Descarga -->
                        <div class="col-xl-3 col-12 text-center">
                            <?php if ($cvs['archivo'] != null) { ?>
                                <a class="btn btn-success btn-sm w-100" href="../alumnos/curriculums/<?= $cvs['archivo'] ?>" target="_blank">
                                    <i class='bx bx-download me-1'></i>Descargar
                                </a>
                            <?php } else { ?>
                                <span class="text-muted small">Sin archivo</span>
                            <?php } ?>
                        </div>

                    </div>
                <?php $flag = $flag + 1;
                }
                $flag = 1;
            } else { ?>
                <div class="alert alert-warning mt-3">No se encontraron currículums cargados en el sistema.</div>
            <?php } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>