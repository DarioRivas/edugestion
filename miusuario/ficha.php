<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$userId = $_SESSION['user-id'];
$userRol = $_SESSION['user-rol'];
$ok = 0;
if (isset($_POST['actualizar'])) {
    $apellidoP = $_POST['apellido'];
    $nombreP = $_POST['nombre'];
    $emailP = $_POST['email'];
    $cuilP = $_POST['cuil'];
    $fechanacP = date('Y-m-d', strtotime($_POST['fechanac']));
    $direccionP = $_POST['domicilio'];
    $provinciaP = $_POST['provincia'];
    $localidadP = $_POST['localidad'];
    $telefonoP = $_POST['telefono'];
    $conexion = conectar();
    $queryU = "UPDATE usuarios SET email = '$emailP', nombre = '$nombreP', apellido = '$apellidoP', cuil = '$cuilP', fecha_nac = '$fechanacP',  domicilio = '$direccionP', localidad = '$localidadP', provincia = '$provinciaP', telefono = '$telefonoP' WHERE id = $userId;";
    mysqli_query($conexion, $queryU);
    if ($userRol != 'alumno') {
        $legajop = $_POST['legajop'];
        $legajoj = $_POST['legajoj'];
        $queryP = "UPDATE usuarios_docentes SET legajopersonal = '$legajop', legajojunta = '$legajoj' WHERE idusuarios = $userId;";
        mysqli_query($conexion, $queryP);
    } else {
        $tutor_a = $_POST['tutor_a'];
        $direcciontutor_a = $_POST['direcciontutor_a'];
        $telefonotutor_a = $_POST['telefonotutor_a'];
        $emailtutor_a = $_POST['emailtutor_a'];
        $cuiltutor_a = $_POST['cuiltutor_a'];
        $tutor_b = $_POST['tutor_b'];
        $direcciontutor_b = $_POST['direcciontutor_b'];
        $telefonotutor_b = $_POST['telefonotutor_b'];
        $emailtutor_b = $_POST['emailtutor_b'];
        $cuiltutor_b = $_POST['cuiltutor_b'];
        $queryP = "UPDATE usuarios_alumnos SET tutor_a = '$tutor_a', direcciontutor_a = '$direcciontutor_a', telefonotutor_a = '$telefonotutor_a', emailtutor_a = '$emailtutor_a', cuiltutor_a = '$cuiltutor_a', tutor_b = '$tutor_b', direcciontutor_b = '$direcciontutor_b', telefonotutor_b = '$telefonotutor_b', emailtutor_b = '$emailtutor_b', cuiltutor_b = '$cuiltutor_b' WHERE idusuarios = $userId;";
        mysqli_query($conexion, $queryP);
    }
    $ok = 1;
}
$datosPersonalesA = get_DatosPersonales($userId, $userRol);
$datosPersonales = mysqli_fetch_assoc($datosPersonalesA);
$apellido = $datosPersonales['apellido'];
$nombre = $datosPersonales['nombre'];
$email = $datosPersonales['email'];
$cuil = $datosPersonales['cuil'];
$rol = $datosPersonales['rol'];
if ($userRol != 'alumno') {
    $legajop = $datosPersonales['legajopersonal'];
    $legajoj = $datosPersonales['legajojunta'];
} else {
    $tutor_a = $datosPersonales['tutor_a'];
    $direcciontutor_a = $datosPersonales['direcciontutor_a'];
    $telefonotutor_a = $datosPersonales['telefonotutor_a'];
    $emailtutor_a = $datosPersonales['emailtutor_a'];
    $cuiltutor_a = $datosPersonales['cuiltutor_a'];
    $tutor_b = $datosPersonales['tutor_b'];
    $direcciontutor_b = $datosPersonales['direcciontutor_b'];
    $telefonotutor_b = $datosPersonales['telefonotutor_b'];
    $emailtutor_b = $datosPersonales['emailtutor_b'];
    $cuiltutor_b = $datosPersonales['cuiltutor_b'];
}
$fechanac = date('Y-m-d', strtotime($datosPersonales['fecha_nac']));
$direccion = $datosPersonales['domicilio'];
$provincia = $datosPersonales['provincia'];
$localidad = $datosPersonales['localidad'];
$telefono = $datosPersonales['telefono'];
?>

