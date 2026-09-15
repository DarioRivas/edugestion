<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

$sqlCargos = "SELECT U.nombre, U.apellido, U.imagen, DC.nombre AS cargo, DC.turno FROM profes_cargos C
INNER JOIN usuarios U ON C.idusuarios = U.id
INNER JOIN data_cargos DC ON C.cargo = DC.id
ORDER BY DC.orden ASC, DC.nombre ASC, DC.turno;";
$conexion = conectar();
$queryCargos = mysqli_query($conexion, $sqlCargos);
$turno = '';
?>
<main label="verdocentes">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section class="mb-4">
    <div class="card shadow ">
      <div class="card-header text-bg-dark">CARGOS</div>
      <div class="card-body">
        <div class="row my-1 ">
          <?php while ($arrayCargos = mysqli_fetch_array($queryCargos)) { ?>
            <div class="col-xl-4 col-12">
              <div class="card shadow my-1">
                <div class="row">
                  <div class="col-8">
                    <div class="card-body">
                      <?php switch ($arrayCargos['turno']) {
                        case ('M'):
                          $turno = "Turno Mañana";
                          break;
                        case ('T'):
                          $turno = "Turno Tarde";
                          break;
                        default:
                          $turno = '';
                      }
                      ?>
                      <div class="text-success fw-semibold small"><?= $arrayCargos['cargo'] ?></div>
                      <div class="fw-semibold small"><?= $turno ?></div>
                      <div class="fs-6"> <?= $arrayCargos['apellido'] . ', ' .  $arrayCargos['nombre'] ?></div>
                    </div>
                  </div>
                  <div class="col-4">
                    <?php if ($arrayCargos['imagen'] != 'avatar4.png') { ?>
                      <img class="img-fluid rounded-end" src="../miusuario/imagenes/<?= $arrayCargos['imagen'] ?>" alt="">
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="card shadow">
      <div class="card-header text-bg-dark">DOCENTES POR AÑO</div>
      <div class="card-body p-0 g-0">
        <div class="row align-items-center p-0 g-0">
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=1">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>1er año</p>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=2">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>2do año</p>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=3">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>3er año</p>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=4">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>4to año</p>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=5">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>5to año</p>
            </a></div>
          <div class="col-xxl-2 col-lg-2 col-4"><a type="button" class="btn btn-outline-success shadow  w-100 pt-4 fw-semibold" href="docentes.php?anio=6">
              <i class='bx bxs-user-pin bx-sm'></i>
              <p>6to año</p>
            </a></div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>