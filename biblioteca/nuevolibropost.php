<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$edicion = $_POST['edicion'];
$nuevaeditorial = $_POST['nuevaeditorial'];
$seleditorial = $_POST['seleditorial'];
$selautor = $_POST['selautor'];
$nuevoautor = $_POST['nuevoautor'];
$estado = $_POST['estado'];
$fechaalta = date('Y-m-d', strtotime($_POST['fechaalta']));

if ($nuevoautor != '') {
    $sql = "INSERT INTO libros_autores (autor) VALUES ('$nuevoautor');";
    mysqli_query($conexion, $sql);
    $lastId = mysqli_insert_id($conexion);
    $autor = $lastId;
} else {
    $autor = $selautor;
}

if ($nuevaeditorial != '') {
    $sql = "INSERT INTO libros_editoriales (editorial) VALUES ('$nuevaeditorial');";
    mysqli_query($conexion, $sql);
    $lastId = mysqli_insert_id($conexion);
    $editorial = $lastId;
} else {
    $editorial = $seleditorial;
}

$lugar = $_POST['lugar'];
$anio = $_POST['anio'];
$ciclo = $_POST['ciclo'];

if (isset ($_POST['tags'])) {
    $tags = implode(",", $_POST['tags']);
} else {
    $tags = '';
}

$ejemplares = $_POST['ejemplares'];
$inventario = intval($_POST['inventario']);

$sql = "INSERT INTO libros (isbn, titulo, autor, edicion, editorial, lugar, anio, ciclo, tags) VALUES ('$isbn', '$titulo', '$autor', '$edicion', '$editorial', '$lugar', '$anio', '$ciclo', '$tags' );";
if (mysqli_query($conexion, $sql) == true) {
    $lastId = mysqli_insert_id($conexion);  
    for ($i = 1; $i <= $ejemplares; $i++) {
        $sqlEjemplar = "INSERT INTO libros_ejemplares (idlibro, inventario, estado, observaciones, fechaalta) VALUES ('$lastId', '$inventario', '$estado', 'Sin observaciones', '$fechaalta');";
        mysqli_query($conexion, $sqlEjemplar);
        $inventario++;
    }
    header("Location: nuevolibro.php?error=1");
} else {
    header("Location: nuevolibro.php?error=2");
}

