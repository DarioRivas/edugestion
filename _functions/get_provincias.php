<?php
include("../_includes/db.php");
$id = $_GET['idUser'];
$conexion = conectar();
$sql = "SELECT descripcion AS id, descripcion AS nombre FROM data_provincias ORDER BY descripcion";
$result = mysqli_query($conexion, $sql);
$sqlUser = "SELECT provincia FROM usuarios WHERE id = $id";
$resultUser = mysqli_query($conexion, $sqlUser);
$provincia = mysqli_fetch_assoc($resultUser);
$select = "";
while ($row = $result->fetch_assoc()) {
    if($provincia['provincia'] ==  $row["nombre"]){
        $select = " selected ";
    }else{
        $select = "";
    }
    echo "<option value='" . $row["id"] . "' $select>" . $row["nombre"] . "</option>";
}