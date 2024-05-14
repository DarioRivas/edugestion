<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
$email = $_POST['email'];
$password = $_POST['password'];
$validado = validarUsuario($email, $password);
if (mysqli_num_rows($validado) == 0) //if ($ent === NULL)
{
    header("Location: ./?error=1");
    exit;
} else {
    $usuario = mysqli_fetch_assoc($validado);
    session_start();
    $_SESSION['user-id'] = $usuario['id'];
    $_SESSION['user-email'] = $usuario['email'];
    $_SESSION['user-nombre'] = $usuario['nombre'];
    $_SESSION['user-apellido'] = $usuario['apellido'];
    $_SESSION['user-rango'] = $usuario['rango'];
    $_SESSION['user-rol'] = $usuario['rol'];
    $_SESSION['user-imagen'] = $usuario['imagen'];
    //LOGIN DB
    $conexion = conectar();
    date_default_timezone_set('America/Argentina/Jujuy');
    $fecha = date('Y-m-d H:i:s');
    $userId = $_SESSION['user-id'];
    $nombre = $_SESSION['user-apellido'] . ', ' . $_SESSION['user-nombre'];
    $sql = "INSERT INTO log_ingresos (idusuarios, nombre, fecha) VALUES ($userId, '$nombre', '$fecha');";
    mysqli_query($conexion, $sql);
    //LOGIN DB
    switch ($_SESSION['user-rol']) {
        case ('admin'):
            header("Location: " . ROOT_DIR . "admin/");
            break;
        case ('bibliotecaria'):
            header("Location: " . ROOT_DIR . "biblioteca/");
            break;
        case ('docente'):
            header("Location: " . ROOT_DIR . "docentes/");
            break;
        case ('directivo'):
            header("Location: " . ROOT_DIR . "docentes/");
            break;
        case ('alumno'):
            header("Location: " . ROOT_DIR . "alumnos/");
            break;
        case ('jefepracticas'):
            header("Location: " . ROOT_DIR . "taller/jefatura.php");
            break;
    }
}