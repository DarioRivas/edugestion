<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="informacionlaboratorio">
  <header>
    <i class='bx bxs-vial'></i> Laboratorio
  </header>
  <div>
    <div class="card shadow">
      <div class="card-header text-bg-dark d-flex align-items-center"><i class='bx bxs-hand me-2'></i>ASISTENCIA</div>
      <div class="card-body">
        <div class="row align-items-center text-center">
          <div class="col-lg-2 col-6">
            <h4 class="text-success fw-semibold small">mañana</h4>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1gRRETRfeMMBFHFnkZbJt2XSjIjE-fABgCbwFPmbiIlo/edit?usp=sharing" class="btn btn-success w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Lunes</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1FZgHYuR1lQTCy-DlGPzIODpdcTCfdX6h7uYYsk1VjF4/edit?usp=sharing" class="btn btn-success w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Martes</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1YEcYzWkdcCElzNQk58A3fc0OXHKnvOWpmXo01eeacHQ/edit?usp=sharing" class="btn btn-success w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Miercoles</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1IfGn9SBdSmZEEgKgVF9rPoSO2qJqOpItb_vCEzIaR5o/edit?usp=sharing" class="btn btn-success w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Jueves</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1MgZn2tH8y7UcROJHt1xZvkihaWYhBx9eL2QNMxW4uts/edit?usp=sharing" class="btn btn-success w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Viernes</a>
          </div>
        </div>
        <hr>
        <div class="row align-items-center text-center">
          <div class="col-lg-2 col-6">
            <h4 class="text-info fw-semibold small">tarde</h4>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1q5RbsDNPM25LBxbJ_P-X6JDWky8addvCzPqpeZFV5HQ/edit?usp=sharing" class="btn btn-info w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Lunes</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1SecKtgx4QjsbvEIMduljBSM9RnueTAsMAkRtLIdbzss/edit?usp=sharing" class="btn btn-info w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Martes</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1xGaVZiGjZ_437XRle1ZhstvUS8jsA4LxJLUue1LnSC0/edit?usp=sharing" class="btn btn-info w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Miercoles</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1QUKLoRNe5bClNE5do09fqoBKT_iR8Ij7Mcd79GWbYNE/edit?usp=sharing" class="btn btn-info w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Jueves</a>
          </div>
          <div class="col-lg-2 col-6">
            <a href="https://docs.google.com/spreadsheets/d/1qR0ZfO_mMviJLHwwxtWJQvn0xj9DC-5VJ_MNWqteJgw/edit?usp=sharing" class="btn btn-info w-100 mb-3 fs-5 py-3 fw-semibold" target="_blank">Viernes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>