<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$alertOn = 0;
if (isset($_POST['cargar'])) {
  //DATOS FORM
  $file = $_FILES['archivo']['name'];
  $anio = intval($_POST['anio']);
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
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '.' . $extension;
      mysqli_query($conexion, "INSERT INTO proyectos (anio, materia, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
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
  <section>
    <header>
      <div class="text-center mb-3">
        <h3>
          Subir proyectos anuales al sistema
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
  </section>
</main>
<script>
  $(document).ready(function () {
    $('#anios').change(function () {
      var stateId = $(this).val();
      if (stateId !== '') {
        $.ajax({
          url: 'get_materias.php',
          method: 'GET',
          data: { stateId: stateId },
          success: function (data) {
            $('#materias').html(data);
          }
        });
      } else {
        $('#materias').html('<option value="">Materias</option>');
      }
    });
  });
</script>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>