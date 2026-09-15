<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$anio = $_GET['anio'];
$division = $_GET['division'];
$turno = $_GET['turno'];
$materiasA = get_GuiasPis($anio, $division, $turno);
$flag = 1;

?>
<main label="pisalumnosdire">
    <header>
        <i class='bx bx-paper-plane'></i> Alumnos
    </header>
    <section>
        <div class="card shadow mb-4">
            <div class="card-header text-bg-dark">Trabajos Prácticos de Periodo de Intensificación de Saberes para <?= $anio . "° " . $division . "a T" . $turno ?></div>
            <div class="card-body p-0 g-0 small">
                <div class="row py-2 px-4 bg-success g-0">
                    <div class="col fw-bold">MATERIA</div>
                    <div class="col fw-bold">DOCENTE</div>
                    <div class="col fw-bold">CUATRIMESTRE</div>
                    <div class="col fw-bold">DESCARGAR</div>
                </div>
                <?php while ($materias = mysqli_fetch_array($materiasA)) { ?>
                    <div class="row p-1 px-4 border-bottom align-items-center">
                        <div class="col"><?= $materias['nombre'] ?></div>
                        <div class="col"> <?= $materias['cargadopornombre'] ?></div>
                        <div class="col">
                            <?php
                            $cuatrimestre = "";
                            if (!is_null($materias['cuatrimestre'])) {
                                $cuatrimestre = $materias['cuatrimestre'] . "° Cuatrimestre";
                            } ?>
                            <?= $cuatrimestre ?>
                        </div>
                        <div class="col">
                            <?php if (!is_null($materias['archivo'])) { ?>
                                <!-- Apuntamos a descargar.php pasando el ID del trabajo -->
                                <a href="../docentes/periodosaberes/<?= $materias['archivo'] ?>" target="_blank" class="btn btn-sm btn-success w-100 text-center d-flex align-items-center justify-content-center">
                                    <i class='bx bxs-file-pdf text-white bx-sm me-2'></i> Descargar

                                    <!-- Mostramos el contador con un badge de Bootstrap -->
                                    <span class="badge text-bg-light rounded-pill ms-2" title="Descargas">
                                        <?= $materias['descargas'] ?>
                                    </span>
                                </a>
                            <?php } else { ?>
                                <a class="btn btn-sm btn-secondary w-100 text-center d-flex align-items-center justify-content-center disabled" aria-disabled="true" style="cursor: not-allowed;">
                                    <i class='bx bxs-file-pdf text-white bx-sm me-2'></i> No disponible
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>