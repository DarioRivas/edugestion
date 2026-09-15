<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$alertOn = 0;
if (isset($_POST['cargar'])) {
  //DATOS FORM
  $file = $_FILES['archivo']['name'];
  $anio = intval($_POST['anio']);
  $nombre = $_POST['nombre'];
  $materia = $_POST['materia'];
  $fechaFile = date('Y');
  $cargadoporId = $_SESSION['user-id'];
  $cargadopor = $_SESSION['user-apellido'];
  //FIN DATOS FORM
  $a = pathinfo($file);
  $basename = $a['basename']; //nombre + extension
  $filename = $a['filename']; //nombre
  $extension = $a['extension']; //extension
  $path = "proyectos/"; //ruta donde se almacena el archivo              
  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $aniolectivo = date('Y');
  $filename = 'PROYECTO-' . $materia . '-' . $fechaFile . '-' . $cargadopor;
  $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
  //Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");
  $random = date('his');
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '_' . $random . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '_' . $random . '.' . $extension;
      mysqli_query($conexion, "INSERT INTO proyectos (anio, materia, nombre, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia', '$nombre', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
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

if (isset($_POST['cargarP'])) {
  //DATOS FORM
  $anio = intval($_POST['anioP']);
  $materia = $_POST['materiaP'];
  $file = $_FILES['archivoP']['name'];
  $nombre = $_POST['nombreP'];
  $fechaFile = date('Y');
  $cargadoporId = $_SESSION['user-id'];
  $cargadopor = $_SESSION['user-apellido'];
  //FIN DATOS FORM
  $a = pathinfo($file);
  $basename = $a['basename']; //nombre + extension
  $filename = $a['filename']; //nombre
  $extension = $a['extension']; //extension
  $path = "proyectoseval/"; //ruta donde se almacena el archivo              
  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $aniolectivo = date('Y');
  $filename = 'PROYECTO-EVAL-' . $materia . '-' . $fechaFile . '-' . $cargadopor;
  $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
  //Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");
  $random = date('his');
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivoP']['tmp_name'], $path . $filename . '_' . $random . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '_' . $random . '.' . $extension;
      mysqli_query($conexion, "INSERT INTO proyectoseval (anio, materia, nombre, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia', '$nombre', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
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


$tabActive = ' active';
$contentActive = ' show active';

?>
<main label="subirproyectos">
  <header>
    <i class='bx bx-edit'></i> Proyectos
  </header>
  <?php if ($alertOn == 1) { ?>
    <div class="container">
      <div class="alert <?= $alert ?>">
        <?= $resultado ?>
      </div>
    </div>
  <?php } ?>
  <section class="container">
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">SUBIR PROYECTOS</div>
      <div class="card-body ">
        <form action="subirproyectos.php" method="post" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="anios" class="form-label mt-3 small">Año de cursado:</label>
              <select class="form-select" name="anio" id="anios" required>
                <option selected disabled>Año</option>
                <option value="1">1er año</option>
                <option value="2">2do año</option>
                <option value="3">3er año</option>
                <option value="4">4to año</option>
                <option value="5">5to año</option>
                <option value="6">6to año</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="materias" class="form-label mt-3 small">Materia:</label>
              <select class="form-select  input-control" name="materia" id="materias" required>
                <option selected disabled>Materia</option>
              </select>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
              <label for="materias" class="form-label mt-3 small">Nombre del proyecto:</label>
              <input class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
          </div>
          <div class="alert alert-warning mt-3">
            <b>Nota:</b> Si el proyecto contempla varios años elegir el menor. Y de nuclear varias materias elegir solo una.
          </div>
          <div class="row align-items-end mt-2">
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-12">
              <label for="formFile" class="form-label mt-3 small">Archivo para subir (en formato PDF):</label>
              <input class="form-control" type="file" id="archivo" name="archivo" required>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center" name="cargar">Subir
                archivo<i class='bx bxs-cloud-upload bx-sm ms-2'></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">SUBIR EVALUACIÓN DE PROYECTOS</div>
      <div class="card-body">
        <form action="subirproyectos.php" method="post" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="anios" class="form-label mt-3 small">Año de cursado:</label>
              <select class="form-select" name="anioP" id="aniosP" required>
                <option selected disabled>Año</option>
                <option value="1">1er año</option>
                <option value="2">2do año</option>
                <option value="3">3er año</option>
                <option value="4">4to año</option>
                <option value="5">5to año</option>
                <option value="6">6to año</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="materias" class="form-label mt-3 small">Materia:</label>
              <select class="form-select  input-control" name="materiaP" id="materiasP" required>
                <option selected disabled>Materia</option>
              </select>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
              <label for="materias" class="form-label mt-3 small">Nombre del proyecto:</label>
              <input class="form-control" type="text" name="nombreP" id="nombreP" required>
            </div>
          </div>
          <div class="row align-items-end mt-2">
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-12">
              <label for="formFile" class="form-label mt-3 small">Archivo para subir (en formato PDF):</label>
              <input class="form-control" type="file" id="archivoP" name="archivoP" required>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center" name="cargarP">Subir
                archivo<i class='bx bxs-cloud-upload bx-sm ms-2'></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<script>
  $(document).ready(function() {
    $('#anios').change(function() {
      var stateId = $(this).val();
      if (stateId !== '') {
        $.ajax({
          url: 'get_materias.php',
          method: 'GET',
          data: {
            stateId: stateId
          },
          success: function(data) {
            $('#materias').html(data);
          }
        });
      } else {
        $('#materias').html('<option value="">Materias</option>');
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#aniosP').change(function() {
      var stateId = $(this).val();
      if (stateId !== '') {
        $.ajax({
          url: 'get_materias.php',
          method: 'GET',
          data: {
            stateId: stateId
          },
          success: function(data) {
            $('#materiasP').html(data);
          }
        });
      } else {
        $('#materiasP').html('<option value="">Materias</option>');
      }
    });
  });
</script>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>