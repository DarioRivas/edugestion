<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
$conexion = conectar();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_trabajo = mysqli_real_escape_string($conexion, $_GET['id']);

    // 1. Buscamos el nombre del archivo en la base
    $query = "SELECT archivo FROM periodosaberes WHERE id = '$id_trabajo'";
    $resultado = mysqli_query($conexion, $query);

    if ($row = mysqli_fetch_assoc($resultado)) {
        $archivo = $row['archivo'];
        $ruta_archivo = "../docentes/periodosaberes/" . $archivo;

        // Verificamos que el archivo físico realmente exista
        if (file_exists($ruta_archivo)) {
            // 2. Sumamos 1 al contador de descargas
            $update = "UPDATE periodosaberes SET descargas = descargas + 1 WHERE id = '$id_trabajo'";
            mysqli_query($conexion, $update);

            // 3. Redirigimos al usuario al archivo para que lo vea/descargue
            header("Location: " . $ruta_archivo);
            exit;
        } else {
            echo "El archivo físico no se encuentra en el servidor.";
        }
    } else {
        echo "El registro no existe en la base de datos.";
    }
} else {
    echo "ID no válido.";
}
