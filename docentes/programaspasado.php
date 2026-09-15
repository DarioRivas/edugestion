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
function get_Materias($anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio AND activo = 1;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}
$flag = 1;
?>

<main label="programasdoc">
  <header>
  <i class='bx bx-edit'></i> Docentes
  </header>
  <section>
    <header>
      <div class="row align-items-center">
        <div class="col-2 text-success"><a href="verprogramas.php" class="d-flex"><i class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
      </div>
    </header>
  </section>
  <section class="container-fluid">
    <div class="card mt-3 shadow small ">
      <div class="card-header text-bg-success d-flex align-items-center">
        <i class='bx bxs-folder-open text-dark bx-sm me-2'></i>
        PROGRAMAS DE <?= $anio ?>º AÑO
      </div>
      <div class="card-body">
        <?php
        $materias = get_Materias($anio);
        while ($materia = mysqli_fetch_array($materias)) { ?>
          <?php $trabajos = get_ProgramasAnioAnterior($materia['nomenclatura']);
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-success bg-opacity-10 ';
          } else {
            $fila = '';
          }
          ?>
          <div class="row justify-content-center py-2 <?= $fila ?> border-bottom">
            <?php if (mysqli_num_rows($trabajos) != 0) {
              while ($trabajo = mysqli_fetch_array($trabajos)) {
                $fechaCarga = $trabajo['fechadecarga']; ?>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center">
                  <i class='bx bxs-circle me-2'></i> <?= $materia['nombre'] ?>
                </div>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center"><span class="text-muted text-italic d-flex align-items-center small"><i class='bx bx-cloud-upload bx-sm me-2'></i> cargado por Prof.
                    <?= $trabajo['cargadopornombre'] . ' el ' . date("d/m/y", strtotime($fechaCarga)) ?>
                  </span></div>
                <div class="col-12 col-xl-4 my-1 d-flex align-items-center">
                  <a href="../docentes/programas/<?= $trabajo['archivo'] ?>" target="_blank" class="btn btn-sm btn-success d-flex align-items-center w-100"> <i class='bx bxs-file-pdf text-white bx-sm me-2'></i> Descargar programa
                    <?= date("Y", strtotime($fechaCarga)) ?>
                  </a>
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

<?php require_once(ROOT_DIR . '_includes/footer.php') ?>