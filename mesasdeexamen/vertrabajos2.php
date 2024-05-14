<?php
session_start();
define('ROOT_DIR', '../');
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
conectar();
function get_Materias($anio)
{
  $query = "SELECT * FROM data_materias WHERE anio = $anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

function get_Cursos()
{
  $query = "SELECT * FROM data_cursos GROUP BY anio;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

function get_Trabajos($nomenclatura)
{
  $query = "SELECT * FROM mesas_trabajos WHERE materia = '$nomenclatura' AND activo = 1;";
  $result = mysqli_query(conectar(), $query);
  return $result;
}

$tabActive = ' active';
$contentActive = ' show active';
?>
<main class="container-fluid mt-2">
  <header>
    <div class="text-center my-4">
      <h4>Trabajos Prácticos de Mesas de Exámen</h4>
      <hr>
    </div>
  </header>
  <section class="container h-100">
    <div class="container card shadow p-3 rounded bg-secondary bg-opacity-10">
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <?php
        $cursos = get_Cursos();
        while ($anio = mysqli_fetch_array($cursos)) { ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link <?= $tabActive ?>  px-5" id="anio-<?= $anio['anio'] ?>-id" data-bs-toggle="tab"
              data-bs-target="#anio-<?= $anio['anio'] ?>-tab" type="button" role="tab"
              aria-controls="anio-<?= $anio['anio'] ?>-tab" aria-selected="true">
              <?= $anio['anio'] . '° año' ?>
            </button>
          </li>
          <?php
          $tabActive = '';
        } ?>
      </ul>
      <div class="tab-content" id="myTabContent">
        <?php
        $cursos = get_Cursos();
        while ($anio = mysqli_fetch_array($cursos)) { ?>
          <div class="tab-pane fade <?= $contentActive ?>" id="anio-<?= $anio['anio'] ?>-tab" role="tabpanel"
            aria-labelledby="anio-<?= $anio['anio'] ?>-id" tabindex="0">
            <!-- CONTENIDO -->
            <div class="container border border-top-0 bg-white">
              <?php
              $materias = get_Materias($anio['anio']);
              while ($materia = mysqli_fetch_array($materias)) { ?>
                <div class="row p-2 align-items-center border-bottom">
                  <div class="col"><i class='bx bxs-folder-open text-primary fs-4'></i>
                    <?= $materia['nombre'] ?>
                  </div>
                  <?php $trabajos = get_Trabajos($materia['nomenclatura']);
                  while ($trabajo = mysqli_fetch_array($trabajos)) {
                    $fechaCarga = $trabajo['fechadecarga'];
                    switch ($trabajo['tipo']) {
                      case 'Prev':
                        $tipoExamen = 'Previos';
                        break;
                      case 'Term':
                        $tipoExamen = 'Terminales';
                        break;
                    } ?>
                    <div class="row p-2 ps-3 align-items-center">
                      <div class="col ps-4"><i class='bx bxs-file-pdf text-danger fs-4'></i>
                        TP
                        <?= $trabajo['mes'] . date("y", strtotime($fechaCarga)) ?> <span class="text-danger">
                          <?= $tipoExamen ?>
                        </span><span class="text-muted text-italic small"><em> cargado por Prof.
                            <?= $trabajo['cargadopornombre'] . ' el ' . date("d-m-y", strtotime($fechaCarga)) ?>
                          </em></span><a href="trabajos/<?= $trabajo['archivo'] ?>" class="btn btn-primary btn-sm ms-3">
                          Descargar archivo <i class='bx bxs-download'></i></a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <?php
              } ?>
              <!-- CONTENIDO -->
            </div>
          </div>
          <?php
          $contentActive = '';
        } ?>
      </div>
    </div>
  </section>
</main>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>