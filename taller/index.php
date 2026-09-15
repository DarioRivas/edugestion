<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/taller.php");
include(ROOT_DIR . "_functions/usuarios.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$get_inasistencias = get_inasistencias();
$get_profesoresP = get_ProfesoresTaller('1');
$get_profesoresS = get_ProfesoresTaller('2');
?>
<main label="informaciontaller">
  <header>
    <i class='bx bx-wrench'></i> Taller
  </header>
  <section>
    <section>
      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="text-center mt-3">
            <div class="card rounded shadow border border-danger ">
              <div class="card-header text-bg-danger">INASISTENCIAS DE DOCENTES</div>
              <div class="card-body bg-danger bg-opacity-50">
                <?php if (mysqli_num_rows($get_inasistencias) != 0) { ?>
                  <div class="row mb-2">
                    <div class="col-12">Sección y Turno - Docente - Fecha</div>
                  </div>
                  <?php
                  while ($inasistencia = mysqli_fetch_array($get_inasistencias)) { ?>
                    <div class="row">
                      <div class="col-12">
                        <?php if ($inasistencia['fechainicio'] == $inasistencia['fechafin']) {
                          $dia = date('d/m/Y', strtotime($inasistencia['fechainicio']));
                          $fecha = "el día $dia";
                        } else {
                          $desde = date('d/m/Y', strtotime($inasistencia['fechainicio']));
                          $hasta = date('d/m/Y', strtotime($inasistencia['fechafin']));
                          $fecha = "desde el $desde hasta el $hasta";
                        } ?>
                        <span class="h6">
                          <?= $inasistencia['seccion'] . ' ' . $inasistencia['anio'] . 'º T' . $inasistencia['turno'] ?></span>
                        - <?= 'Prof. ' . $inasistencia['docente'] ?> -
                        <?= $fecha ?>
                      </div>
                      <hr>
                    </div>
                  <?php }
                } else { ?>
                  <div class="row mb-2">
                    <div class="col-12">No se registran inasistencias</div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-12">
          <div class="card rounded shadow mt-3 text-center border border-success">
            <div class="card-header text-bg-success">ROTACIÓN 1er y 2do AÑO</div>
            <ul class="list-group">
              <li class="list-group-item list-group-item-success">jueves 6 de marzo al viernes 2 de mayo </li>
              <li class="list-group-item list-group-item-success">lunes 5 de mayo al viernes 4 de julio</li>
              <li class="list-group-item list-group-item-success">lunes 21 de julio al viernes 26 de septiembre</li>
              <li class="list-group-item list-group-item-success">jueves 30 de octubre al viernes 28 noviembre</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col-xl-6 col-12">
        <div class="card rounded shadow mt-3 text-center border border-warning">
          <div class="card-header text-bg-warning">PROFESORES 1er AÑO</div>
          <div class="card-body">
            <div class="row">
              <?php while ($profesP = mysqli_fetch_array($get_profesoresP)) { ?>
                <div class="col-6 mb-5">
                  <div class="row align-items-center">
                    <div class="col-xl-4"><img src="../miusuario/imagenes/<?= $profesP['imagen'] ?>" alt="" class="img-fluid" style="max-width: 100px; border-radius:10%;"></div>
                    <div class="col-xl-8">
                      <div class="row align-items-center">
                        <div class="col-12"><?= $profesP['docente'] ?></div>
                        <div class="col-12  fw-semibold small"><?= $profesP['seccion'] ?></div>
                        <div class="col-12 small">Turno <?= $profesP['turno'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-12">
        <div class="card rounded shadow mt-3 text-center border border-info">
          <div class="card-header text-bg-info">PROFESORES 2do AÑO</div>
          <div class="card-body">
            <div class="row">
              <?php
              while ($profesS = mysqli_fetch_array($get_profesoresS)) { ?>
                <div class="col-6 pb-5">
                  <div class="row align-items-center">
                    <div class="col-xl-4"><img src="../miusuario/imagenes/<?= $profesS['imagen'] ?>" alt="" class="img-fluid" style="max-width: 100px; border-radius:10%;"></div>
                    <div class="col-xl-8">
                      <div class="row align-items-center">
                        <div class="col-12"><?= $profesS['docente'] ?></div>
                        <div class="col-12 fw-semibold small"><?= $profesS['seccion'] ?></div>
                        <div class="col-12 small">Turno <?= $profesS['turno'] ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>