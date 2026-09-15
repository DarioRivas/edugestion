<?php
session_start();
define('ROOT_DIR', '../');
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/recursos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$uniqueId = " ";
$alertText = "";
$alertColor = "";
$get_cursos = "SELECT * FROM data_cursos WHERE activo = 1;";
$arrayCursos = mysqli_query($conexion, $get_cursos);
$userId = $_SESSION['user-id'];
if (isset($_POST['submit'])) {
    $uniqueId = uniqid();
    $fecha = $_POST['fecha'];
    $horaDesde = $_POST['horadesde'];
    $horaHasta = $_POST['horahasta'];
    $desde = "$fecha $horaDesde";
    $hasta = "$fecha $horaHasta";
    $observaciones = $_POST['observaciones'];
    $cantidad = 1;
    $numrows = 0;
    $hacerReserva = 1;
    $recursoDesc = '';
    $curso = $_POST['curso'];
    foreach ($_POST['recursos'] as &$recursoId) {
        $numrows = mysqli_query($conexion, "SELECT T.nombre AS tipo, RE.nombre FROM reservas R
        INNER JOIN recursos_ejemplares E ON R.recursoid = E.id
        INNER JOIN recursos RE ON E.idrecurso = RE.id
        INNER JOIN recursos_tipos T ON RE.tipo = T.id
        WHERE R.recursoid = $recursoId AND R.desde <= '$hasta' AND R.hasta >= '$desde'
        LIMIT 1;");
        if (mysqli_num_rows($numrows) >= 1) {
            $recNombre = mysqli_fetch_assoc($numrows);
            $recursoDesc = $recNombre['tipo'] . ' ' . $recNombre['nombre'];
            $alertColor = "alert-danger";
            $alertText .= "<i class='bx bxs-error bx-md me-3'></i> ATENCIÓN: El recurso &nbsp<b>'$recursoDesc'</b>&nbsp ya se encuentra reservado para ese día, en este horario. <br>";
            $hacerReserva = 0;
        }
    }
    if ($hacerReserva == 1) {
        foreach ($_POST['recursos'] as &$recursoId) {
            if ($recursoId == -1) {
                $cantidad = $_POST['cantNets'];
            }
            $sqlCargarReserva = "
            INSERT INTO reservas
            (`reservaid`,
            `recursoid`,
            `usuarioid`,
            `desde`,
            `hasta`,
            `cantidad`,
            `estado`,
            `cargadoel`,
            `observaciones`,
            `curso`)
            VALUES
            ('$uniqueId',
            '$recursoId',
            '$userId',
            '$desde',
            '$hasta',
            '$cantidad',
            'solicitado',
            NOW(),
            '$observaciones',
            '$curso')";
            mysqli_query($conexion, $sqlCargarReserva);
        }
        $alertColor = "alert-success";
        $alertText = "<i class='bx bx-happy-alt bx-md me-3' ></i> La reserva se ha cargado con éxito!";
    }
}

if (isset($_POST['eliminar'])) {
    $uniqueId  = $_POST['eliminar'];
    $sqlDelete = "DELETE FROM `reservas` WHERE reservaid = '$uniqueId'";
    mysqli_query($conexion, $sqlDelete);
    $alertColor = "alert-warning";
    $alertText = "<i class='bx bxs-trash bx-md me-3' ></i> La reserva se ha eliminado con éxito!";
}
?>
<main data-label="reservastic">
    <header>
        <i class='bx bx-book'></i> TIC
    </header>
    <?php if ($uniqueId != " ") { ?>
        <section>
            <div class="alert d-flex justify-content-center align-items-center <?= $alertColor ?>">
                <?= $alertText ?>
            </div>
        </section>
    <?php } ?>
    <section class="mb-4">
        <div class="card shadow ">
            <div class="card-header text-bg-danger"><i class='bx bx-task me-2'></i> RECURSOS RESERVADOS</div>
            <div class="card-body small">
                <div class="row fw-semibold ">
                    <div class="col-xl-3  d-none d-xl-block">
                        <span class="d-xl-block">Pedido para</span>
                    </div>
                    <div class="col-xl-4  d-none d-xl-block">
                        <span class="d-xl-block">Docente / Curso</span>
                    </div>
                    <div class="col-xl-4  d-none d-xl-block">
                        <span class="d-xl-block">Recursos</span>
                    </div>
                    <div class="col-xl-1  d-none d-xl-block">
                    </div>
                </div>
                <hr class=" d-none d-xl-block my-1">
                <form action="rec.php" method="post">
                    <?php $get_reservas = get_reservas();
                    while ($reserva = mysqli_fetch_array($get_reservas)) { ?>
                        <div class="row mt-3">
                            <div class="col-xl-3">
                                <span class="d-xl-none fw-semibold">Para el: </span> <?= date("d/m", strtotime($reserva['desde'])) ?> de <?= date("H:i", strtotime($reserva['desde'])) . "hs" ?> a <?= date("H:i", strtotime($reserva['hasta'])) . "hs" ?>
                            </div>
                            <div class="col-xl-4">
                                <span class="d-xl-none fw-semibold">Por: </span><?= $reserva['apellido'] . ' ' . $reserva['nombre'] . ' / ' . $reserva['curso'] ?>
                            </div>
                            <div class="col-xl-4">
                                <span class="d-xl-none fw-semibold">Recurso: </span><?= $reserva['recurso'] ?>
                            </div>
                            <div class="col-xl-1">
                                <?php if ($_SESSION['user-id'] == $reserva['usuarioid'] || $_SESSION['user-rol'] == 'admin') { ?>
                                    <button class="btn btn-danger btn-sm w-100" type="submit" name="eliminar" value="<?= $reserva['reservaid'] ?>"> <i class='bx bxs-trash'></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <hr class="mt-1">
                    <?php } ?>
                </form>
            </div>
        </div>
    </section>
    <section class="mb-4">
        <div class="card">
            <form method="post" action="rec.php">
                <div class="card-header text-bg-success"><i class='bx bx-clipboard me-2'></i>CARGAR UNA NUEVA RESERVA</div>
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="text-center fw-semibold">Tilde los recursos que desee reservar</h6>
                        <div class="row p-3">
                            <?php $get_recursos = get_recursos_biblio();
                            while ($recu = mysqli_fetch_array($get_recursos)) { ?>
                                <div class="col-12 col-xl-6 my-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="recursos[]" value="<?= $recu['id'] ?>" id="recursos-<?= $recu['id'] ?>" />
                                        <label class="form-check-label" for="recursos-<?= $recu['id'] ?>">
                                            <?= $recu['tipo'] . ': ' . $recu['descripcion'] ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-12 col-xl-4">
                                <div class="form-check d-flex justify-content-start align-items-center">
                                    <input class="form-check-input" type="checkbox" name="recursos[]" value="-1" id="recursos-0" disabled />
                                    <label class="ps-2 form-check-label" for="recursos-0">Netbooks: </label>
                                    <select class="ms-2 form-select form-select-sm" aria-label=".form-select-sm example" name="cantNets" disabled>
                                        <option value="0">Elegir cantidad</option>
                                        <option value="30">Carro Completo</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="text-center fw-semibold">Elija la fecha y horario de la reserva</h6>
                        <div class="row px-3 ">
                            <div class="col-12 col-xl-3">
                                <label for="fecha">Fecha:</label>
                                <input id="fecha" name="fecha" class="form-control" type="date" required>
                            </div>
                            <div class="col-6 col-xl-3">
                                <label for="horadesde">Desde hora:</label>
                                <input type="time" class="form-control" id="horadesde" name="horadesde" required>
                            </div>
                            <div class="col-6 col-xl-3">
                                <label for="horahasta">Hasta hora:</label>
                                <input type="time" class="form-control" id="horahasta" name="horahasta" required>
                            </div>
                            <div class="col-12 col-xl-3">
                                <label for="curso">Curso:</label>
                                <select class=" form-select" aria-label="example" name="curso" required>
                                    <option selected disabled></option>
                                    <?php
                                    while ($listado = mysqli_fetch_array($arrayCursos)) {
                                    ?>
                                        <option value="<?= $listado['id'] ?>"><?= $listado['nombre'] ?></option>
                                    <?php } ?>
                                    <option value="-1">Otro (especificar abajo)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <h6 class="text-center fw-semibold">Observaciones</h6>
                        <div class="row px-3">
                            <div class="input-group">
                                <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <input type="hidden" name="uniqueId" value="<?= $uniqueId ?>">
                    <button class="btn btn-success px-5" type="submit" name="submit" id="submit" disabled><i class='bx bx-task me-2'></i>Enviar solicitud de reserva</button>
                </div>
            </form>
        </div>
    </section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fechaInput = document.getElementById('fecha');
        const hoy = new Date().toISOString().split('T')[0];
        fechaInput.setAttribute('min', hoy);
    });

    document.getElementById('horahasta').addEventListener('change', function() {
        const horadesde = document.getElementById('horadesde').value;
        const horahasta = document.getElementById('horahasta').value;

        if (horadesde && horahasta && horadesde > horahasta) {
            alert("La hora 'Desde' no puede ser mayor que la hora 'Hasta'.");
            document.getElementById('horahasta').value = '';
        }
    });
</script>
<script>
    $('#submit').prop("disabled", true);
    $('input:checkbox').click(function() {
        if ($(this).is(':checked')) {
            $('#submit').prop("disabled", false);
        } else {
            if ($('.checks').filter(':checked').length < 1) {
                $('#submit').attr('disabled', true);
            }
        }
    });
</script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>