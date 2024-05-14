<?php
include("../_includes/db.php");
$conexion = conectar();

$anioNum = $_GET['anioNum'];
$sql = "SELECT id, nombre FROM data_cursos WHERE anio = $anioNum AND activo = 1";
$result = mysqli_query($conexion, $sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
}