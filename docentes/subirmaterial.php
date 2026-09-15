<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/trabajos.php");
include(ROOT_DIR . "_functions/material.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$alertOn = 0;
if (isset($_POST['cargar'])) {
  //DATOS FORM
  $file = $_FILES['archivo']['name'];
  $cuatrimestre = intval($_POST['cuatrimestre']);
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
  $path = "planificaciones/"; //ruta donde se almacena el archivo              
  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $aniolectivo = date('Y');
  $filename = 'PLANIFICACION-' . $materia . '-c' . $cuatrimestre . '-' . $fechaFile . '-' . $cargadopor;
  $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];
  //Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '.' . $extension;
      mysqli_query($conexion, "INSERT INTO planificaciones (anio, materia, cuatrimestre, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) VALUES ($anio, '$materia', '$cuatrimestre', '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1);");
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

<style>
  .big-checkbox {
    width: 1.5rem;
    height: 1.5rem;
    top: 0.5rem
  }
</style>
<main label="subirplanificaciones">
  <header>
    <i class='bx bx-edit'></i> Material de estudio
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
      <div class="card-header text-bg-success">SUBIR MATERIAL DE ESTUDIO</div>
      <div class="card-body">
        <form action="subirplanificaciones.php" method="post" enctype="multipart/form-data">
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
  <section>
    <div class="container">
      <!-- TAGS -->
      <div class="alert alert-success">
        <h6 class="text-center">Cursos</h6>
        <div class="row px-3">
          <?php $get_cursos = get_cursos();
          $flag = 1;
          while ($cursos = mysqli_fetch_array($get_cursos)) { ?>
            <?php if ($cursos['anio'] != $flag) {
              echo "</div>";
              echo "<hr>";
              echo "<div class='row px-3'>";
              $flag = $cursos['anio'];
              ?>
            <?php  } ?>
            <div class="col-3 py-2">
              <div class="form-check">
                <input class="form-check-input big-checkbox" type="checkbox" name="tags[]" value="<?= $cursos['anio'] ?>" id="color_red" />
                <label class="form-check-label fs-5" for="color_red">
                  <span class="fw-semibold ps-3 "> <?= $cursos['anio'] . "° " ?></span> <span class="fw-semibold "> <?= $cursos['division'] . "a "  ?></span> <span> <?= " T" . $cursos['turno']  ?></span>
                </label>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- TAGS -->
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
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>