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
function get_Materias(int $anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio AND activo = 1;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}
$flag = 1;
?>

<main label="programasalu">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <header>
      <div class="row align-items-center">
        <div class="col-2 text-success"><a href="verprogramas.php" class="d-flex"><i class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
      </div>
    </header>
  </section>
  <section>
    <div class="card mt-3 shadow small ">
      <div class="card-header text-bg-dark d-flex align-items-center">
        <i class='bx bxs-folder-open bx-sm me-2'></i>
        PROGRAMAS DE <?= $anio ?>º AÑO
      </div>
      <div class="card-body">
        <?php
        $materias = get_Materias($anio);
        while ($materia = mysqli_fetch_array($materias)) { ?>
          <?php $trabajos = get_ProgramasAnio($materia['nomenclatura']);
          $rad = $flag % 2;
          if ($rad == 0) {
            $fila = ' bg-success bg-opacity-10 ';
          } else {
            $fila = '';
          }
          ?>
          <div class="row py-2 <?= $fila ?> border-bottom">
            <?php if (mysqli_num_rows($trabajos) != 0) {
              while ($trabajo = mysqli_fetch_array($trabajos)) {
                $fechaCarga = $trabajo['fechadecarga']; ?>
                <div class="col-12 col-xl-4 my-1">
                  <i class='bx bxs-circle me-2'></i> <?= $materia['nombre'] ?>
                </div>
                <div class="col-12 col-xl-5 my-1">
                  <span class="text-muted text-italic small d-flex align-items-center"><i class='bx bx-cloud-upload bx-sm me-2'></i> cargado por Prof.
                    <?= $trabajo['cargadopornombre'] . ' el ' . date("d/m/y", strtotime($fechaCarga)) ?>
                  </span>
                </div>
                <div class="col-12 col-xl-3 my-1 ">
                  <a href="../docentes/programas/<?= $trabajo['archivo'] ?>" target="_blank" class="btn btn-sm btn-success w-100 text-center d-flex align-items-center">
                    <i class='bx bxs-file-pdf text-white bx-sm me-2'></i> Descargar programa
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