<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/usuarios.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

$alert = '';

function get_cursos()
{
    $sqlCursos = "SELECT anio, division, turno FROM data_cursos ORDER BY anio ASC, division ASC, turno ASC;";
    $conexion = conectar();
    $queryCursos = mysqli_query($conexion, $sqlCursos);
    return $queryCursos;
}

if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM profes_materias WHERE id = $id";
    $conexion = conectar();
    mysqli_query($conexion, $sql);
    $alert = "<i class='bx bx-happy bx-sm me-2'></i> El registro se ha eliminado correctamente";
}

function get_profes($anio, $division, $turno)
{
    $sqlProfes = "SELECT PM.id, U.apellido, U.nombre, U.imagen, DM.nombre as materia, DM.aniodesc, DC.nombre AS curso
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

<main label="profesxmateria">
    <header>
        <i class='bx bx-bug'></i> Admin
    </header>
    <section>
        <header>
            <?php if ($alert != '') { ?>
                <div class="alert alert-danger">
                    <?= $alert ?>
                </div>
            <?php } ?>
        </header>
    </section>
    <section>
        <div class="card shadow">
            <div class="card-header text-bg-dark">Profes asignados por materia</div>
            <div class="card-body">
                <div>
                    <?php $cursos = get_cursos();
                    while ($aCursos = mysqli_fetch_array($cursos)) {
                        $prof = get_profes($aCursos['anio'], $aCursos['division'], $aCursos['turno']);
                        if (mysqli_num_rows($prof) != 0) { ?>
                            <div class="alert alert-success my-1 small pb-0">
                                <?php while ($array = mysqli_fetch_array($prof)) { ?>
                                    <div class="row my-1 pb-1 border-bottom align-items-center">
                                        <div class="col-xl-4 col-7"><?= $array['materia'] ?></div>
                                        <div class="col-xl-2 col-5"><?= $array['curso'] ?></div>
                                        <div class="col-xl-4 col-12"> <?= $array['apellido'] . ', ' .  $array['nombre'] ?></div>
                                        <div class="col-xl-2 col-12">
                                            <form action="profesxmateria.php" method="post">
                                                <button class="btn btn-sm btn-danger w-100" type="submit" name="eliminar">Desvincular</button>
                                                <input type="hidden" name="id" value="<?= $array['id'] ?>">
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>