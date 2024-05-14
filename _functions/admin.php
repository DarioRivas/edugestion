<?php 
function get_ultimosUsuarios(){
    $conexion = conectar();
	$consulta = "SELECT email, nombre, apellido, rol, rango, fechaalta FROM usuarios ORDER BY fechaalta DESC LIMIT 10 ;";
	$resultado = mysqli_query($conexion, $consulta);
	return($resultado);
}