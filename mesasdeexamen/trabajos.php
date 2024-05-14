<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
include (ROOT_DIR . "_functions/trabajos.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
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
  $query = "SELECT * FROM data_materias WHERE anio = $anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

?>

<main label="trabajosmesas">
  <header>
    <i class='bx bx-edit'></i> Mesas de examen
  </header>
  <section>
    <?= $alert ?>
    <header>
      <div class="row align-items-center">
        <div class="col-2 text-success"><a href="vertrabajos.php" class="d-flex"><i
              class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
        <div class="col-8 text-center">
          <h4>Guías y Trabajos Prácticos de
            <?= $anio ?>º AÑO
          </h4>
        </div>
        <div class="col-2"></div>
      </div>
    </header>
  </section>
  <section class="container-fluid">
    <?php
    $materias = get_Materias($anio);
    while ($materia = mysqli_fetch_array($materias)) { ?>
      <div class="card mt-3 shadow">
        <div class="card-header bg-success bg-opacity-10 rounded">
          <i class='bx bxs-folder-open text-dark bx-sm me-2'></i><span>
            <?= $materia['nombre'] ?>
          </span>
        </div>
        <?php $trabajos = get_Trabajos($materia['nomenclatura']);
        if (mysqli_num_rows($trabajos) != 0) {
          while ($trabajo = mysqli_fetch_array($trabajos)) {
            $fechaCarga = $trabajo['fechadecarga'];
            switch ($trabajo['tipo']) {
              case 'Previos':
                $tipoExamen = 'Previos y Terminales';
                break;
              case 'Acreditacion':
                $tipoExamen = 'Acreditacion 20-21';
                break;
            } ?>
            <div class="card-body justify-content-center align-items-center d-flex-inline">
              <a href="trabajos/<?= $trabajo['archivo'] ?>" onclick="registrarDescarga('<?= $trabajo['archivo'] ?>')"
                target="_blank">
                <i class='bx bxs-file-pdf text-danger bx-sm'></i> TP
                <?= get_meses($trabajo['mes']) . ' ' . date("Y", strtotime($fechaCarga)) ?>
                <span class="text-success mx-2">
                  <?= $tipoExamen ?>
                </span>
                <span class="text-muted text-italic"> cargado por Prof.
                  <?= $trabajo['cargadopornombre'] . ' el ' . date("d/m/y", strtotime($fechaCarga)) ?>
                </span>
              </a>
              <?php if ($_SESSION['user-id'] == $trabajo['cargadoporid']) { ?>
                <form action="trabajos.php?anio=<?= $_GET['anio'] ?>" method="post">
                  <input type="hidden" name="tpid" value="<?= $trabajo['id'] ?>">
                  <button class="btn btn-danger d-flex" type="submit" name="eliminar">Eliminar esta guía<i
                      class='bx bx-trash ms-2 bx-sm'></i></button>
                </form>
              <?php } ?>
            </div>
          <?php }
        } else { ?>
          <div class="card-body small text-secondary">No hay trabajos cargados aún para esta materia</div>
        <?php } ?>
      </div>
      <?php
    } ?>
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
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>