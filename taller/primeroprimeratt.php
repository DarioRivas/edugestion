<?php
define('ROOT_DIR', '../');
include (ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include (ROOT_DIR . "_includes/db.php");
require_once (ROOT_DIR . "_includes/header.php");
require_once (ROOT_DIR . "_includes/sidebar.php");

?>
<main label="grupos">
  <header>
    <i class='bx bx-wrench'></i> Taller
  </header>
  <section>
    <header>
      <div class="text-center">
        <div class="row">
          <div class="col-2 text-success"><a href="grupos.php" class="d-flex"><i
                class='bx bx-chevrons-left bx-sm'></i><span>volver</span></a>
          </div>
        </div>
        <h5>Grupos y Horarios de Primer Año</h5>
        <div class="card shadow rounded my-3">
          <div class="card-header">
            1ro 1ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ACUÑA LEILA SOL</li>
                  <li class="list-group-item list-group-item-warning">AVILES RAMIRO ISMAEL </li>
                  <li class="list-group-item list-group-item-warning">CARDENAS LUANA LUJAN</li>
                  <li class="list-group-item list-group-item-warning">CASTRO VALENTIN URIEL</li>
                  <li class="list-group-item list-group-item-warning">CONTINANZA ZAIRA ARIANA SOLEDADA</li>
                  <li class="list-group-item list-group-item-warning">CRESPO LAUTARO EMANUEL</li>
                  <li class="list-group-item list-group-item-warning">DIAZ VALENTINA ROCIO</li>
                  <li class="list-group-item list-group-item-warning">FERNANDEZ CELIZ REBECA</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Electricidad > 06/03 - 02/05</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 05/05 - 04/07</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 21/07 - 26/09</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 30/09 - 28/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
            1ro 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">FREYRES MALENNA ELISA</li>
                  <li class="list-group-item list-group-item-warning">GOMEZ ISAIAS ALEJANDRO</li>
                  <li class="list-group-item list-group-item-warning">HEVIA CASTAÑO MILENA</li>
                  <li class="list-group-item list-group-item-warning">HUECHE BENJAMIN MIGUEL</li>
                  <li class="list-group-item list-group-item-warning">JANCKO VALVERDE JHON ERIK</li>
                  <li class="list-group-item list-group-item-warning">LARENAS MIA BELEN</li>
                  <li class="list-group-item list-group-item-warning">LEON DAIRA MERIS</li>
                  <li class="list-group-item list-group-item-warning">LOPEZ CONDORI RUTH JIMENA</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Carpintería > 06/03 - 02/05</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 05/05 - 04/07</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 21/07 - 26/09</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 30/09 - 28/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
            1ro 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">MIRANDA CARDOZO EMANUEL AXEL</li>
                  <li class="list-group-item list-group-item-warning">RAMÍREZ THIAGO ANDRÉS</li>
                  <li class="list-group-item list-group-item-warning">SAN MARTIN NASIRA ELINA NELIDA</li>
                  <li class="list-group-item list-group-item-warning">SANHUEZA GIULIANA</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA AILIN ESTEFANIA</li>
                  <li class="list-group-item list-group-item-warning">SILVA AXEL IVAN</li>
                  <li class="list-group-item list-group-item-warning">SOTO ZENTENO JUAN DANIEL</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Hojalatería > 06/03 - 02/05</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 05/05 - 04/07</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 21/07 - 26/09</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 30/09 - 28/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
            1ro 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">TROPAN TIZIANO NAHUEL</li>
                  <li class="list-group-item list-group-item-warning">VAZQUEZ DAMARIS MIKAYLA</li>
                  <li class="list-group-item list-group-item-warning">VIEDMA JULIETA LILEN </li>
                  <li class="list-group-item list-group-item-warning">VILA SOTO JOAQUIN ANDRÉ </li>
                  <li class="list-group-item list-group-item-warning">WOLF NICOLE SOLANGE </li>
                  <li class="list-group-item list-group-item-warning">MATUS DAVID IGNACIO </li>
                  <li class="list-group-item list-group-item-warning">TOLA QUIQUISANI NEYMAR </li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Ajuste > 06/03 - 02/05</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 05/05 - 04/07</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 21/07 - 26/09</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 30/09 - 28/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once (ROOT_DIR . '_includes/footer.php') ?>