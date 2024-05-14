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
        <h5>Grupos y Horarios de Segundo Año</h5>
        <div class="card shadow rounded my-3">
          <div class="card-header">
            2do 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ALBORNOZ JEREMIAS ESTEBAN</li>
                  <li class="list-group-item list-group-item-warning">FERNANDEZ D'AMICO MATIAS </li>
                  <li class="list-group-item list-group-item-warning">LOPEZ FRANCISCOVICH MATEO L</li>
                  <li class="list-group-item list-group-item-warning">BERATZ CATALINA</li>
                  <li class="list-group-item list-group-item-warning">BORAS PAULINA</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA JULIETA VALENTINA</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Ajuste > 20/03 - 03/05</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 06/05 - 21/06</li>
                  <li class="list-group-item list-group-item-info">Ajuste Mecanizado > 24/06 - 23/08</li>
                  <li class="list-group-item list-group-item-info">Herrería y Soldadura > 26/08 - 11/10</li>
                  <li class="list-group-item list-group-item-info">Informática > 14/10 - 29/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          2do 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">BRAVO VALENTIN FEDERICO</li>
                  <li class="list-group-item list-group-item-warning">BUSTAMANTE BAIGORRIA BAUTISTA B</li>
                  <li class="list-group-item list-group-item-warning">CARRASCO LAUTARO DAVID</li>
                  <li class="list-group-item list-group-item-warning">CERDA FERRERO CAMILO</li>
                  <li class="list-group-item list-group-item-warning">CORREA THIAGO DYLAN</li>
                  <li class="list-group-item list-group-item-warning">ESPARZA BENJAMIN</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Electricidad > 20/03 - 03/05</li>
                  <li class="list-group-item list-group-item-info">Ajuste Mecanizado > 06/05 - 21/06</li>
                  <li class="list-group-item list-group-item-info">Herrería y Soldadura > 24/06 - 23/08</li>
                  <li class="list-group-item list-group-item-info">Informática > 26/08 - 11/10</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 14/10 - 29/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          2do 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">BASTIAS LAUTARO SEBASTIAN</li>
                  <li class="list-group-item list-group-item-warning">FREYRE PONCE AILIN ELUNEY</li>
                  <li class="list-group-item list-group-item-warning">GUASCO STEFANO BAUTISTA</li>
                  <li class="list-group-item list-group-item-warning">IGLESIAS TOBIAS</li>
                  <li class="list-group-item list-group-item-warning">LEFIÑANCO SANTIAGO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">MENDOZA BEGBEDER AGUSTINA</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Ajuste Mecanizado > 20/03 - 03/05</li>
                  <li class="list-group-item list-group-item-info">Herrería y Soldadura > 06/05 - 21/06</li>
                  <li class="list-group-item list-group-item-info">Informática > 24/06 - 23/08</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 26/08 - 11/10</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 14/10 - 29/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          2do 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">MELIVILO TEO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">BECHER MATIAS EZEQUIEL</li>
                  <li class="list-group-item list-group-item-warning">MILLANER LIONEL</li>
                  <li class="list-group-item list-group-item-warning">NARVAEZ MALENA ABRIL</li>
                  <li class="list-group-item list-group-item-warning">ORREGO MENDOZA LUZMILA A</li>
                  <li class="list-group-item list-group-item-warning">RAMOS TAMBORINI ABRIL E</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Herrería y Soldadura > 20/03 - 03/05</li>
                  <li class="list-group-item list-group-item-info">Informática > 06/05 - 21/06</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 24/06 - 23/08</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 26/08 - 11/10</li>
                  <li class="list-group-item list-group-item-info">Ajuste Mecanizado > 14/10 - 29/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          2do 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">SANTOS ANGELINA NOEMI</li>
                  <li class="list-group-item list-group-item-warning">BOZAK TIZIANO ALEJO</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA MATIAS ADRIANO</li>
                  <li class="list-group-item list-group-item-warning">SZUMAÑSKI IGNACIO THOMÁS</li>
                  <li class="list-group-item list-group-item-warning">TORRESI LEANDRO ADRIÁN</li>
                  <li class="list-group-item list-group-item-warning">VALENTE MARCO</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Informática > 20/03 - 03/05</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 06/05 - 21/06</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 24/06 - 23/08</li>
                  <li class="list-group-item list-group-item-info">Ajuste Mecanizado > 26/08 - 11/10</li>
                  <li class="list-group-item list-group-item-info">Herrería y Soldadura > 14/10 - 29/11</li>
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