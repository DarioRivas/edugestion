<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");

?>
<main label="horarioedufisica">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
    <section class="text-center mb-3">
    <h5>ASISTENCIA</h5>
  </section>
  <section>    
    <div class="card shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-xl col-12 my-1">
            <a href="https://docs.google.com/spreadsheets/d/1Aq6Vio811kw1X12qcyff7aOP9HSX9aaLCocZ9cZhGr0/edit?usp=drive_link" class="btn btn-success w-100 fw-semibold" target="_blank">LUNES</a>
          </div>
          <div class="col-xl col-12 my-1">
            <a href="https://docs.google.com/spreadsheets/d/1FJ_5EbrRitxKBsIQb9YYa6BpakXrgvdVDUOf01iDyCQ/edit?usp=drive_link" class="btn btn-success w-100 fw-semibold" target="_blank">MARTES</a>
          </div>
          <div class="col-xl col-12 my-1">
            <a href="https://docs.google.com/spreadsheets/d/1MMBZFWfmkm8d8g4Nm4onKxdO5Q-DsrWMUv8_xcQg3DM/edit?usp=drive_link" class="btn btn-success w-100 fw-semibold" target="_blank">MIERCOLES</a>
          </div>
          <div class="col-xl col-12 my-1">
            <a href="https://docs.google.com/spreadsheets/d/1CDFsjG3rV17RIBHqupaeuxgoUPP7AaU15L1n4iEUNnE/edit?usp=drive_link" class="btn btn-success w-100 fw-semibold" target="_blank">JUEVES</a>
          </div>
          <div class="col-xl col-12 my-1">
            <a href="https://docs.google.com/spreadsheets/d/1HpTAKgJp0kVWxkoGhf4TQYlyJuzbT1Bef2c7g7fNLWU/edit?usp=drive_link" class="btn btn-success w-100 fw-semibold  " target="_blank">VIERNES</a>
          </div>
        </div>
      </div>
  </section>
  <hr>
  <section class="text-center mb-3">
    <h5>HORARIOS</h5>
  </section>
  <section>
    <div class="row my-2 text-center">
      <p class="fw-semibold fs-4">TURNO MAÑANA</p>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">LUNES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>8 a 10hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>PEREYRA M.</div>
            <div>ID 1105</div>
            <div>5to 3ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>10 a 12hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LUNA</div>
            <div>ID 1041</div>
            <div>6to 2da TT</div>
          </div>
          <hr>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">MARTES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>8 a 10hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>- - - -</div>
            <div>ID 967</div>
            <div>5° 1ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>10 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>PORTILLO</div>
            <div>ID 704</div>
            <div>2° 2da TT</div>
          </div>
          <hr>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">MIERCOLES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>8 a 10hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>LAGOS L.</div>
            <div>ID 622</div>
            <div>3° 2da TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>10 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>GUARDA</div>
            <div>ID 780</div>
            <div>3° 1ra TT</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">JUEVES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>8 a 10hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>AGUAYO</div>
            <div>ID 852</div>
            <div>3° 1ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>10 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>AGUAYO</div>
            <div>ID 929</div>
            <div>6° 1ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>11:30 a 12:30hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>GIMENEZ</div>
            <div>ID 703</div>
            <div>2° 1ra TT</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">VIERNES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>8 a 10hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>- - - -</div>
            <div>ID 1054</div>
            <div>1° 1ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>10 a 12hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>- - - -</div>
            <div>ID 1029</div>
            <div>2° 1ra TT</div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>11:30 a 12:30hs</div>
            <div><i class='bx bxs-user me-2 text-success'></i>GIMENEZ</div>
            <div>ID 703</div>
            <div>2° 1ra TT</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr><br>
  <section>
    <div class="row my-2 text-center">
      <p class="fw-semibold fs-4">TURNO TARDE</p>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">LUNES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>13:30 a 15:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LUNA</div>
            <div>ID 1005</div>
            <div>6to 3ra TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>15:30 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LUNA</div>
            <div>ID 598</div>
            <div>1° 2da TM </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">MARTES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>13:30 a 15:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>TORRES </div>
            <div>ID 744</div>
            <div>3° 2da TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>15:30 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>TORRES</div>
            <div>ID 680 </div>
            <div>2° 2da TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>17:30 a 18:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>- - - - </div>
            <div>ID 1093 </div>
            <div>5° 2da TM </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">MIERCOLES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>13:30 a 15:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>REYES </div>
            <div>ID 743 </div>
            <div>3° 1ra TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>15:30 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LUNA </div>
            <div>ID 877 </div>
            <div>5° 1ra TM </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">JUEVES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>13:30 a 15:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>NIEVAS </div>
            <div>ID 839 </div>
            <div>4° 2da TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>15:30 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>PEDRASA E. </div>
            <div>ID 826 </div>
            <div>4° 1ra TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>17:30 a 18:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>- - - - </div>
            <div>ID 1093 </div>
            <div>3° 2da TM </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl mb-3">
        <div class="card shadow">
          <div class="card-header bg-dark text-white">VIERNES</div>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>13:30 a 15:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LAGOS S.</div>
            <div>ID 679</div>
            <div>2° 1ra TM </div>
          </div>
          <hr>
          <div class="row my-2">
            <div><i class='bx bx-time-five me-2'></i>15:30 a 17:30hs </div>
            <div><i class='bx bxs-user me-2 text-success'></i>LAGOS S. </div>
            <div>ID 597 </div>
            <div>1° 1ra TM </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>