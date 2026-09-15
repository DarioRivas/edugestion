<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/biblioteca.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$conexion = conectar();
$sql = "SELECT L.id, L.titulo, A.autor, L.ciclo, E.editorial
FROM libros L
INNER JOIN libros_autores A ON L.autor = A.id
INNER JOIN libros_editoriales E ON L.editorial = E.id
ORDER BY L.id DESC LIMIT 5;";
$librosA = mysqli_query($conexion, $sql);
?>
<main label="informacionbiblio">
  <header>
    <i class='bx bx-book'></i> Biblioteca
  </header>
  <section>
    <div class="row">
      <div class="col-xxl-8 col-xl-8 col-md-8 col-12 mt-3">
        <div class="card shadow rounded ">
          <div class="card-header text-bg-dark">ÚLTIMOS LIBROS CARGADOS</div>
          <div class="card-body">
            <?php while ($libro = mysqli_fetch_array($librosA)) { ?>
              <div class="row">
                <div class="col-12">
                  <a href="libro.php?id=<?= $libro['id'] ?>">
                    <span class="fw-semibold"><?= $libro['titulo'] ?></span> - <?= $libro['autor'] ?>
                    (<?= $libro['editorial'] ?>)</a>
                </div>
                <hr>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-md-4 col-12 mt-3">
        <div class="card shadow rounded h-100 border border-warning">
          <div class="card-header card-header text-bg-warning">PEDIDOS</div>
          <div class="card-body alert-warning text-center">
            <i class='bx bx-hard-hat bx-md'></i>
            <p>En construcción</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>