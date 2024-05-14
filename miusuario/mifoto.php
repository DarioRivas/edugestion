<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/usuarios.php");
require_once (ROOT_DIR . "_includes/header.php");
$userId = $_SESSION['user-id'];
$userApellido = $_SESSION['user-apellido'];
$alert = '';
$color = '';
$conexion = conectar();
if (isset($_POST['btnEnviar'])) {
    if (isset($_FILES['imagenRedimensionada'])) {
        $file = $_FILES['imagenRedimensionada'];
        // Verificar si no hay errores en la subida del archivo
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Ruta donde se guardará la imagen
            $uploadDir = 'imagenes/'; // Ruta a la carpeta de destino
            //$nuevoNombre = basename($file['name']);
            $imageFileType = exif_imagetype($file['tmp_name']);
            // Verificar si el archivo es una imagen
            if ($imageFileType !== false) {
                // Array con los tipos de imagen permitidos
                $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
                // Verificar si el tipo de imagen está permitido
                if (in_array($imageFileType, $allowedTypes)) {                    
                    $nuevoNombre = $userApellido . '_' . $userId . date('i:s') . '_img.jpg';
                    $uploadPath = $uploadDir . $nuevoNombre;
                    // Mover el archivo a la carpeta de destino
                    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                        // Archivo subido con éxito
                        mysqli_query($conexion, "UPDATE usuarios SET imagen = '$nuevoNombre' WHERE id = $userId ;");
                        $alert = 'La imagen se ha guardado correctamente.';
                        $color = ' alert-success ';
                        $_SESSION['user-imagen'] = $nuevoNombre;
                    } else {
                        // Error al mover el archivo
                        $alert = 'Hubo un error al guardar la imagen.';
                        $color = ' alert-danger ';
                    }
                } else {
                    // Tipo de archivo no permitido
                    $alert = 'Tipo de archivo no permitido. Solo se permiten imágenes JPG, PNG y GIF.';
                    $color = ' alert-danger ';
                }
            } else {
                // No es una imagen válida
                $alert = 'El archivo subido no es una imagen válida.';
                $color = ' alert-danger ';
            }
        } else {
            // Manejar otros posibles errores de subida de archivos
            $alert = 'Error al subir la imagen. No se ha enviado ninguna imagen.';
            $color = ' alert-danger ';
        }
    } else {
        // Si no se ha enviado ningún archivo o el nombre del campo es incorrecto
        $alert = 'No se ha enviado ninguna imagen.';
        $color = ' alert-danger ';
    }
}
require_once (ROOT_DIR . "_includes/sidebar.php");
?>

<main label="miimagen">
    <header>
        <i class='bx bx-user-circle'></i> Mi usuario
    </header>
    <section>
        <header>
            <div class="text-center my-3">
                <h4>Actualizar mi imagen de perfil</h4>
            </div>
            <?php if ($alert != '') { ?>
                <div>
                    <div class="alert <?= $color ?>"><?= $alert ?>
                    </div>
                </div>
            <?php } ?>
        </header>
        <div class="card shadow p-3 mb-5 text-center">
            <form action="mifoto.php" method="post" enctype="multipart/form-data">
                <div id="imagen1">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="imageInput" id="imageInput" style="z-index:10">
                    </div>
                    <input type="file" id="imagenRedimensionada" name="imagenRedimensionada" style="display: none;">
                    <canvas id="canvas" style="display: none;"></canvas>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 p-3 text-center">
                            <img class="mx-auto d-block" id="preview" src="" style="display: block; height:150px;" >
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success w-25" type="submit" id="btnEnviar" name="btnEnviar">Enviar</button>
                </div>
            </form>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<script>
    $(document).ready(function () {
        $('#imageInput').on('change', function (e) {
            const fileInput = document.getElementById('imageInput');
            const file = fileInput.files[0];
            const fileRedimensionada = document.getElementById('imagenRedimensionada');
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const img = new Image();
                    img.onload = function () {
                        const canvas = document.getElementById('canvas');
                        const ctx = canvas.getContext('2d');

                        const width = 150;
                        const height = 150;

                        canvas.width = width;
                        canvas.height = height;

                        let newWidth = width;
                        let newHeight = height;

                        if (img.width > img.height) {
                            newWidth = img.width * (height / img.height);
                        } else {
                            newHeight = img.height * (width / img.width);
                        }

                        const offsetX = (width - newWidth) / 2;
                        const offsetY = (height - newHeight) / 2;

                        ctx.drawImage(img, 0, 0, img.width, img.height, offsetX, offsetY, newWidth, newHeight);

                        // Obtener la imagen redimensionada como un archivo Blob
                        canvas.toBlob(function (blob) {
                            const newFile = new File([blob], file.name, { type: 'image/jpeg' });

                            // Mostrar la imagen redimensionada como previsualización
                            const previewImg = document.getElementById('preview');
                            previewImg.style.display = 'block';
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(newFile);
                            previewImg.src = URL.createObjectURL(newFile);

                            // Asignar la imagen redimensionada al campo oculto en el formulario
                            fileRedimensionada.files = dataTransfer.files;
                        }, 'image/jpeg');
                    };
                    img.src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>