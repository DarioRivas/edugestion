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
function get_Materias($anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

?>

<main label="verprogramas">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <header>
      <div class="row align-items-center">
        <div class="col-2 text-success"><a href="verprogramas.php" class="d-flex"><i
              class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
        <div class="col-8 text-center">
          <h3>Programas de
            <?= $anio ?>º AÑO
          </h3>
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
        <div class="card-header bg-warning bg-opacity-10 rounded">
          <i class='bx bxs-folder-open text-dark bx-sm me-2'></i><span>
            <?= $materia['nombre'] ?>
          </span>
        </div>
        <?php $trabajos = get_ProgramasAnio($materia['nomenclatura']);
        if (mysqli_num_rows($trabajos) != 0) {
          while ($trabajo = mysqli_fetch_array($trabajos)) {
            $fechaCarga = $trabajo['fechadecarga'];
            ?>
            <div class="card-body">
              <a href="../docentes/programas/<?= $trabajo['archivo'] ?>"
                target="_blank">
                <i class='bx bxs-file-pdf text-danger bx-sm'></i> Programa
                <?=  date("Y", strtotime($fechaCarga)) ?>
                <span class="text-muted text-italic"> cargado por Prof.
                  <?= $trabajo['cargadopornombre'] . ' el ' . date("d/m/y", strtotime($fechaCarga)) ?>
                </span>
              </a>
            </div>
          <?php }
        } else { ?>
          <div class="card-body small text-secondary">No hay programas cargados aún para esta materia</div>
        <?php } ?>
      </div>
      <?php
    } ?>
    <!-- CONTENIDO -->
  </section>
</main>
<script src="../_assets/js/menu.js"></script>

<?php require_once (ROOT_DIR . '_includes/footer.php') ?>