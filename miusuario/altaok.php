<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
date_default_timezone_set('America/Argentina/Jujuy');
$email = $_POST['email'];
$clave = hash('sha256', $_POST['pass1']);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rol = $_POST['rol'];
$fechaalta = date('Y-m-d H:i:s');
$conexion = conectar();
$consultaEmail = "SELECT id FROM usuarios WHERE email = '$email';";
$resultadoEmail = mysqli_query($conexion, $consultaEmail);
if (mysqli_num_rows($resultadoEmail) >= 1) {
    header("Location: nuevo.php?error=1");
    exit;
} else {
    if ($rol == 'alumno') {
        $imagen = "avatar2.png";
    } else {
        $imagen = "avatar4.png";
    }
    $consultaCrearU = "INSERT INTO usuarios (email, clave, nombre, apellido, rol, fechaalta, imagen) VALUES ('$email', '$clave', '$nombre','$apellido','$rol', '$fechaalta', '$imagen');";
    mysqli_query($conexion, $consultaCrearU);
    $lastId = mysqli_insert_id($conexion);
    if ($rol == 'alumno') {
        $rol = "INSERT INTO usuarios_alumnos (idusuarios) VALUES ('$lastId')";
    } else {
        $rol = "INSERT INTO usuarios_docentes (idusuarios) VALUES ('$lastId')";
    }
    mysqli_query($conexion, $rol);
    if (mysqli_affected_rows($conexion) == 0) {
        header("Location: nuevo.php?error=2");
        exit;
    }
}

require_once (ROOT_DIR . "_includes/header.php");
?>
<style>
    footer {
        padding-left: 0;
    }
</style>

<body>
    <main class="container">
        <header>
            <div class="text-center pt-5">
                <h4>Alta de usuario OK</h4>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="py-5">Hola
                            <?= $nombre ?>!
                        </h2>
                        <p>Tu usuario se ha creado con éxito</p>
                        <p>Has click en el siguiente botón para logearte en el sistema.</p>
                        <a href="./" class="btn btn-success mt-5">Quiero logearme</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>