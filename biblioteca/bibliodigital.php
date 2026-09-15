<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/biblioteca.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$alertOn = 0;
if (isset($_POST['cargar'])) {
  //DATOS FORM
  $idLibro = $_POST['idLibro'];
  $file = $_FILES['archivo']['name'];
  //FIN DATOS FORM
  $a = pathinfo($file);
  $basename = $a['basename']; //nombre + extension
  $filename = $a['filename']; //nombre
  $extension = $a['extension']; //extension
  $path = "libros/"; //ruta donde se almacena el archivo              
  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $aniolectivo = date('Y');
  $filename = 'DIGITAL-' . $idLibro;
  //Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");
  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $path . $filename . '.' . $extension)) {
      $conexion = conectar();
      $link = $filename . '.' . $extension;
      mysqli_query($conexion, "UPDATE libros SET archivo =  '$link'  WHERE id = $idLibro;");
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


$sqlLibros = "SELECT L.id, L.titulo, A.autor, L.archivo
FROM libros L
INNER JOIN libros_autores A ON L.autor = A.id
ORDER BY L.titulo ASC;";
$librosB = mysqli_query($conexion, $sqlLibros);

$sql = "SELECT L.id, L.titulo, A.autor, L.archivo
FROM libros L
INNER JOIN libros_autores A ON L.autor = A.id
WHERE L.archivo IS NOT NULL
ORDER BY L.id ASC;";
$librosA = mysqli_query($conexion, $sql);
?>
<main label="bibliodigital">
  <header>
    <i class='bx bx-book'></i> Biblioteca
  </header>
  <?php if ($alertOn == 1) { ?>
    <div>
      <div class="alert <?= $alert ?>">
        <?= $resultado ?>
      </div>
    </div>
  <?php } ?>
  <section>
    <?php if ($_SESSION['user-rol'] != 'alumno') { ?>
      <div class="row justify-content-center">
        <form action="bibliodigital.php" method="post" enctype="multipart/form-data">
          <div class="card shadow rounded">
            <div class="card-header text-bg-dark">CARGAR NUEVO LIBRO</div>
            <div class="card-body">
              <div class="row justify-content-center d-flex">
                <div class="col-xl-6 col-12">
                  <label for="formFile" class="form-label small">Seleccionar un libro del listado:</label>
                  <select class="form-select" name="idLibro" id="idLibro" required>
                    <option value="0" selected disabled>Todos</option>
                    <?php while ($listado = mysqli_fetch_array($librosB)) { ?>
                      <option value="<?= $listado['id'] ?>"><?= $listado['titulo'] ?> (<?= $listado['autor'] ?>)</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xl-6 col-12">
                  <label for="formFile" class="form-label small">Archivo para subir (en formato PDF):</label>
                  <input class="form-control" type="file" id="archivo" name="archivo" required>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-center">
                  <button type="submit" class="btn btn-success mt-3 px-5 d-flex align-items-center" name="cargar">Subir
                    archivo<i class='bx bxs-cloud-upload bx-sm ms-2'></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    <?php } ?>
  </section>
  <section>
    <div class="row">
      <div class="col-12 mt-3">
      <div class="card shadow rounded">
      <div class="card-header text-bg-dark">LIBROS Y DOCUMENTOS DIGITALES CARGADOS</div>
          <div class="card-body">
            <?php while ($libro = mysqli_fetch_array($librosA)) { ?>
              <div class="row pt-1">
                <div class=" col-xl-6 col-12 mb-1">
                  <a href="libro.php?id=<?= $libro['id'] ?>">
                    <span class="fw-semibold">"<?= $libro['titulo'] ?>"</span> (<?= $libro['autor'] ?>)
                  </a>
                </div>
                <div class=" col-xl-3 col-6  mb-1">
                  <a class="btn btn-outline-success btn-sm w-100" href="libro.php?id=<?= $libro['id'] ?>">Ver ficha <i class='bx bx-show ms-1'></i></a>
                </div>
                <div class="col-xl-3 col-6  mb-1">
                  <a class="btn btn-success btn-sm w-100" href="./libros/<?= $libro['archivo'] ?>">Descargar <i class='bx bxs-file-pdf ms-1'></i></a>
                </div>
              </div>
              <hr>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>