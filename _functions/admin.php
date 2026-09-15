<?php 
function get_ultimosUsuarios(){
    $conexion = conectar();
	$consulta = "SELECT email, nombre, apellido, rol, rango, fechaalta FROM usuarios ORDER BY fechaalta DESC LIMIT 10 ;";
	$resultado = mysqli_query($conexion, $consulta);
	return($resultado);
}

function get_ultimosUsuariosLog(){
	$conexion = conectar();
	$consulta = "SELECT fecha, nombre FROM log_ingresos ORDER BY fecha DESC LIMIT 10 ;";
	$resultado = mysqli_query($conexion, $consulta);
	return($resultado);
}
