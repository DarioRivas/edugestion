<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$alertOn = 0;
$conexion = conectar();
if (isset($_POST['cargar'])) {
    //DATOS FORM
    $file = $_FILES['archivo']['name'];
    $seccion = $_POST['seccion'];
    $observaciones = $_POST['observaciones'];
    $fechaFile = date('MY');
    $cargadoporId = $_SESSION['user-id'];
    $cargadopor = $_SESSION['user-apellido'];
    //FIN DATOS FORM
    $a = pathinfo($file);
    $basename = $a['basename']; //nombre + extension
    $filename = $a['filename']; //nombre
    $extension = $a['extension']; //extension
    $path = "material/"; //ruta donde se almacena el archivo              
    date_default_timezone_set('America/Argentina/Jujuy');
    $date = new DateTime();
    $timestamp = $date->format('Y-m-d H:i:s');
    $filename = 'MATERIAL-' . $seccion . '-' . $fechaFile . '-' . $cargadopor;
    $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
    //Getting the file ext
    $fileExt = explode('.', $basename);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = array("pdf");
    if (in_array($fileActualExt, $allowedExt)) {
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '.' . $extension)) {
            $link = $filename . '.' . $extension;
            mysqli_query($conexion, "INSERT INTO taller_material (observaciones, archivo, seccion, docente) VALUES ('$observaciones', '$link', '$seccion', '$cargadoporNombre');");
            $alertOn = 1;
            $resultado = "El archivo <b>" . $link . "</b> se ha sido subido correctamente.";
            $alert = "alert-success";
        } else {
            $alertOn = 1;
            $resultado = "Error al subir el archivo, por favor intente nuevamente.";
            $alert = "alert-danger";
        }
    } else {
        $alertOn = 1;
        $resultado = 'ERROR: El archivo debe ser formato PDF';
        $alert = "alert-danger";
    }
}

$sql = "SELECT * from taller_material";
$array = mysqli_query($conexion, $sql);
$cant = mysqli_num_rows($array);


$tabActive = ' active';
$contentActive = ' show active';

?>
<main label="subirmaterial">
    <header>
        <i class='bx bx-wrench'></i> Taller
    </header>
    <section>
        <header>
            <div class="text-center mb-3">
                <h3>
                    Subir material de consulta
                </h3>
            </div>
        </header>
    </section>
    <?php if ($alertOn == 1) { ?>
        <div class="container">
            <div class="alert <?= $alert ?>">
                <?= $resultado ?>
            </div>
        </div>
    <?php } ?>
    <section class="container">
        <div class="card shadow p-3 mb-5">
            <form action="subirmaterial.php" method="post" enctype="multipart/form-data">
                <div class="row align-items-end">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                        <label for="seccion" class="form-label mt-3 small">Sección:</label>
                        <select class="form-select  input-control" name="seccion" id="seccion" required>
                            <option value="taller" selected>Todas</option>
                            <?php $secciones = "SELECT id, seccion, anio FROM taller_secciones GROUP BY seccion;";
                            $result = mysqli_query($conexion, $secciones);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["seccion"] . "'>" . $row["seccion"] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="observaciones" class="form-label mt-3 small">Observaciones:</label>
                        <input type="text" class="form-control" maxlength="200" name="observaciones" required>
                    </div>
                </div>
                <div class="row align-items-end mt-3">
                    <div class="col-xxl-9 col-xl-9 col-lg-6 col-12">
                        <label for="formFile" class="form-label mt-3 small">Archivo para subir (en formato PDF):</label>
                        <input class="form-control" type="file" id="archivo" name="archivo" required>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
                        <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center"
                            name="cargar">Subir
                            archivo<i class='bx bxs-cloud-upload bx-sm ms-2'></i></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="container">
        <div class="alert alert-success">
            <h6>Ultimos 10 archivos subidos:</h6> 
            <?php $secciones = "SELECT * FROM taller_material LAST 10";
            $result = mysqli_query($conexion, $secciones);
            while ($row = $result->fetch_assoc()) {
                echo "<p>" . $row["seccion"] . " (por: " . $row["docente"] . ") archivo: " . $row["archivo"] . "</p>";
            } ?>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>