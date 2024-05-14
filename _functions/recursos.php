<?php
function get_recursos($sector)
{
    $conexion = conectar();
    $sql = "SELECT T.nombre AS tipo, R.nombre, S.nombre AS sector, X.descripcion AS estado, R.descripcion, E.observaciones 
    FROM recursos R
    INNER JOIN recursos_ejemplares E ON R.id = E.idrecurso
    INNER JOIN recursos_tipos T ON R.tipo = T.id
    INNER JOIN recursos_sectores S ON R.sector = S.id
    INNER JOIN recursos_estado X ON E.estado = X.estado
    WHERE S.sector = '$sector';";
    $result = mysqli_query($conexion, $sql);
    return $result;
}


function get_tipos()
{
    $conexion = conectar();
    $sql = "SELECT * FROM recursos_tipos";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_estados()
{
    $conexion = conectar();
    $sql = "SELECT * FROM recursos_estado ORDER BY id ;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_sectores()
{
    $conexion = conectar();
    $sql = "SELECT * FROM recursos_sectores";
    $result = mysqli_query($conexion, $sql);
    return $result;
}