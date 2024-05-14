<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
$libroId = $_GET['id'];
$libro = get_fichaLibro($_GET['id']);

if (isset($_POST['btnGuardar'])) {
    $tags = $_POST['tags'];
    $ciclo = $_POST['ciclo'];
    $anio = $_POST['anio'];
    $lugar = $_POST['lugar'];
    $autor = $_POST['autor'];
    $edicion = $_POST['edicion'];
    $editorial = $_POST['editorial'];
    $titulo = $_POST['titulo'];
    $isbn = $_POST['isbn'];
    mysqli_query($conexion, "UPDATE libros SET isbn='$isbn', titulo='$titulo', autor='$autor', edicion='$edicion', editorial='$editorial', lugar='$lugar', anio='$anio', ciclo='$ciclo', tags='$tags'
    WHERE id = $libroId ;");
    $alert = 'Los datos del libro se han guardado correctamente.';
    $color = ' alert-success ';
    header("Location: libroeditar.php?id=$libroId&text=Error no");
}

if (isset($_POST['btnGuardarEj'])) {
    $ejemplar = $_POST['ejemplar'];
    $inventario = $_POST['inventario'];
    $estado = $_POST['estado'];
    $fechaalta = date('Y-m-d', strtotime($_POST['fechaalta']));
    $fechaAQUI = '';
    if ($_POST['fechabaja'] != '') {
        $fechabaja = date('Y-m-d', strtotime($_POST['fechabaja']));
        $fechaAQUI = ",fechabaja = '" . $fechabaja . "' ";
    }
    $descripcion = $_POST['descripcion'];
    mysqli_query($conexion, "UPDATE libros_ejemplares SET inventario='$inventario', estado='$estado', observaciones='$descripcion', fechaalta='$fechaalta' $fechaAQUI
      WHERE id = '$ejemplar' ;");
    if (mysqli_affected_rows($conexion) != 0) {
        header("Location: libroeditar.php?id=$libroId&text=Error no");
        exit;
    } else {
        $err = mysqli_error($conexion);
        header("Location: libroeditar.php?id=$libroId&text=$err");
        exit;
    }
}

if (isset($_POST['btnAgregarEj'])) {
    $fechaalta = date('Y-m-d', strtotime($_POST['fechaalta']));
    $ejemplares = $_POST['ejemplares'];
    $inventario = intval($_POST['inventario']);
    for ($i = 1; $i <= $ejemplares; $i++) {
        $sqlEjemplar = "INSERT INTO libros_ejemplares (idlibro, inventario, estado, observaciones, fechaalta) VALUES ('$libroId', '$inventario', 1, 'Sin observaciones', '$fechaalta');";
        mysqli_query($conexion, $sqlEjemplar);
        $inventario++;
    }
    header("Location: libroeditar.php?id=$libroId&text=Error no");
}

if (isset($_FILES['imagenRedimensionada'])) {
    $file = $_FILES['imagenRedimensionada'];
    // Verificar si no hay errores en la subida del archivo
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Ruta donde se guardará la imagen
        $uploadDir = 'portadas/'; // Ruta a la carpeta de destino
        //$nuevoNombre = basename($file['name']);
        $imageFileType = exif_imagetype($file['tmp_name']);
        // Verificar si el archivo es una imagen
        if ($imageFileType !== false) {
            // Array con los tipos de imagen permitidos
            $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
            // Verificar si el tipo de imagen está permitido
            if (in_array($imageFileType, $allowedTypes)) {
                $nuevoNombre = $libroId . '_isbn-' . $libro['isbn'] . '_img.jpg';
                $uploadPath = $uploadDir . $nuevoNombre;
                // Mover el archivo a la carpeta de destino
                if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                    // Archivo subido con éxito
                    mysqli_query($conexion, "UPDATE libros SET portada = '$nuevoNombre' WHERE id = $libroId ;");
                    $alert = 'La imagen se ha guardado correctamente.';
                    $color = ' alert-success ';
                    header("Location: libroeditar.php?id=$libroId&text=Error no");
                } else {
                    // Error al mover el archivo
                    $alert = 'Hubo un error al guardar la imagen.';
                    $color = ' alert-danger ';
                    header("Location: libroeditar.php?id=$libroId&text=Hubo un error al guardar la imagen");
                }
            } else {
                // Tipo de archivo no permitido
                $alert = 'Tipo de archivo no permitido. Solo se permiten imágenes JPG, PNG y GIF.';
                $color = ' alert-danger ';
                header("Location: libroeditar.php?id=$libroId&text=Tipo de archivo no permitido. Solo se permiten imágenes JPG, PNG y GIF.");
            }
        } else {
            // No es una imagen válida
            $alert = 'El archivo subido no es una imagen válida.';
            $color = ' alert-danger ';
            header("Location: libroeditar.php?id=$libroId&text=El archivo subido no es una imagen válida");
        }
    } else {
        // Manejar otros posibles errores de subida de archivos
        $alert = 'Error al subir la imagen. No se ha enviado ninguna imagen.';
        $color = ' alert-danger ';
        header("Location: libroeditar.php?id=$libroId&text=Error al subir la imagen. No se ha enviado ninguna imagen");
    }
}

