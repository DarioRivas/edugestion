<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

$alertOn = 0;
$resultado = '';

if (isset($_POST['cargar'])) {
  // DATOS FORM
  $file = $_FILES['micv']['name'];
  $cargadoporId = $_SESSION['user-id'];
  $cargadopor = $_SESSION['user-apellido'];
  // FIN DATOS FORM

  $a = pathinfo($file);
  $basename = $a['basename']; // nombre + extension
  $filename = $a['filename']; // nombre
  $extension = $a['extension']; // extension
  $path = "curriculums/"; // ruta donde se almacena el archivo              

  date_default_timezone_set('America/Argentina/Jujuy');
  $date = new DateTime();
  $timestamp = $date->format('Y-m-d H:i:s');
  $fecha = date('dmY');

  // Limpiar el apellido para usarlo en el nombre del archivo (quitar espacios o caracteres extraños es una buena práctica)
  $apellidoLimpio = str_replace(' ', '', $cargadopor);
  $filename = 'CV-' . $apellidoLimpio . '-' . $fecha;

  $cargadoporNombre = $_SESSION['user-apellido'] . ', ' . $_SESSION['user-nombre'];

  // Getting the file ext
  $fileExt = explode('.', $basename);
  $fileActualExt = strtolower(end($fileExt));
  $allowedExt = array("pdf");

  if (in_array($fileActualExt, $allowedExt)) {
    if (move_uploaded_file($_FILES['micv']['tmp_name'], $path . $filename . '.' . $extension)) {

      $conexion = conectar();
      $link = $filename . '.' . $extension;

      // 1. Escapar las variables para evitar que caracteres especiales rompan el SQL
      $linkSeguro = mysqli_real_escape_string($conexion, $link);
      $idSeguro = mysqli_real_escape_string($conexion, $cargadoporId);
      $nombreSeguro = mysqli_real_escape_string($conexion, $cargadoporNombre);

      // 2. Armar y ejecutar la consulta verificando su éxito
      $query = "INSERT INTO curriculums (archivo, cargadoporid, cargadopornombre, fecha) VALUES ('$linkSeguro', '$idSeguro', '$nombreSeguro', '$timestamp')";

      if (mysqli_query($conexion, $query)) {
        $alertOn = 1;
        $resultado = "El archivo <b>" . $link . "</b> se ha subido correctamente a nuestra base de datos.";
        $alert = "alert-success";
      } else {
        // Si el SQL falla, capturamos el error
        $errorDB = mysqli_error($conexion);
        $alertOn = 1;
        $resultado = "El archivo se subió, pero hubo un error al registrar en la base de datos: " . $errorDB;
        $alert = "alert-danger";
      }
    } else {
      $alertOn = 1;
      $resultado = "Error al mover el archivo al servidor, por favor intente nuevamente.";
      $alert = "alert-danger";
    }
  } else {
    $alertOn = 1;
    $resultado = 'ERROR: El archivo debe ser en formato PDF';
    $alert = "alert-danger";
  }
}
?>
<main label="infoegresados">
  <header>
    <i class='bx bxs-graduation'></i> Egresados
  </header>
  <section>
    <?php if ($alertOn == 1) { ?>
      <div class="container">
        <div class="alert <?= $alert ?>">
          <?= $resultado ?>
        </div>
      </div>
    <?php } ?>
    <div class="row justify-content-center">
      <div class="col-xl-6 col-12 my-3">
        <div class="card shadow rounded mb-4  h-100">
          <div class="card-header text-bg-warning d-flex align-items-center"><i class='me-2 bx bx-id-card bx-sm'></i>Dejanos tu CV </div>
          <div class="card-body px-4">
            <form action="egresados.php" method="post" enctype="multipart/form-data">
              <div class="row">
                Acá podés dejarnos tu CV para cuando de alguna empresa o institución nos soliciten el contacto de nuestros egresados.
                <div class="col-xl-8 col-12">
                  <label for="formFile" class="form-label mt-3 small fw-semibold">Archivo para subir (en formato PDF):</label>
                  <input class="form-control" type="file" id="micv" name="micv" required>
                </div>
                <div class="col-xl-4 col-12 align-content-end">
                  <button type="submit" class="btn btn-success mt-3 d-flex w-100 justify-content-center" name="cargar">Subir CV<i class='bx bxs-cloud-upload bx-sm ms-1'></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-12 my-3">
        <div class="card shadow rounded rounded h-100">
          <div class="card-body bg-warning bg-opacity-25 pb-0">
            <p class="fw-semibold"><i class='bx bxs-graduation  me-2'></i>TITULOS</p>
            <div class="text-center">
              <p>¿Cómo descargar mi título?</p>
              <a class="btn btn-warning py-3 px-5" href="./descargartitulo.pdf" target="_blank">Descargar instructivo
                <i class='bx bxs-download'></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="row text-center py-3">
      <div class="col-12 my-3">
        <div class="card shadow" style="width: 100%;">
          <div class="card-header text-bg-success">
            <h5> Egresados 2023 - 6to 1ra</h5>
          </div>
          <img src="imagenesegresados/sextoprimera.jpg" alt="" class="img-fluid">
          <div class="card-body">
            <p class="card-text small">Arriba: Santiago Millan, Luciano Greco, Juan Condorí, Tomás Ruiz, Tomás Lagos y Lautaro Castillo </p>
            <p class="card-text small">Abajo: Adriana González, Oriana Kittler, Luján Pavez, Guadalupe Muñoz, Rocío Ruiz, Samira Pino, Florencia Oviedo y Pilar Kunz</p>
          </div>
        </div>
      </div>
      <div class="col-12 my-3">
        <div class="card shadow" style="width: 100%;">
          <div class="card-header text-bg-success">
            <h5> Egresados 2023 - 6to 2da</h5>
          </div>
          <img src="imagenesegresados/sextosegunda.jpg" alt="" class="img-fluid">
          <div class="card-body">
            <p class="card-text small">Arriba: Alexis Zapata, Gonzalo Di Paula, Román Bravo, Tomás Cantunez, Juan Simón Molina, Luciano Figueroa y Ema Bincaz </p>
            <p class="card-text small">Medio: Dana Luna, Rubén Choque, Alexis Vergara, Sol Arenas, Valentina González, Valentina Castillo, Martina Figueroa y Alexis Moreno</p>
            <p class="card-text small">Abajo: Lucía Bobbera, Gianella Benítez, Cielo Zampini, Nynna Mendez, Alejandra Chocobar y Benjamín Colileo</p>
          </div>
        </div>

      </div>
      <div class="col-12 my-3">
        <div class="card shadow" style="width: 100%;">
          <div class="card-header text-bg-success">
            <h5> Egresados 2023 - 6to 3ra</h5>
          </div>
          <img src="imagenesegresados/sextotercera.jpg" alt="" class="img-fluid">
          <div class="card-body">
            <p class="card-text small">Arriba: Franco Boras, Maximiliano Neira, Alejo Beratz, Gastón Muñoz, Thomás Rosas, Valentino Berfiglio, Ezequiel Acuña, Emiliano Melideo, Ignacio Soto, Gerónimo Blanco, Facundo Zúñiga y Emiliano Rebolledo </p>
            <p class="card-text small">Abajo: Abigail Vázquez, Lourdes Rainman, Brenda Velazquez, Julia Romera, Nayla Cáceres, Adara Sanz, Mayra Moreno, Guadalupe Rodríguez y Valentina Mendoza</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>