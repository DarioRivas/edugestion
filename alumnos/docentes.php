<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/usuarios.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

$anio = $_GET['anio'];

function get_cursos($anio)
{
    $sqlCursos = "SELECT anio, division, turno FROM data_cursos WHERE anio = $anio;";
    $conexion = conectar();
    $queryCursos = mysqli_query($conexion, $sqlCursos);
    return $queryCursos;
}

function get_profes($anio, $division, $turno)
{
    $sqlProfes = "SELECT U.apellido, U.nombre, U.imagen, DM.nombre as materia, DM.aniodesc, DC.nombre AS curso
    FROM profes_materias PM INNER JOIN
    usuarios U ON PM.idusuarios = U.id
    INNER JOIN data_materias DM ON PM.iddata_materias = DM.id
    INNER JOIN data_cursos DC ON PM.iddata_cursos = DC.id
    WHERE DC.anio = $anio AND DC.division = $division AND DC.turno = '$turno'
    ORDER BY DM.nombre ASC;";
    $conexion = conectar();
    $queryProfes = mysqli_query($conexion, $sqlProfes);
    return $queryProfes;
}
?>

<main label="verdocentes">
    <header>
        <i class='bx bx-paper-plane'></i> Alumnos
    </header>
    <section class="container">
        <header>
            <div class="row align-items-center">
                <div class="col-2 text-success"><a href="verdocentes.php" class="d-flex"><i class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
                </div>
                <div class="col-8 text-center">
                    <h4>Docentes de
                        <?= $anio ?>º AÑO
                    </h4>
                </div>
                <div class="col-2"></div>
            </div>
        </header>
    </section>
    <section>
        <div class="container">
            <?php
            $cursos = get_cursos($anio);
            while ($aCursos = mysqli_fetch_array($cursos)) {
                $prof = get_profes($aCursos['anio'], $aCursos['division'], $aCursos['turno']);
                if (mysqli_num_rows($prof) != 0) {
            ?>
                    <div class="card shadow my-3 small">
                        <div class="card-header text-bg-success">
                            Docentes de <?= $aCursos['anio'] ?>° año <?= $aCursos['division'] ?>a división T<?= $aCursos['turno'] ?>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <?php while ($array = mysqli_fetch_array($prof)) { ?>
                                    <div class="col-xl-4 col-12  my-1">
                                        <div class="card shadow">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <div class="text-success fw-semibold"><?= $array['materia'] ?></div>
                                                        <div class="fs-6"> <?= $array['apellido'] . ', ' .  $array['nombre'] ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <?php if ($array['imagen'] != 'avatar4.png') { ?>
                                                        <img class="img-fluid rounded-end" src="../miusuario/imagenes/<?= $array['imagen'] ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php
            } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>