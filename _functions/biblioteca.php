<?php
function get_editoriales(){
    $conexion = conectar();
    $sql = "SELECT * FROM libros_editoriales ORDER BY editorial;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_autores(){
    $conexion = conectar();
    $sql = "SELECT * FROM libros_autores ORDER BY autor;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_tags(){
    $conexion = conectar();
    $sql = "SELECT * FROM libros_tags ORDER BY tag;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_libros($id){
    $conexion = conectar();
    $sql = "SELECT titulo FROM libros WHERE id = '$id';";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_ciclos($ciclo)
{
    switch ($ciclo) {
        case('0'):
            $mes = 'Todos';
            break;
        case('1'):
            $mes = '1ro';
            break;
        case('2'):
            $mes = '2do';
            break;
        case('3'):
            $mes = '3ro';
            break;
        case('4'):
            $mes = '4to';
            break;
        case('5'):
            $mes = '5to';
            break;
        case('6'):
            $mes = '6to';
            break;
        case('7'):
            $mes = 'CB';
            break;
        case('8'):
            $mes = 'CS';
            break;
        default:
            $mes = 'Todos';
    }
    return $mes;
}

function get_estados(){
    $conexion = conectar();
    $sql = "SELECT * FROM recursos_estado ORDER BY id ;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_fichaLibro($id){
    $conexion = conectar();
    $sql = "SELECT L.id, L.isbn, L.titulo, L.autor AS idAutor, A.autor, L.editorial AS idEditorial, E.editorial, L.edicion, L.lugar, L.anio, L.ciclo, L.tags, L.portada
    FROM libros L
    INNER JOIN libros_autores A ON L.autor = A.id
    INNER JOIN libros_editoriales E ON L.editorial = E.id
    WHERE L.id = $id;";
    $resultA = mysqli_query($conexion, $sql);
    $result = mysqli_fetch_assoc($resultA);
    return $result;
}

function get_ejemplares($id){
    $conexion = conectar();
    $sql = "SELECT E.id, E.idlibro, E.inventario, E.estado AS estadoid, S.descripcion AS estado, E.observaciones, E.fechaalta, E.fechabaja
     FROM libros_ejemplares E
    INNER JOIN recursos_estado S ON E.estado = S.id
    WHERE E.idlibro = $id
    ORDER BY E.inventario;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}

function get_ultimosdiezlibros(){
    $conexion = conectar();
    $sql = "SELECT L.id, L.titulo, A.autor, E.editorial, L.portada, L.tags
    FROM libros L
    INNER JOIN libros_autores A ON L.autor = A.id
    INNER JOIN libros_editoriales E ON L.editorial = E.id
    ORDER BY id DESC LIMIT 10;";
    $result = mysqli_query($conexion, $sql);
    return $result;
}