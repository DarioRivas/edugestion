<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$alertOn = 0;
$aniolectivo = date('Y');
if (isset($_POST['cargar'])) {
  //DATOS FORM
  $file = $_FILES['archivo']['name'];
  $anio = intval($_POST['anio']);
  $materia = $_POST['materia'];
  $conexion = conectar();
  $hayPrograma = mysqli_query($conexion, "SELECT * FROM programas WHERE anio = $anio AND materia = '$materia' AND aniolectivo = $aniolectivo;");
  $hayProgramaN = mysqli_num_rows($hayPrograma);
  if ($hayProgramaN > 0) {
    $alertOn = 1;
    $resultado = "Ya existe un programa para <span class='fw-bold'>" . $anio . "° año</span> de esa materia. <br>Solo se puede cargar un programa por año y materia. <br>Para ver la publicación haga click <a class='fw-bold' href='../alumnos/programas.php?anio=$anio'>AQUÍ</a>";
    $alert = "alert-danger";
  } else {
    $fechaFile = date('Y');
    $cargadoporId = $_SESSION['user-id'];
    $cargadopor = $_SESSION['user-apellido'];
    //FIN DATOS FORM
    $a = pathinfo($file);
    $basename = $a['basename']; //nombre + extension
    $filename = $a['filename']; //nombre
    $extension = $a['extension']; //extension
    $path = "programas/"; //ruta donde se almacena el archivo              
    date_default_timezone_set('America/Argentina/Jujuy');
    $date = new DateTime();
    $timestamp = $date->format('Y-m-d H:i:s');
    $filename = 'PROGRAMA-' . $materia . '-' . $fechaFile . '-' . $cargadopor;
    $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
    //Getting the file ext
    $fileExt = explode('.', $basename);
    $fileActualExt = strtolower(end($fileExt));
    $allowedExt = array("pdf");
    if (in_array($fileActualExt, $allowedExt)) {
      if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '.' . $extension)) {

        $link = $filename . '.' . $extension;
        mysqli_query($conexion, "INSERT INTO programas (anio, materia, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
        $alertOn = 1;
        $resultado = "El archivo <b>" . $link . "</b> se ha sido subido correctamente. Para ver la publicación haga click <a class='fw-bold' href='../alumnos/programas.php?anio=$anio'>AQUÍ</a>";
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
}

if (isset($_POST['cargarReg'])) {
  //DATOS FORM
  $file = $_FILES['archivoReg']['name'];
  $anio = intval($_POST['anioReg']);
  $materia = $_POST['materiaReg'];
  $fechaFile = date('Y');
  $cargadoporId = $_SESSION['user-id'];
  $cargadopor = $_SESSION['user-apellido'];
  $turno = $_POST['turno'];
  $division = $_POST['division'];
  //FIN DATOS FORM
  $a = pathinfo($file);
  $basename = $a['basename']; //nombre + extension
  $filename = $a['filename']; //nombre
  $extension = $a['extension']; //extension
  $path = "programasregulares/"; //ruta donde se almacena el archivo              
  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $random = date('his');
  $filename = 'PROGRAMA-REG-' . $materia . '-' . $division . $turno . '-' . $fechaFile . '-' . $cargadopor . '-' . $random;
  $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
  //Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivoReg']['tmp_name'], $path . $filename . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '.' . $extension;
      mysqli_query($conexion, "INSERT INTO programasregulares (anio, materia, turno, division, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia','$turno','$division', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
      $alertOn = 1;
      $resultado = "El archivo <b>" . $link . "</b> se ha sido subido correctamente. Para ver la publicación haga click <a class='fw-bold' href='../alumnos/programasregulares.php?anio=$anio'>AQUÍ</a>";
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
<main label="subirprogramas">
  <header>
    <i class='bx bx-edit'></i> Programas
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
      <div class="card-header text-bg-dark">
        SUBIR PROGRAMA ANUAL DE LA MATERIA
      </div>
      <div class="card-body">
        <form action="subirprogramas.php" method="post" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="anios" class="form-label small">Año de cursado:</label>
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
          </div>
          <div class="row align-items-end mt-3">
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
  <!-- PROGRAMAS REGULARES -->
  <section class="container">
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">
        SUBIR PROGRAMA PARA ALUMNOS REGULARES
      </div>
      <div class="card-body">
        <form action="subirprogramas.php" method="post" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="aniosReg" class="form-label small">Año de cursado:</label>
              <select class="form-select" name="anioReg" id="aniosReg" required>
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
              <label for="materiasReg" class="form-label mt-3 small">Materia:</label>
              <select class="form-select  input-control" name="materiaReg" id="materiasReg" required>
                <option selected disabled>Materia</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="turno" class="form-label mt-3 small">Turno:</label>
              <select class="form-select  input-control" name="turno" id="turno" required>
                <option selected disabled>Turno</option>
                <option value="M">Mañana</option>
                <option value="T">Tarde</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="division" class="form-label mt-3 small">División:</label>
              <select class="form-select  input-control" name="division" id="division" required>
                <option selected disabled>División</option>
                <option value="1">1ra</option>
                <option value="2">2da</option>
                <option value="3">3ra</option>
              </select>
            </div>
          </div>
          <div class="row align-items-end mt-3">
            <div class="col-xxl-9 col-xl-9 col-lg-6 col-12">
              <label for="formFile" class="form-label mt-3 small">Archivo para subir (en formato PDF):</label>
              <input class="form-control" type="file" id="archivoReg" name="archivoReg" required>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center" name="cargarReg">Subir
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
    $('#aniosReg').change(function() {
      var stateId = $(this).val();
      if (stateId !== '') {
        $.ajax({
          url: 'get_materias.php',
          method: 'GET',
          data: {
            stateId: stateId
          },
          success: function(data) {
            $('#materiasReg').html(data);
          }
        });
      } else {
        $('#materiasReg').html('<option value="">Materias</option>');
      }
    });
  });
</script>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>