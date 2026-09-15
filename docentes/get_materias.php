<?php
include("../_includes/db.php");
$conexion = conectar();

$stateId = $_GET['stateId'];
$sql = "SELECT id, nombre, nomenclatura FROM data_materias WHERE anio = $stateId AND activo = 1";
$result = mysqli_query($conexion, $sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["nomenclatura"] . "'>" . $row["nombre"] . "</option>";
}