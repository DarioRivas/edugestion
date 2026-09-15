<?php
function get_listadocursos(int $curso)
{
	$conexion = conectar();
	$sql = "SELECT * FROM data_cursos WHERE id = $curso ;";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function get_DataCursos(int $idcurso)
{
	$conexion = conectar();
	$sql = "SELECT * FROM data_cursos WHERE id = $idcurso ;";
	$result = mysqli_query($conexion, $sql);
	return $result;
}

function get_Materias(int $anio, int $curso)
{
	$query = "SELECT D.id, D.nombre, P.iddata_cursos, CONCAT(U.nombre, ' ', U.apellido) AS docente, U.id AS idDocente, U.imagen FROM data_materias D
	LEFT JOIN profes_materias P ON D.id = P.iddata_materias
	LEFT JOIN usuarios U ON P.idusuarios = U.id
	WHERE D.anio = $anio AND ( P.iddata_cursos = $curso OR P.iddata_cursos IS NULL);";
	$conexion = conectar();
	$result = mysqli_query($conexion, $query);
	return $result;
}

function get_Cursos()
{
	$query = "SELECT * FROM data_cursos GROUP BY anio;";
	$conexion = conectar();
	$result = mysqli_query($conexion, $query);
	return $result;
}

function get_CursosPorAnio(int $anio)
{
	$query = "SELECT * FROM data_cursos WHERE anio = $anio AND activo = 1;";
	$conexion = conectar();
	$result = mysqli_query($conexion, $query);
	return $result;
}

function get_Alumnos(int $curso)
{
	$query = "SELECT U.apellido, U.nombre, U.imagen  FROM
	 usuarios_alumnos A
	 INNER JOIN usuarios U ON A.idusuarios = U.id
	 WHERE A.idcurso = $curso;";
	$conexion = conectar();
	$result = mysqli_query($conexion, $query);
	return $result;
}

function get_AlumnosDatos(int $curso)
{
	$query = "SELECT *  FROM
	 usuarios_alumnos A
	 INNER JOIN usuarios U ON A.idusuarios = U.id
	 WHERE A.idcurso = $curso;";
	$conexion = conectar();
	$result = mysqli_query($conexion, $query);
	return $result;
}

function get_Docente(int $id)
{
	$query = "SELECT * FROM
	 usuarios
	 WHERE id = $id;";
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $query);
	$result = mysqli_fetch_assoc($resultado);
	return $result;
}

function get_Curso(int $id)
{
	$query = "SELECT * FROM
	 data_cursos
	 WHERE id = $id;";
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $query);
	$result = mysqli_fetch_assoc($resultado);
	return $result;
}
function get_Materia(int $id)
{
	$query = "SELECT * FROM
	 data_materias
	 WHERE id = $id;";
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $query);
	$result = mysqli_fetch_assoc($resultado);
	return $result;
}

function get_MateriasAnio(int $anio)
{
	$query = "SELECT * FROM
	 data_materias
	 WHERE anio = $anio;";
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $query);
	return $resultado;
}

function get_GuiasPis(int $anio, int $division, string $turno)
{
	$query =
		"SELECT 
    	M.nombre, P.fechadecarga,
		  IF(P.cargadopornombre IS NOT NULL AND P.cargadopornombre != '', CONCAT('Profe. ', P.cargadopornombre), P.cargadopornombre) AS cargadopornombre,
		  P.archivo, P.cuatrimestre, P.turno, P.division, P.id, IFNULL(P.descargas, 0) AS descargas
		FROM data_materias M 
		LEFT JOIN periodosaberes P 
    	ON M.nomenclatura = P.materia 
   	 	AND P.division = $division 
    	AND P.turno = '$turno' 
    	AND P.anio = $anio
		WHERE 
    	M.anio = $anio
    	AND M.activo = 1;";
	$conexion = conectar();
	$resultado = mysqli_query($conexion, $query);
	return $resultado;
}
