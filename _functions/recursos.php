<?php
function get_recursos(string $sector)
{
    $conexion = conectar();
    $sql = "SELECT E.id, T.nombre AS tipo, R.nombre, S.nombre AS sector, X.descripcion AS estado, R.descripcion, E.observaciones 
    FROM recursos R
    INNER JOIN recursos_ejemplares E ON R.id = E.idrecurso
    INNER JOIN recursos_tipos T ON R.tipo = T.id
    INNER JOIN recursos_sectores S ON R.sector = S.id
    INNER JOIN recursos_estado X ON E.estado = X.estado
    WHERE S.sector = '$sector' AND E.idrecurso != -1
    ORDER BY T.nombre, R.nombre;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_recursos_biblio()
{
    $conexion = conectar();
    $sql = "SELECT R.id, T.nombre AS tipo, R.nombre, R.sector, R.descripcion
            FROM recursos R
            INNER JOIN recursos_tipos T ON R.tipo = T.id
            WHERE R.id != -1 ORDER BY T.nombre, R.nombre;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_reservas()
{
    $conexion = conectar();
    $sql = "SELECT R.reservaid, GROUP_CONCAT(' ', R.cantidad, 'x ' , RE.descripcion) AS recurso, C.nombre AS curso, R.observaciones, RE.tipo, R.usuarioid, U.apellido, U.nombre, R.desde, R.hasta, R.cargadoel
            FROM reservas R
            INNER JOIN recursos RE ON R.recursoid = RE.id
            INNER JOIN usuarios U ON R.usuarioid = U.id
            LEFT JOIN data_cursos C ON R.curso = C.id
            WHERE R.hasta >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)
            GROUP BY R.reservaid
            ORDER BY R.desde ASC;
        /*where R.hasta >= CURDATE()*/";
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
