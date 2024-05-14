<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
$anio = $_GET['anio'];
$filename = $_GET['filename'];
$userId = $_SESSION['user-id'];
$nombre = $_SESSION['user-apellido'] . ', ' . $_SESSION['user-nombre'];
date_default_timezone_set('America/Argentina/Jujuy');
$fecha = date('Y-m-d H:i:s');
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
$sql = "INSERT INTO log_descargas (idusuarios, nombre, archivo, fecha) VALUES ($userId, '$nombre', '$filename', '$fecha');";
mysqli_query($conexion, $sql);
$conexion->close();
header("Location: trabajos.php?anio=$anio");
    exit;