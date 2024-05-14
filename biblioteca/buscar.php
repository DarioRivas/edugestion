<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$hayBusqueda = 0;
$sql = "SELECT L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada, COUNT(E.id) AS ejemplares
FROM libros L
INNER JOIN libros_autores A ON L.autor = A.id
INNER JOIN libros_editoriales E ON L.editorial = E.id
LEFT JOIN libros_ejemplares LE ON L.id = LE.idlibro
WHERE L.id > 0
GROUP BY L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada
ORDER BY L.id DESC
LIMIT 5;";

if (isset($_POST['btn-buscar'])) {
  $busqueda = $_POST['busqueda'];
  if (in_array($_SESSION['user-rol'], array('admin', 'bibliotecaria'))) {
    $isbn = " OR L.isbn LIKE '%$busqueda%' ";
  } else {
    $isbn = "";
  }
  $sql = "SELECT L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada, COUNT(E.id) AS ejemplares
  FROM libros L
  INNER JOIN libros_autores A ON L.autor = A.id
  INNER JOIN libros_editoriales E ON L.editorial = E.id
  LEFT JOIN libros_ejemplares LE ON L.id = LE.idlibro
  WHERE
  (
    L.titulo LIKE '%$busqueda%'
    $isbn
    OR A.autor LIKE '%$busqueda%'
    OR L.tags LIKE '%$busqueda%'
    OR E.editorial LIKE '%$busqueda%'
  )
  GROUP BY L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada
  ORDER BY L.titulo;";
  $hayBusqueda = 1;
}

$selautor = 0;
$seleditorial = 0;
$seltag = '0000';

if (isset($_POST['btn-filtrar'])) {
  $selautor = $_POST['selautor'];
  if ($selautor == 0) {
    $autor = '';
  } else {
    $autor = " AND L.autor = '$selautor' ";
  }

  $seleditorial = $_POST['seleditorial'];
  if ($seleditorial == 0) {
    $editorial = '';
  } else {
    $editorial = " AND L.editorial = '$seleditorial' ";
  }

  $seltag = $_POST['seltag'];
  if ($seltag == '0000') {
    $tag = '';
  } else {
    $tag = " AND L.tags LIKE '%$seltag%' ";
  }

  $sql = "SELECT L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada, COUNT(E.id) AS ejemplares
  FROM libros L
  INNER JOIN libros_autores A ON L.autor = A.id
  INNER JOIN libros_editoriales E ON L.editorial = E.id
  LEFT JOIN libros_ejemplares LE ON L.id = LE.idlibro
  WHERE L.id > 0
  $autor $editorial $tag
  GROUP BY L.id, L.titulo, A.autor, E.editorial, L.tags, L.portada
  ORDER BY L.titulo;";
  $hayBusqueda = 1;
}

$libros = mysqli_query($conexion, $sql);
$cantResults = mysqli_num_rows($libros);

