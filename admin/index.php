<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/admin.php");
include(ROOT_DIR . "_functions/trabajos.php");
include(ROOT_DIR . "_functions/recursos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$usuariosA = get_ultimosUsuarios();
$trabajosA = get_ultimosTrabajos();
$usuariosL = get_ultimosUsuariosLog();
$ok = 0;
?>

<main label="paneladmin">
    <header>
        <i class='bx bx-bug'></i> Admin<span class="blink_me">_</span>
    </header>
    <section class="container">
        <header>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente</div>
                </div>
            <?php } ?>
        </header>
    </section>
    <section class="mb-3">
        <div class="card shadow small">
            <div class="card-header text-bg-dark ">Reservas de recursos activas</div>
            <div class="card-body">
                <div class="row text-success">
                    <div class="col-xl-3  d-none d-xl-block">
                        <span class="d-xl-block">Pedido para el</span>
                    </div>
                    <div class="col-xl-3  d-none d-xl-block">
                        <span class="d-xl-block">Docente</span>
                    </div>
                    <div class="col-xl-3  d-none d-xl-block">
                        <span class="d-xl-block">Recursos</span>
                    </div>
                    <div class="col-xl-2  d-none d-xl-block">
                        <span class="d-xl-block">Cargado</span>
                    </div>
                    <div class="col-xl-1  d-none d-xl-block">

                    </div>
                </div>
                <hr class=" d-none d-xl-block mt-0">
                <?php $get_reservas = get_reservas();
                while ($reserva = mysqli_fetch_array($get_reservas)) { ?>
                    <div class="row">
                        <div class="col-xl-3">
                            <span class="d-xl-none fw-semibold">Para el: </span><?= date("d/m", strtotime($reserva['desde'])) ?> de <?= date("H:i", strtotime($reserva['desde'])) . "hs" ?> a <?= date("H:i", strtotime($reserva['hasta'])) . "hs" ?>
                        </div>
                        <div class="col-xl-3">
                            <span class="d-xl-none fw-semibold">Docente: </span><?= $reserva['apellido'] ?>, <?= $reserva['nombre'] ?> / <?= $reserva['curso'] ?>
                        </div>
                        <div class="col-xl-3">
                            <span class="d-xl-none fw-semibold">Recurso: </span><?= $reserva['recurso'] ?>
                        </div>
                        <div class="col-xl-2">
                            <span class="d-xl-none fw-semibold">Cargado: </span> <?= date("d/m - H:i", strtotime($reserva['cargadoel'])) . 'hs' ?>
                        </div>
                        <div class="col-xl-1">
                            <?php if ($_SESSION['user-id'] == $reserva['usuarioid'] || $_SESSION['user-rol'] == 'admin') { ?>
                                <button class="btn btn-danger btn-sm w-100" type="submit" name="eliminar" value="<?= $reserva['reservaid'] ?>"> <i class='bx bxs-trash'></i></button>
                            <?php } ?>
                        </div>
                        <?php if($reserva['observaciones'] != ''){ ?>
                            <div class="col-12">
                            <span class="d-xl-none text-danger">Observaciones:</span> <?= $reserva['observaciones'] ?>
                        </div>
                        <?php } ?>
                       
                    </div>
                    <hr class="my-1">
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="mb-3">
        <div class="card shadow small">
            <div class="card-header text-bg-dark ">últimos 10 usuarios logeados</div>
            <div class="card-body">
                <div class="row text-success border-bottom">
                    <div class="col-xl-3 col-12">apellido y nombre</div>
                    <div class="col-xl-2 col-6">fecha hora</div>
                </div>
                <?php while ($login = mysqli_fetch_array($usuariosL)) { ?>
                    <div class="row border-bottom py-1">
                        <div class="col-xl-3 col-12">
                            <?= $login['nombre'] ?>
                        </div>
                        <div class="col-xl-2 col-6 <?= $color ?>">
                            <?= $login['fecha'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="mb-3">
        <div class="card shadow small">
            <div class="card-header text-bg-dark ">últimos 10 usuarios registrados</div>
            <div class="card-body">
                <div class="row text-success border-bottom">
                    <div class="col-xl-5 col-12">email</div>
                    <div class="col-xl-3 col-12">apellido y nombre</div>
                    <div class="col-xl-2 col-6">fecha hora</div>
                    <div class="col-xl-2 col-6">Rol</div>
                </div>
                <?php while ($last = mysqli_fetch_array($usuariosA)) {
                    if ($last['rol'] != 'alumno') {
                        $color = " text-danger ";
                    } else {
                        $color = "";
                    } ?>
                    <div class="row border-bottom py-1">
                        <div class="col-xl-5 col-12">
                            <?= $last['email'] ?>
                        </div>
                        <div class="col-xl-3 col-12">
                            <?= $last['apellido'] . ' ' . $last['nombre'] ?>
                        </div>
                        <div class="col-xl-2 col-6">
                            <?= $last['fechaalta'] ?>
                        </div>
                        <div class="col-xl-2 col-6 <?= $color ?>">
                            <?= $last['rol'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="mb-3">
        <div class="card shadow small border-bottom">
            <div class="card-header text-bg-dark ">últimos 10 guias/trabajos subidos</div>
            <div class="card-body">
                <div class="row text-success">
                    <div class="col-xl-2 col-6">fecha</div>
                    <div class="col-xl-5 col-6">mesa/materia</div>
                    <div class="col-xl-1 col-2">año</div>
                    <div class="col-xl-2 col-4">tipo</div>
                    <div class="col-xl-2 col-8">cargado por</div>
                </div>
                <?php while ($tps = mysqli_fetch_array($trabajosA)) { ?>
                    <div class="row border-bottom py-1">
                        <div class="col-xl-2 col-6">
                            <?= $tps['fechadecarga'] ?>
                        </div>
                        <div class="col-xl-5 col-6">
                            <?= get_meses($tps['mes']) . '/' . $tps['materia'] ?>
                        </div>
                        <div class="col-xl-1 col-2">
                            <?= $tps['anio'] . '°' ?>
                        </div>
                        <div class="col-xl-2 col-4">
                            <?= $tps['tipo'] ?>
                        </div>
                        <div class="col-xl-2 col-8">
                            <?= $tps['cargadopornombre'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>