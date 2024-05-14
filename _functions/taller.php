<?php
function get_seccionesTaller()
{
    $conexion = conectar();
    $sql = "SELECT S.id, S.seccion, S.anio, S.turno, concat(U.apellido, ', ', U.nombre) AS docente
    FROM taller_secciones S
    INNER JOIN usuarios U ON S.docente = U.id";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_inasistencias()
{
    date_default_timezone_set('America/Argentina/Jujuy');
    $fecha = date('Y-m-d');
    $conexion = conectar();
    $sql = "SELECT I.id, S.seccion, S.anio, S.turno, I.docente, I.fechainicio, I.fechafin 
    FROM taller_inasistencias I 
    INNER JOIN taller_secciones S ON I.idsecciones = S.id 
    WHERE DATE(I.fechafin) >= CURDATE()";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_ProfesoresTaller($anio)
{
    $conexion = conectar();
    $sql = "SELECT S.id, S.seccion, S.anio, IF(S.turno = 'M', 'Mañana', 'Tarde') AS turno , concat(U.apellido, ', ', U.nombre) AS docente, U.imagen
    FROM taller_secciones S
    INNER JOIN usuarios U ON S.docente = U.id
    WHERE anio = '$anio'";
    $result = mysqli_query($conexion, $sql);
    return $result;
}