<?php
include("../_includes/db.php");
$conexion = conectar();

$stateId = $_GET['stateId'];
$sql = "SELECT descripcion AS nombre FROM data_ciudades WHERE provincianombre = '$stateId' ORDER BY descripcion";
$result = mysqli_query($conexion, $sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["nombre"] . "'>" . $row["nombre"] . "</option>";
}