<?php


function conectar()
{
    //OBTENGO LOS DATOS DEL INI DE CONFIGURACION
    $ini_array = parse_ini_file('../_conf/config.ini', true);
    $servername = ($ini_array['dataDB']['db_addr']);
    $database = ($ini_array['dataDB']['db_name']);
    $username = ($ini_array['dataDB']['db_user']);
    $password = ($ini_array['dataDB']['db_pass']);
    //CONEXION A BASE DE DATOS
    $conexion = new mysqli($servername, $username, $password) or mostrarerror(mysqli_error($conexion));
    mysqli_set_charset($conexion, "utf8");
    //SELECCIONO LA BASE DE DATOS
    mysqli_select_db($conexion, $database) or mostrarerror(mysqli_error($conexion));
    return ($conexion);
}

