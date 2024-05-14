<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
$userId = $_SESSION['user-id'];
$userApellido = $_SESSION['user-apellido'];
$alert = '';
$color = '';
$conexion = conectar();

if (isset($_POST['registrar'])) {
    $materia = $_POST['materia'];
    $cursos = $_POST['divisiones'];
    $sql = "INSERT INTO profes_materias (idusuarios, iddata_materias, iddata_cursos) VALUES ('$userId', '$materia', '$cursos');";
    mysqli_query($conexion, $sql);
    $alert = "<i class='bx bx-happy bx-sm me-2'></i> El curso se ha registrado correctamente";
    $color = 'alert-success';
}

if (isset($_POST['eliminar'])) {
    $idCurso = $_POST['idCurso'];
    $sql = "DELETE FROM profes_materias WHERE id = $idCurso";
    mysqli_query($conexion, $sql);
    $alert = "<i class='bx bx-happy bx-sm me-2'></i> El registro se ha eliminado correctamente";
    $color = 'alert-warning';
}

$sql = "SELECT P.id, M.nombre AS materia, C.nombre AS curso FROM profes_materias P
INNER JOIN data_materias M ON P.iddata_materias = M.id
INNER JOIN data_cursos C on P.iddata_cursos = C.id WHERE idusuarios = $userId ORDER BY curso, materia";
$result = mysqli_query($conexion, $sql);
$registros = mysqli_num_rows($result);
require_once (ROOT_DIR . "_includes/sidebar.php");
?>

<main label="miscursos">
    <header>
        <i class='bx bx-user-circle'></i> Mi usuario
    </header>
    <section>
        <header>
            <div class="text-center my-3">
                <h4>Registrarme en cursos y materias</h4>
            </div>
            <?php if ($alert != '') { ?>
                <div>
                    <div class="alert <?= $color ?> d-flex"><?= $alert ?>
                    </div>
                </div>
            <?php } ?>
        </header>
        <div class="card shadow p-3 mb-5">
            <form action="materias.php" method="post">
                <div class="row align-items-end">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                        <label for="anios" class="form-label mt-3 small">Año de cursado:</label>
                        <select class="form-select" name="anio" id="anios" required>
                            <option selected disabled>Año</option>
                            <option value="1">1er año</option>
                            <option value="2">2do año</option>
                            <option value="3">3er año</option>
                            <option value="4">4to año</option>
                            <option value="5">5to año</option>
                            <option value="6">6to año</option>
                        </select>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-lg-6 col-12">
                        <label for="materias" class="form-label mt-3 small">Materia:</label>
                        <select class="form-select  input-control" name="materia" id="materias" required>
                            <option selected disabled>Materia</option>
                        </select>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                        <label for="divisiones" class="form-label mt-3 small">División:</label>
                        <select class="form-select" name="divisiones" id="divisiones" required>
                            <option selected disabled>Division</option>
                        </select>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-12">
                        <button class="btn btn-success w-100 d-flex justify-content-center mt-3" name="registrar">Registrar
                            <i class='ms-3 bx bx-message-check bx-sm'></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center my-3">
            <h4>Mis cursos y materias</h4>
        </div>
        <div class="card shadow p-3 mb-5 text-center">
            <?php if ($registros != 0) {
                while ($reg = mysqli_fetch_array($result)) { ?><form action="materias.php" method="post">
                    <div class="row align-items-end justify-content-center py-2 border-bottom">                        
                            <div class="col-xl-6 col-lg-4 col-12 text-start">
                                <span class="small text-muted">Materia: </span><?= $reg['materia'] ?>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 text-start">
                                <span class="small text-muted">Curso: </span><?= $reg['curso'] ?>
                            </div>
                            <input type="hidden" name="idCurso" value="<?= $reg['id'] ?>">
                            <div class="col-xl-2 col-lg-2 col-6">
                                <button class="btn btn-danger w-100" name="eliminar">Eliminar <i class='ms-2 bx bx-trash'></i></button>
                            </div>                       
                    </div>
                    </form>
                <?php }
            } else { ?>
                <div class="alert alert-warning">No se registraron cursos aún...</div>
            <?php } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<script>
    $(document).ready(function () {
        $('#anios').change(function () {
            var anioNum = $(this).val();
            if (anioNum !== '') {
                $.ajax({
                    url: 'get_divisiones.php',
                    method: 'GET',
                    data: { anioNum: anioNum },
                    success: function (data) {
                        $('#divisiones').html(data);
                    }
                });
            } else {
                $('#divisiones').html('<option value="">Divisiones</option>');
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#anios').change(function () {
            var stateId = $(this).val();
            if (stateId !== '') {
                $.ajax({
                    url: 'get_materias.php',
                    method: 'GET',
                    data: { stateId: stateId },
                    success: function (data) {
                        $('#materias').html(data);
                    }
                });
            } else {
                $('#materias').html('<option value="">Materias</option>');
            }
        });
    });
</script>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>