<main label="ficha">
    <header>
        <i class='bx bx-user-circle'></i> Mi usuario
    </header>
    <section>
        <header>
            <div class="text-center my-3">
                <h4>Ficha de datos personales</h4>
            </div>
            <?php if ($ok == 1) { ?>
                <div>
                    <div class="alert alert-success">Los datos se han actualizado correctamente :D
                    </div>
                </div>
            <?php } ?>
        </header>
        <div class="card shadow p-3 mb-5">
            <form action="ficha.php" method="post">
                <div class="row">
                    <div class="col-xl-3 col-12 mt-3"><label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $apellido ?>">
                    </div>
                    <div class="col-xl-6 col-12 mt-3"><label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $nombre ?>">
                    </div>
                    <div class="col-xl-3 col-12 mt-3"><label for="email" class="form-label">Email de contacto
                            (usuario)</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="col-xl-3 col-6 mt-3"><label for="cuil" class="form-label">CUIL (solo números)</label>
                        <input type="text" class="form-control" id="cuil" name="cuil" value="<?= $cuil ?>"
                            oninput="validarInputN(this)">
                    </div>
                    <div class="col-xl-3 col-6 mt-3"><label for="fechanac" class="form-label">Fecha
                            nacimiento</label>
                        <input type="date" class="form-control" id="fechanac" name="fechanac" value="<?= $fechanac ?>">
                    </div>
                    <?php if ($rol != 'alumno') { ?>
                        <div class="col-xl-3 col-6 mt-3"><label for="legajop" class="form-label">Legajo
                                personal</label>
                            <input type="text" class="form-control" name="legajop" id="legajop" value="<?= $legajop ?>">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="legajoj" class="form-label">Legajo
                                junta</label>
                            <input type="text" class="form-control" name="legajoj" id="legajoj" value="<?= $legajoj ?>">
                        </div>
                    <?php } else { ?>
                        <div class="col-6"></div>
                    <?php } ?>
                    <hr class="mt-5">
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="provincias" class="form-label">Provincia</label>
                        <select class="form-select" name="provincia" id="provincias" required>

                        </select>
                    </div>
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="ciudades" class="form-label">Localidad</label>
                        <select class="form-select" name="localidad" id="ciudades" required>
                            <option value="Cinco Saltos">Cinco Saltos</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="domicilio"
                            value="<?= $direccion ?>">
                    </div>
                    <div class="col-xl-3 col-6 mt-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $telefono ?>"
                            oninput="validarInputN(this)">
                    </div>
                </div>
                <?php if ($rol == 'alumno') { ?>
                    <hr class="my-5">
                    <div class="text-center">
                        <h5>Datos de contacto de Tutores</h5>
                    </div>
                    <h5>Tutor A</h5>
                    <div class="row">
                        <div class="col-xl-6 col-6 mt-3"><label for="tutor_a" class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="tutor_a" id="tutor_a" value="<?= $tutor_a ?>">
                        </div>
                        <div class="col-xl-6 col-6 mt-3"><label for="direcciontutor_a" class="form-label">Dirección
                                (completa)</label>
                            <input type="text" class="form-control" name="direcciontutor_a" id="direcciontutor_a"
                                value="<?= $direcciontutor_a ?>">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="telefonotutor_a" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefonotutor_a" id="telefonotutor_a"
                                value="<?= $telefonotutor_a ?>" oninput="validarInputN(this)">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="emailtutor_a" class="form-label">Email</label>
                            <input type="text" class="form-control" name="emailtutor_a" id="emailtutor_a"
                                value="<?= $emailtutor_a ?>">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="cuiltutor_a" class="form-label">CUIL</label>
                            <input type="text" class="form-control" name="cuiltutor_a" id="cuiltutor_a"
                                value="<?= $cuiltutor_a ?>" oninput="validarInputN(this)">
                        </div>
                    </div>
                    <h5 class="mt-5">Tutor B</h5>
                    <div class="row">
                        <div class="col-xl-6 col-6 mt-3"><label for="tutor_b" class="form-label">Nombre y Apellido</label>
                            <input type="text" class="form-control" name="tutor_b" id="tutor_b" value="<?= $tutor_b ?>">
                        </div>
                        <div class="col-xl-6 col-6 mt-3"><label for="direcciontutor_b" class="form-label">Dirección
                                (completa)</label>
                            <input type="text" class="form-control" name="direcciontutor_b" id="direcciontutor_b"
                                value="<?= $direcciontutor_b ?>">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="telefonotutor_b" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefonotutor_b" id="telefonotutor_b"
                                value="<?= $telefonotutor_b ?>" oninput="validarInputN(this)">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="emailtutor_b" class="form-label">Email</label>
                            <input type="text" class="form-control" name="emailtutor_b" id="emailtutor_b"
                                value="<?= $emailtutor_b ?>">
                        </div>
                        <div class="col-xl-3 col-6 mt-3"><label for="cuiltutor_b" class="form-label">CUIL</label>
                            <input type="text" class="form-control" name="cuiltutor_b" id="cuiltutor_b"
                                value="<?= $cuiltutor_b ?>" oninput="validarInputN(this)">
                        </div>
                    </div>
                <?php } ?>
                <div class="row mt-5">
                    <div class="col text-center mb-3"><button type="submit" name="actualizar"
                            class="btn btn-success">Actualizar mis datos
                            personales</button></div>
                </div>

                <div class="col-6"></div>

            </form>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: '../_functions/get_provincias.php?idUser=<?= $userId ?>',
            method: 'GET',
            success: function (data) {
                $('#provincias').html(data);
            }
        });

        $('#provincias').change(function () {
            var stateId = $(this).val();
            if (stateId !== '') {
                $.ajax({
                    url: '../_functions/get_ciudades.php',
                    method: 'GET',
                    data: { stateId: stateId },
                    success: function (data) {
                        $('#ciudades').html(data);
                    }
                });
            } else {
                $('#ciudades').html('<option value="">Ciudades</option>');
            }
        });
    });
</script>
<script>
    function validarInput(input) {
        input.value = input.value.replace(/[^a-zA-Z0-9]/g, '');
    }
</script>
<script>
    function validarInputN(input) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
</script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>