<?php
include_once(ROOT_DIR . "_includes/db.php");
$conexion = conectar();

$stateId = $_GET['stateId'];
$sql = "SELECT id, nombre FROM data_materias WHERE anio = $stateId ORDER BY nombre";
$result = mysqli_query($conexion, $sql);
while ($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
}