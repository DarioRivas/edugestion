<?php

function get_usuarios()
{
	$conexion = conectar();
	$sql = "SELECT * FROM usuarios ORDER BY apellido ASC";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function get_UsuarioFiltrados($where)
{
	$conexion = conectar();
	$sql = "SELECT * FROM usuarios $where ;";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function get_docentes()
{
	$conexion = conectar();
	$sql = "SELECT * FROM usuarios WHERE rol <> 'alumno' ORDER BY apellido ASC";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function get_rangos()
{
	$conexion = conectar();
	$sql = "SELECT * FROM usuarios_rangos";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function validarUsuario($email, $password)
{
	$pass = hash('sha256', $password);
	$conexion = conectar();
	$consulta = "SELECT * FROM usuarios WHERE email = '$email' AND clave = '$pass';";
	$resultado = mysqli_query($conexion, $consulta);
	return($resultado);
}

function get_DatosPersonales($id, $rango)
{
	$consulta = '';
	switch ($rango) {
		case('alumno'):
			$consulta = "SELECT * FROM usuarios U LEFT JOIN usuarios_alumnos D ON U.id = D.idusuarios WHERE U.id = $id ";
			break;
		case('admin'):
			$consulta = "SELECT * FROM usuarios U LEFT JOIN usuarios_docentes D ON U.id = D.idusuarios WHERE U.id = $id ";
			break;
		case('docente'):
			$consulta = "SELECT * FROM usuarios U LEFT JOIN usuarios_docentes D ON U.id = D.idusuarios WHERE U.id = $id ";
			break;
		default:
		$consulta = "SELECT * FROM usuarios U LEFT JOIN usuarios_docentes D ON U.id = D.idusuarios WHERE U.id = $id ";
	}
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $consulta);
	return($resultado);
}
