<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
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
        <header>
            <div class="text-center mb-3">
                <h3>
                    Documentación importante
                </h3>
            </div>
        </header>
    </section>
    <section>
        <div class="container">
            <div class="card shadow p-3 mb-5">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <i class='bx bx-check me-3'></i> Calendario Escolar 2024 <a
                            class="btn btn-success btn-sm ms-5"
                            href="https://educacion.rionegro.gov.ar/files/calendario/Calendario%20Escolar_2024.pdf"
                            target="_blank">
                            Descargar archivo <i class='bx bxs-download'></i></a>
                    </li>
                    <li class="list-group-item"> <i class='bx bx-check me-3'></i> DDJJ - Declaración jurada A4<a
                            class="btn btn-success btn-sm ms-5" href="documentacion/ddjj_A4.pdf" target="_blank">
                            Descargar archivo <i class='bx bxs-download'></i></a>
                    </li>
                    <li class="list-group-item"> <i class='bx bx-check me-3'></i> LIC - Solicitud de licencia<a
                            class="btn btn-success btn-sm ms-5" href="documentacion/solicitud_de_licencia.pdf"
                            target="_blank"> Descargar archivo <i class='bx bxs-download'></i></a>
                    </li>
                    <li class="list-group-item"> <i class='bx bx-check me-3'></i> INS - Solicitud de Inscripción Nivel
                        Medio - Interinatos y Suplencias<a class="btn btn-success btn-sm ms-5"
                            href="documentacion/solicitud_de_inscripcion.pdf" target="_blank"> Descargar archivo <i
                                class='bx bxs-download'></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>