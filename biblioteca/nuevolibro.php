<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
$conexion = conectar();
include (ROOT_DIR . "_functions/biblioteca.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");
$dt = date("Y-m-d");
$alert = '';
$warning = '';
if (isset ($_GET['error'])) {
  if ($_GET['error'] == 1) {
    $alert = "El libro y sus ejemplares se han cargado con éxito.";
    $warning = ' alert-success ';
  } else {
    $alert = "Error en la carga del libro.";
    $warning = ' alert-danger ';
  }
}

?>
<main label="cargarlibros">
  <header>
    <i class='bx bx-book'></i> Biblioteca
  </header>
  <section>
    <header>
      <div class="text-center">
        <h4>Cargar un nuevo libro</h4>
      </div>
    </header>
    <?php if($alert != ''){?>
      <section>
        <div class="alert<?= $warning ?>">
        <?= $alert ?>
        </div>
      </section>
      <?php }?>
    <!-- CARGA DE LIBRO BASE -->
    <div class="card shadow p-3">
      <form method="post" action="nuevolibropost.php">
        <div class="row">
          <div class="col-xxl-2 xol-xl-2 col-lg-2 col-12 mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="nombre" name="isbn" aria-describedby="isbn" required>
          </div>
          <div class="col-xxl-6 xol-xl-6 col-lg-6 col-12 mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo" required>
          </div>
          <div class="col-xxl-2 xol-xl-2 col-lg-2 col-4 mb-3">
            <label for="edicion" class="form-label">Edición</label>
            <input type="text" class="form-control" id="edicion" name="edicion" aria-describedby="edicion" required>
          </div>
          <div class="col-xxl-2 xol-xl-2 col-lg-2 col-8 mb-3">
            <label for="ciclo" class="form-label">Ciclo</label>
            <select class="form-select" name="ciclo" id="ciclo" required>
              <option value="0" selected>Todos</option>
              <option value="1">1er año</option>
              <option value="2">2do año</option>
              <option value="3">3er año</option>
              <option value="4">4to año</option>
              <option value="5">5to año</option>
              <option value="6">6to año</option>
              <option value="7">Ciclo Básico</option>
              <option value="8">Ciclo Superior</option>
            </select>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xxl-6 xol-xl-6 col-lg-6 col-6 mb-3">
            <label for="selautor" class="form-label small">Seleccionar un Autor</label>
            <select class="form-select" name="selautor" id="selautor">
              <option value="0" selected>Autor</option>
              <?php $get_autor = get_autores();
              while ($autor = mysqli_fetch_array($get_autor)) { ?>
                <option value="<?= $autor['id'] ?>">
                  <?= $autor['autor'] ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xxl-6 xol-xl-6 col-lg-6 col-6 mb-3">
            <label for="nuevoautor" class="form-label small">Cargar nuevo Autor</label>
            <input type="text" class="form-control" id="nuevoautor" name="nuevoautor" aria-describedby="nuevoautor">
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-6 xol-xl-6 col-lg-6 col-6 mb-3">
            <label for="seleditorial" class="form-label small">Seleccionar una Editorial</label>
            <select class="form-select" name="seleditorial" id="seleditorial">
              <option value="0" selected>Editorial</option>
              <?php $get_editoriales = get_editoriales();
              while ($editorial = mysqli_fetch_array($get_editoriales)) { ?>
                <option value="<?= $editorial['id'] ?>">
                  <?= $editorial['editorial'] ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <div class="col-xxl-6 xol-xl-6 col-lg-6 col-6 mb-3">
            <label for="nuevaeditorial" class="form-label small">Cargar nueva Editorial</label>
            <input type="text" class="form-control" id="nuevaeditorial" name="nuevaeditorial"
              aria-describedby="nuevaeditorial">
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-4 xol-xl-4 col-lg-4 col-6 mb-3">
            <label for="lugar" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" aria-describedby="lugar" required>
          </div>
          <div class="col-xxl-2 xol-xl-2 col-lg-2 col-6 mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" id="anio" name="anio" aria-describedby="anio" required>
          </div>
        </div>
        <!-- TAGS -->
        <div class="alert alert-success">
          <h6 class="text-center">Etiquetas</h6>
          <div class="row px-3">
            <?php $get_tags = get_tags();
            while ($tags = mysqli_fetch_array($get_tags)) { ?>
              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="tags[]" value="<?= $tags['tag'] ?>"
                    id="color_red" />
                  <label class="form-check-label small" for="color_red">
                    <?= $tags['tag'] ?>
                  </label>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <!-- TAGS -->
        <div class="alert alert-warning">
          <div class="row align-items-end">
            <h6 class="text-center">Ejemplares</h6>
            <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
              <label for="ejemplares" class="form-label">Cantidad</label>
              <input type="number" class="form-control" id="ejemplares" name="ejemplares" aria-describedby="ejemplares"
                min="1" value="1" required>
            </div>
            <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
              <label for="inventario" class="form-label">Inventario inicial</label>
              <input type="number" class="form-control" id="inventario" name="inventario" aria-describedby="inventario"
                min="1" value="1" required>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-6 mb-3">
              <label for="estado" class="form-label">Estado</label>
              <select class="form-select" name="estado" id="estado" required>
                <?php $get_estados = get_estados();
                while ($row = mysqli_fetch_array($get_estados)) {
                  if ($row['id'] == 1) {
                    $selected = ' selected ';
                  } else {
                    $selected = '';
                  } ?>
                  <option value="<?= $row['id'] ?>" $selected>
                    <?= $row['descripcion'] ?>
                  </option>
                <?php }
                mysqli_data_seek($get_estados, 0);
                ?>
              </select>
            </div>
            <div class="col-xxl-3 xol-xl-3 col-lg-3 col-6 mb-3">
              <label for="fechaalta" class="form-label">Fecha Alta</label>
              <input type="date" class="form-control" id="fechaalta" name="fechaalta" aria-describedby="fechaalta"
                value="<?= $dt ?>" required>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-6 col-12 my-3 align-items-center">
            <button class="btn btn-success d-flex w-100 justify-content-center" type="submit" name="btn-cargar"><i class='bx bx-cloud-upload bx-sm me-2' ></i> Cargar libro y habilitar ejemplares</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>