<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
function get_Materias($anio)
{
    $query = "SELECT * FROM data_materias WHERE anio = $anio;";
    $result = mysqli_query(conectar(), $query);
    return $result;
}

function get_Cursos()
{
    $query = "SELECT * FROM data_cursos GROUP BY anio;";
    $result = mysqli_query(conectar(), $query);
    return $result;
}
?>

<main label="documentacionsecre">
    <header>
        <i class='bx bx-pen'></i> Secretaría Online
    </header>
    <section>
        <div class="container">
            <div class="card shadow mb-5">
                <div class="card-header text-bg-dark">DOCUMENTACIÓN IMPORTANTE</div>
                <div class="card-body">
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9">
                            <i class='bx bx-check me-3'></i> Calendario Escolar 2026
                        </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/calendario_2026.pdf" target="_blank">Descargar archivo <i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i> DDJJ - Declaración jurada A4</div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/ddjj_A4.pdf" target="_blank">Descargar archivo <i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i> LIC - Solicitud de licencia </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/solicitud_de_licencia.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i> PEI 2026 </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/PEI_2026.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i> Acuerdos de convivencia</div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/AEC.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>Acuerdos de laboratorio</div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/acuerdos_laboratorio.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>Reglamento de taller</div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/reglamento_taller.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>Primera reunión de personal </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/reuniondepersonal_03_2026.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>Segunda reunión de personal </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/reuniondepersonal_08_2026.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i> INSTRUCTIVO: Licencias </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/instructivo_licencias.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>INSTRUCTIVO: Pasos para la realización de un proyecto </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/instructivo_proyecto.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>
                    <div class="row pb-2 mb-2 border-bottom">
                        <div class="col-xl-9"> <i class='bx bx-check me-3'></i>INSTRUCTIVO: Modelo de planificación </div>
                        <div class="col-xl-3"><a class="btn btn-success btn-sm w-100" href="documentacion/instructivo_planificacion.pdf" target="_blank">Descargar archivo<i class='bx bxs-download'></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>