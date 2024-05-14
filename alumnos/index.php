<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

?>
<main label="informacionalumnos">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-md-6 col-12 mt-3">
        <div class="card shadow p-3 rounded mb-4">
          <h5>Mesas de examen</h5>
          <div class="alert alert-danger text-center">
            <p><a href="../mesasdeexamen/" class="btn btn-danger"><i class='bx bx-info-circle'></i> Información sobre de
                mesas de exámen</a></p>
            <p><a href="../mesasdeexamen/vertrabajos.php" class="btn btn-danger"><i class='bx bx-book-reader'></i> Ver
                guías y trabajos prácticos</a></p>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-md-6 col-12 mt-3">
        <div class="card shadow p-3 rounded mb-4">
          <h5>Cartelera</h5>
          <div class="alert alert-success text-center">
            <p>Anuncios para alumnos</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card shadow p-3 rounded h-100">
      <h5>Efemérides Mayo</h5>
      <div class="alert alert-warning">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>01/05 - Día del/la
            Trabajador/a. </li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>08/05 - Día Nacional de
            la Lucha Contra la Violencia Institucional. (Ley 26811 – Res. CFE Nº 189/12).</li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>11/05 - Día del Himno
            Nacional Argentino.
          </li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>17/05 - Día Provincial
            contra la Discriminación por
            Orientación Sexual e Identidad de Género (Ley 5132).
          </li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>18/05 - Día de la
            Escarapela.</li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>21/05 - Día Mundial de la
            Diversidad Cultural.</li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>23/05 - Día del
            Trabajador/a de la Educación.
            Conmemoración de la Marcha Blanca de 1988.
            -Día Nacional del Cine.</li>
          <li class="list-group-item list-group-item-warning"> <i class='bx bx-check me-3'></i>28/05 - Día Nacional del
            Docente de Nivel Inicial
            (Ley 27059).</li>
        </ul>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>