?>
<main label="buscarlibros">
  <header>
    <i class='bx bx-book'></i> Biblioteca
  </header>
  <section>
    <header>
      <div class="text-center">
        <h4>Buscar Libros</h4>
      </div>
    </header>
    <div class="card shadow p-3 rounded">
      <h6 class="text-center">Buscar por Título, Autor o Etiquetas</h6>
      <form action="buscar.php" method="post">
        <div class="row align-items-end justify-content-center">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-8 mb-3 text-center">
            <input type="text" class="form-control" id="busqueda" name="busqueda" aria-describedby="busqueda" required>
          </div>
          <div class="col-xxl-2 col-xl-2 col-lg-2 col-4 mb-3">
            <button type="submit" class="btn btn-success d-flex w-100 justify-content-center" name="btn-buscar">Buscar
              <i class='bx bx-search-alt mt-1 ms-2'></i></button>
          </div>
        </div>
      </form>
    </div>
    <div class="card shadow p-3  my-3 rounded small">
      <h6 class="text-center">o filtrar por campos de datos</h6>
      <p class="small text-center text-muted">(los filtros son acumulables)</p>
      <form action="buscar.php" method="post">
        <div class="row align-items-end justify-content-center">
          <div class="col-xxl-4 col-xl-4 col-lg-3 col-12 mb-3 ">
            <label for="selautor" class="form-label small">por Autor</label>
            <select class="form-select" name="selautor" id="selautor">
              <option value="0" selected>Todos</option>
              <?php $get_autor = get_autores();
              while ($autor = mysqli_fetch_array($get_autor)) { ?>
                <option value="<?= $autor['id'] ?>">
                  <?= $autor['autor'] ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mb-3">
            <label for="seleditorial" class="form-label small">por Editorial</label>
            <select class="form-select" name="seleditorial" id="seleditorial">
              <option value="0" selected>Todas</option>
              <?php $get_editoriales = get_editoriales();
              while ($editorial = mysqli_fetch_array($get_editoriales)) { ?>
                <option value="<?= $editorial['id'] ?>">
                  <?= $editorial['editorial'] ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 mb-3">
            <label for="seltag" class="form-label small">por Etiqueta</label>
            <select class="form-select" name="seltag" id="seltag">
              <option value="0000" selected>Todas</option>
              <?php $get_tags = get_tags();
              while ($tag = mysqli_fetch_array($get_tags)) { ?>
                <option value="<?= $tag['tag'] ?>">
                  <?= $tag['tag'] ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xxl-2 col-xl-2 col-lg-3 col-12 mb-3">
            <button type="submit" class="btn btn-success d-flex w-100 justify-content-center" name="btn-filtrar">Filtrar
              <i class='bx bx-list-check bx-sm ms-2'></i></button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <?php if ($cantResults != 0) { ?>
    <div class="text-center mt-4">
      <?php if ($hayBusqueda == 0) { ?>
        <h5>Últimos <span class="text-success"><?= $cantResults ?></span> libros cargados</h5>
      <?php } else { ?>
        <h5>Mostrando <span class="text-success"><?= $cantResults ?></span> resultados</h5>
      <?php } ?>
    </div>
    <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-2 py-3 justify-content-center">
      <?php while ($libro = mysqli_fetch_array($libros)) { ?>
        <div class="col mb-3 ">
          <div  id="librosCatalogo" class="card rounded shadow h-100">
            <img src="portadas/<?= $libro['portada'] ?>" class="img-fluid card-img-top" alt="">
            <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark mt-4 me-5 ">
              x<?= $libro['ejemplares'] ?>
            </span>
            <div class="card-body small">
              <div class="card-title">
                <a href="libro.php?id=<?= $libro['id'] ?>" class=" d-flex align-items-center">
                  <span class="text-success fw-semibold"><?= $libro['titulo'] ?></span>
                </a>
              </div>
              <div class="mt-1">
                <span class="text-secondary small label"><i class='bx bxs-user-voice me-1'></i></span><?= $libro['autor'] ?>
              </div>
              <div class="mt-1">
                <span class="text-secondary small label"><i
                    class='bx bxs-building-house me-1'></i></span><?= $libro['editorial'] ?>
              </div>
              <div class="mt-1">
                <span class="text-secondary small"><i class='bx bxs-purchase-tag me-1'></i></span><?= $libro['tags'] ?>
              </div>
            </div>
            <div class="card-footer bg-light">
              <a href="libro.php?id=<?= $libro['id'] ?>" class="btn btn-success btn-sm px-2 mt-1 w-100">ver ficha
                <i class='bx bx-show ms-1'></i> </a>
              <?php if (in_array($_SESSION['user-rol'], array('admin', 'bibliotecaria'))) { ?>
                <a href="libroeditar.php?id=<?= $libro['id'] ?>" class="btn btn-warning btn-sm px-3 mt-1 w-100">Editar
                  <i class='bx bxs-edit ms-1'></i>
                </a>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger my-5 d-flex"><i class='bx bx-meh-alt bx-sm me-2'></i> No se encontraron resultados
    </div>
  <?php } ?>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>