<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="informacionalumnos">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <div class="row">
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-receipt me-2'></i>MESAS DE ACREDITACIÓN
          </div>
          <div class="card-body p-0">
            <a href="../mesasdeexamen/" class="btn btn-success w-100 d-flex align-items-center justify-content-center h-100">
              <i class='bx bx-info-circle bx-sm px-2 py-2'></i> Información</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-receipt me-2'></i>MESAS DE ACREDITACIÓN
          </div>
          <div class="card-body p-0">
            <a href="../mesasdeexamen/vertrabajos.php" class="btn btn-success w-100 d-flex align-items-center justify-content-center  h-100">
              <i class='bx bx-book-reader px-2 bx-sm py-2'></i>Guías y trabajos prácticos</a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-happy me-2'></i>ACUERDOS DE CONVIVENCIA 2025
          </div>
          <div class="card-body p-0">
            <a class="btn btn-warning w-100 d-flex align-items-center justify-content-center h-100" href="../docentes/documentacion/AEC.pdf" target="_blank"> <i class='bx bx-book-reader px-2 bx-sm py-2'></i>Descargar acuerdos
            </a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-happy me-2'></i>REGLAMENTO DE TALLER 2026
          </div>
          <div class="card-body p-0">
            <a class="btn btn-warning w-100 d-flex align-items-center justify-content-center h-100" href="../docentes/documentacion/reglamento-taller.pdf" target="_blank"> <i class='bx bx-book-reader px-2 bx-sm py-2'></i>Descargar reglamento
            </a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-happy me-2'></i>ACUERDOS DE LABORATORIO 2026
          </div>
          <div class="card-body p-0">
            <a class="btn btn-warning w-100 d-flex align-items-center justify-content-center h-100" href="../docentes/documentacion/acuerdos_laboratorio.pdf" target="_blank"> <i class='bx bx-book-reader px-2 bx-sm py-2'></i>Descargar acuerdos
            </a>
          </div>
        </div>
      </div>
      <div class="col-6 col-xl-4 pb-3">
        <div class="card shadow mb-4 h-100">
          <div class="card-header text-bg-dark">
            <i class='bx bx-happy me-2'></i>REUNION DE PADRES INGRESANTES 2026
          </div>
          <div class="card-body p-0">
            <a class="btn btn-info w-100 d-flex align-items-center justify-content-center h-100" href="./documentacion/reunionpadresingresantes2026.pptx" target="_blank"> <i class='bx bx-book-reader px-2 bx-sm py-2'></i>Descargar presentación
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-12 my-3">
        <div class="card shadow rounded rounded  h-100">
          <div class="card-body bg-info bg-opacity-25">
            <p class="fw-semibold"><i class='bx bxs-pin me-2'></i>CARTELERA</p>
            <p>Anuncios para alumnos...</p>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-12 my-3">
        <div class="alert alert-success shadow p-3 mb-5 h-100">
          <ul class="list-group list-group-flush bg-transparent">
            <span class="py-2 fw-bold"><i class='bx bx-calendar me-3'></i>FECHAS</span>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Ciclo lectivo: 05 de Marzo al 19 de Diciembre de 2025</li>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Inicio de clases: 05/03</li>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Receso invernal: 07 al 18 de Julio de 2025</li>
          </ul>
          <br>
          <ul class="list-group list-group-flush bg-transparent">
            <span class="py-1 fw-semibold"><i class='bx bx-calendar me-3'></i>DURACIÓN DE CUATRIMESTRE:</span>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>1er Cuatrimestre: 05/03 al 04/07 </li>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>2do Cuatrimestre: 21/07 al 19/12 </li>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Periódo de complementación de saberes: del 01/12 al 15/12</li>
            <li class="list-group-item bg-transparent"> <i class='bx bx-check me-3'></i>Mesa de previos, libres y terminales: del 09/12 al 15/12</li>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>