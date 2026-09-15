<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/trabajos.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$anio = $_GET['anio'];
$conexion = conectar();
$alert = "";

if (isset($_POST['eliminar'])) {
  $id = $_POST['tpid'];
  mysqli_query($conexion, "UPDATE mesas_trabajos SET activo = 0 WHERE id = $id;");
  $alert = "<div class='alert alert-danger justify-content-center'>
  <p class='d-flex mt-2'><i class='bx bx-error bx-sm me-2'></i>El archivo se ha eliminado correctamente</p>
  </div>";
}

function get_Materias($anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio AND activo = 1;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

$colorTipo = '';
$flag = 1;
?>

<main label="trabajosmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section>
    <?= $alert ?>
    <header>
      <div class="row align-items-center">
        <div class="col-2 text-success"><a href="vertrabajos.php" class="d-flex"><i class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
      </div>
    </header>
  </section>
  <section class="container-fluid">
    <div class="card mt-3 shadow small ">
      <div class="card-header text-bg-success d-flex align-items-center">
        <i class='bx bxs-folder-open text-dark bx-sm me-2'></i>
        TRABAJOS PRÁCTICOS Y GUÍAS DE <?= $anio ?>º AÑO
      </div>
      <div class="card-body">
        <?php
        $materias = get_Materias($anio);
        while ($materia = mysqli_fetch_array($materias)) { ?>
          <?php $trabajos = get_Trabajos($materia['nomenclatura']);
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-success bg-opacity-10 ';
          } else {
            $fila = '';
          }
          ?>
          <div class="row justify-content-end py-2 <?= $fila ?> border-bottom">
            <?php if (mysqli_num_rows($trabajos) != 0) {
              while ($trabajo = mysqli_fetch_array($trabajos)) {
                $fechaCarga = $trabajo['fechadecarga'];
                switch ($trabajo['tipo']) {
                  case 'Previos':
                    $tipoExamen = 'Previos y Terminales';
                    $colorTipo = ' text-danger ';
                    break;
                  case 'Acreditacion':
                    $tipoExamen = 'Acreditacion 20-21';
                    $colorTipo = ' text-success ';
                    break;
                } ?>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center">
                  <p><i class='bx bxs-circle me-2'></i>
                    <?= $materia['nombre'] ?> - <span class="<?= $colorTipo ?>"><?= $trabajo['tipo'] ?></span></p>
                </div>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center">
                  <span class="text-muted text-italic d-flex align-items-center small"><i class='bx bx-cloud-upload bx-sm me-2'></i> cargado por Prof.
                    <?= $trabajo['cargadopornombre'] . ' el ' . date("d/m/y", strtotime($fechaCarga)) ?>
                  </span>
                </div>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center">
                  <a href="../mesasdeexamen/trabajos/<?= $trabajo['archivo'] ?>" target="_blank" onclick="registrarDescarga('<?= $trabajo['archivo'] ?>')" class="btn btn-sm btn-success d-flex align-items-center justify-content-center w-100">
                    <i class='bx bxs-file-pdf text-white bx-sm me-2'></i> Descargar guía
                  </a>
                </div>
                <div class="col-8"></div>
                <div class="col-12 col-xl-4 align-self-end">
                  <?php if ($_SESSION['user-id'] == $trabajo['cargadoporid'] || $_SESSION['user-rol'] == 'admin') { ?>
                    <form action="trabajos.php?anio=<?= $_GET['anio'] ?>" method="post">
                      <input type="hidden" name="tpid" value="<?= $trabajo['id'] ?>">
                      <button class="btn btn-danger btn-sm d-flex align-items-center justify-content-center w-100" type="submit" name="eliminar">Eliminar esta guía<i class='bx bx-trash ms-2 bx-sm'></i></button>
                    </form>
                  <?php } ?>
                </div>
              <?php }
            } else { ?>
              <div class="col-12 col-xl-4">
                <i class='bx bx-circle me-2'></i> <?= $materia['nombre'] ?>
              </div>
              <div class="col-12 col-xl-8 small text-secondary">Aún no hay cargados programas de esta materia</div>
            <?php }
            $flag = $flag + 1;
            ?>
          </div>
        <?php
        }
        $flag = 1;
        ?>

      </div>
    </div>
    <!-- CONTENIDO -->
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<script>
  function registrarDescarga(filename) {
    var anio = <?php echo $anio; ?>;
    var url = 'descargar.php?filename=' + filename + '&anio=' + anio;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.send();
  }
</script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>