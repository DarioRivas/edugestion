<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
include(ROOT_DIR . "_functions/micurso.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();

$docente = get_Docente($_GET['docente']);
$curso = get_Curso($_GET['curso']);
$materia = get_Materia($_GET['materia']);
?>
<main label="miaula">
  <header>
    <i class='bx bx-edit'></i> Mi aula
  </header>
  <div class="container">
    <div class="text-center p-3">
      <div class="row">
        <div class="col-2 text-success"><a href="./" class="d-flex"><i
              class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
        </div>
      </div>
      <h3 class=" fw-bold"><?= $materia['nombre'] ?></h3>
      <p> Prof. <?= $docente['apellido'] . ', ' . $docente['nombre'] ?></p>
    </div>
    <div class="alert alert-warning shadow mb-3 p-3">
      <span class="py-2 fw-bold">COMUNICADOS</span>
      <ul class="list-group list-group-flush bg-transparent">
        <!-- REPETIR -->
        <li class="list-group-item bg-transparent">
          <blockquote class="blockquote">
            <i class='bx bxs-info-circle bx-s me-2'></i><i>Lorem ipsum dolor sit amet. Et doloribus magni qui incidunt vitae eos consequatur harum. Ut maiores quibusdam non laborum placeat ex consequatur dolorum.</i>
          </blockquote>
          <figcaption class="blockquote-footer">
            <?= $docente['apellido'] . ', ' . $docente['nombre'] ?> el <cite title="Source Title">00/00/00</cite>
          </figcaption>
        </li>
        <!-- REPETIR -->
      </ul>
    </div>
    <div class="alert alert-success shadow p-3 mb-3">
      <span class="py-2 fw-bold">INBOX</span>
      <div class="row mb-3">
        <div class="col">
          <span class="badge rounded-pill text-bg-success">
            00/00/00 00:00hs
            <span class="fw-semibold">
              <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
            </span>
          </span>
          Lorem ipsum dolor sit amet. Et doloribus magni qui incidunt vitae eos consequatur harum. Ut maiores quibusdam non laborum placeat ex consequatur dolorum.
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <span class="badge rounded-pill text-bg-success">
            00/00/00 00:00hs
            <span class="fw-semibold">
              <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
            </span>
          </span>
          Lorem ipsum dolor sit amet. Et doloribus magni qui incidunt vitae eos consequatur harum. Ut maiores quibusdam non laborum placeat ex consequatur dolorum.
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <span class="badge rounded-pill text-bg-success">
            00/00/00 00:00hs
            <span class="fw-semibold">
              <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
            </span>
          </span>
          Lorem ipsum dolor sit amet. Et doloribus magni qui incidunt vitae eos consequatur harum. Ut maiores quibusdam non laborum placeat ex consequatur dolorum.
        </div>
      </div>
      <form action="" method="post">
        <div class="row">
          <div class="col">
            <input class="form-control" type="text" placeholder="mensaje..." aria-label="default input example">
          </div>
          <div class="col-auto">
            <button class="btn btn-success" type="submit">Publicar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="alert alert-secondary shadow p-3 mb-5">
      <span class="fw-bold">DOCUMENTOS</span>
      <div class="row align-items-center mb-2">
        <div class="col">
          <i class='bx bx-file-blank'></i> 00/00/00 - <b>Documento de texto</b> - <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
        </div>
        <div class="col-auto"><a class="btn btn-success btn-sm w-100" href="http://">Descargar archivo</a></div>
      </div>
      <div class="row align-items-center mb-2">
        <div class="col">
          <i class='bx bx-file-blank'></i> 00/00/00 - <b>Documento de texto</b> - <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
        </div>
        <div class="col-auto"><a class="btn btn-success btn-sm w-100" href="http://">Descargar archivo</a></div>
      </div>
      <div class="row align-items-center mb-2">
        <div class="col">
          <i class='bx bx-file-blank'></i> 00/00/00 - <b>Documento de texto</b> - <?= $docente['apellido'] . ', ' . $docente['nombre'] ?>
        </div>
        <div class="col-auto"><a class="btn btn-success btn-sm w-100" href="http://">Descargar archivo</a></div>
      </div>
    </div>
  </div>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>