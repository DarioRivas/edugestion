<?php function get_cursos()
{
	$conexion = conectar();
	$sql = "SELECT * FROM data_cursos WHERE activo = 1 ;";
	$result = mysqli_query($conexion, $sql);
	return $result;
}