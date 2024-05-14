<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/admin.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$usuariosA = get_ultimosUsuarios();
$trabajosA = get_ultimosTrabajos();
$ok = 0;
?>

<main label="paneladmin">
    <header>
        <i class='bx bx-bug'></i> Admin
    </header>
    <section class="container">
        <header>
            <div class="text-center">
                <h4>novedades</h4>
            </div>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente</div>
                </div>
            <?php } ?>
        </header>
    </section>
    <section class="mb-3">
        <div class="card shadow p-3 small">
            <div class="h6">últimos 10 usuarios registrados</div>
            <div class="row text-success border-bottom">
                <div class="col-xl-5 col-12">email</div>
                <div class="col-xl-3 col-12">apellido y nombre</div>
                <div class="col-xl-2 col-6">fecha hora</div>
                <div class="col-xl-2 col-6">Rol</div>                
            </div>
            <?php while ($last = mysqli_fetch_array($usuariosA)) { 
                if($last['rol'] != 'alumno'){
                    $color = " text-danger ";
                }else{
                    $color = "";
                }?>
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
                    <div class="col-xl-2 col-6 <?=  $color ?>">
                        <?= $last['rol'] ?>
                    </div>                   
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="mb-3">
        <div class="card shadow p-3 small  border-bottom">
            <div class="h6">últimos 10 trabajos cargados</div>
            <div class="row text-success">
                <div class="col-xl-2 col-6">fecha</div>
                <div class="col-xl-1 col-6">mesa</div>
                <div class="col-xl-4 col-10">materia</div>
                <div class="col-xl-1 col-2">año</div>
                <div class="col-xl-2 col-4">tipo</div>              
                <div class="col-xl-2 col-8">cargado por</div>
            </div>
            <?php while ($tps = mysqli_fetch_array($trabajosA)) { ?>
                <div class="row border-bottom py-1">
                    <div class="col-xl-2 col-6">
                        <?= $tps['fechadecarga'] ?>
                    </div>
                    <div class="col-xl-1 col-6">
                        <?= get_meses($tps['mes']) ?>
                    </div>
                    <div class="col-xl-4 col-10">
                        <?= $tps['materia'] ?>
                    </div>
                    <div class="col-xl-1 col-2">
                        <?= $tps['anio'] . '°'?>
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
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>