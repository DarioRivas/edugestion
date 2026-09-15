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

if (isset($_POST['cargarPis'])) {
  // DATOS FORM
  $file = $_FILES['archivoPis']['name'];
  $anio = intval($_POST['anioPis']);
  $materia = $_POST['materiaPis'];
  $fechaFile = date('Y');
  $cargadoporId = $_SESSION['user-id'];
  $cargadopor = $_SESSION['user-apellido'];
  $turno = $_POST['turno'];
  $division = $_POST['division'];
  $cuatrimestre = intval($_POST['cuatrimestre']);
  // FIN DATOS FORM

  $a = pathinfo($file);
  $basename = $a['basename']; // nombre + extension
  $filename = $a['filename']; // nombre
  $extension = $a['extension']; // extension
  $path = "periodosaberes/"; // ruta donde se almacena el archivo

  // Crear carpeta si no existe
  if (!file_exists($path)) {
    mkdir($path, 0777, true);
  }

  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $random = date('his');

  // Nombre del archivo generado
  $filename = 'TP-PIS-' . $materia . '-' . $division . $turno . '-C' . $cuatrimestre . '-' . $fechaFile . '-' . $cargadopor . '-' . $random;
  $cargadoporNombre = $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'];

  // Validar extensión
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");

  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivoPis']['tmp_name'], $path . $filename . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '.' . $extension;
      // Inserción en la tabla periodosaberes
      $query = "INSERT INTO periodosaberes (anio, materia, turno, division, cuatrimestre, fechadecarga, cargadoporid, cargadopornombre, archivo, aniolectivo, activo) 
                      VALUES ($anio, '$materia', '$turno', '$division', $cuatrimestre, '$timestamp', $cargadoporId, '$cargadoporNombre', '$link', '$aniolectivo', 1)";

      if (mysqli_query($conexion, $query)) {
        $alertOn = 1;
        $resultado = "El archivo <b>" . $link . "</b> se ha subido correctamente. Para ver la publicación haga click <a class='fw-bold' href='../alumnos/periodosaberes.php?anio=$anio'>AQUÍ</a>";
        $alert = "alert-success";
      } else {
        $alertOn = 1;
        $resultado = "Error en la base de datos al guardar los datos.";
        $alert = "alert-danger";
      }
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

<main label="subirpis">
  <header>
    <i class='bx bx-edit'></i> Periodo de Intensificación de Saberes
  </header>

  <?php if ($alertOn == 1) { ?>
    <div class="container mt-3">
      <div class="alert <?= $alert ?>">
        <?= $resultado ?>
      </div>
    </div>
  <?php } ?>

  <!-- PROGRAMAS PERIODO DE INTENSIFICACIÓN DE SABERES -->
  <section class="container mt-3">
    <div class="card shadow mb-5">
      <div class="card-header text-bg-dark">
        SUBIR TRABAJO PRÁCTICO - PERIODO DE INTENSIFICACIÓN DE SABERES
      </div>
      <div class="card-body">
        <form action="subirpis.php" method="post" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-xxl-2 col-xl-2 col-lg-4 col-12">
              <label for="aniosPis" class="form-label small">Año de cursado:</label>
              <select class="form-select" name="anioPis" id="aniosPis" required>
                <option selected disabled value="">Año</option>
                <option value="1">1er año</option>
                <option value="2">2do año</option>
                <option value="3">3er año</option>
                <option value="4">4to año</option>
                <option value="5">5to año</option>
                <option value="6">6to año</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-12">
              <label for="materiasPis" class="form-label mt-3 mt-lg-0 small">Materia:</label>
              <select class="form-select input-control" name="materiaPis" id="materiasPis" required>
                <option selected disabled value="">Materia</option>
              </select>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-4 col-12">
              <label for="cuatrimestre" class="form-label mt-3 mt-lg-0 small">Cuatrimestre:</label>
              <select class="form-select input-control" name="cuatrimestre" id="cuatrimestre" required>
                <option selected disabled value="">Cuatrimestre</option>
                <option value="1">1er Cuatrimestre</option>
                <option value="2">2do Cuatrimestre</option>
              </select>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-6 col-12">
              <label for="turno" class="form-label mt-3 mt-xl-0 small">Turno:</label>
              <select class="form-select input-control" name="turno" id="turno" required>
                <option selected disabled value="">Turno</option>
                <option value="M">Mañana</option>
                <option value="T">Tarde</option>
              </select>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-12">
              <label for="division" class="form-label mt-3 mt-xl-0 small">División:</label>
              <select class="form-select input-control" name="division" id="division" required>
                <option selected disabled value="">División</option>
                <option value="1">1ra</option>
                <option value="2">2da</option>
                <option value="3">3ra</option>
              </select>
            </div>
          </div>
          <div class="row align-items-end mt-3">
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-12">
              <label for="archivoPis" class="form-label mt-3 small">Archivo para subir (en formato PDF):</label>
              <input class="form-control" type="file" id="archivoPis" name="archivoPis" accept=".pdf" required>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-12">
              <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center" name="cargarPis">
                Subir archivo<i class='bx bxs-cloud-upload bx-sm ms-2'></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<script>
  $(document).ready(function() {
    $('#aniosPis').change(function() {
      var stateId = $(this).val();
      if (stateId !== '') {
        $.ajax({
          url: 'get_materias.php',
          method: 'GET',
          data: {
            stateId: stateId
          },
          success: function(data) {
            $('#materiasPis').html(data);
          }
        });
      } else {
        $('#materiasPis').html('<option value="">Materia</option>');
      }
    });
  });
</script>

<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>