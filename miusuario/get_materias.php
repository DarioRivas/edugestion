<?php
include("../_includes/db.php");
$conexion = conectar();

$stateId = $_GET['stateId'];
$sql = "SELECT id, nombre, nomenclatura FROM data_materias WHERE anio = $stateId";
$result = mysqli_query($conexion, $sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
}