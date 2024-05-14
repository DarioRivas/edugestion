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
            2do 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ALVIAL CAÑICUL NICOLE ALEXANDRA</li>
                  <li class="list-group-item list-group-item-warning">ASTROZA BRISA LUJAN</li>
                  <li class="list-group-item list-group-item-warning">ASTROZA SALAZAR MARINA JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">BESTVATER GISEL LUCIA</li>
                  <li class="list-group-item list-group-item-warning">CASTILLO CATALAN UMA</li>
                  <li class="list-group-item list-group-item-warning">CASTILLO NAHIARA ELUNEY</li>
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
          2do 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">FUENTEALBA CANDELARIA MARISEL</li>
                  <li class="list-group-item list-group-item-warning">FUENTES MARCELO  AGUSTÍN</li>
                  <li class="list-group-item list-group-item-warning">JARA BRANDON GABRIEL</li>
                  <li class="list-group-item list-group-item-warning">LEIVA LUZ MORENA</li>
                  <li class="list-group-item list-group-item-warning">LOPEZ DAMIAN MAURICIO</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ DAIARA</li>
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
          2do 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">MILLAR TAPIA MARIANO TAYEL</li>
                  <li class="list-group-item list-group-item-warning">MONSALVES ROCIO SABRINA</li>
                  <li class="list-group-item list-group-item-warning">NAVARRETE VALENTINA JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">OLAVE SAIRA CANDELA</li>
                  <li class="list-group-item list-group-item-warning">PALMA TAHIEL ARIAN</li>
                  <li class="list-group-item list-group-item-warning">ROJAS BENJAMIN EMANUEL</li>
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
          2do 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">SERER BRUNO ARIEL</li>
                  <li class="list-group-item list-group-item-warning">SUAREZ MAXIMO NICOLAS</li>
                  <li class="list-group-item list-group-item-warning">TODERO HEVIA ORNELLA</li>
                  <li class="list-group-item list-group-item-warning">YOIRIS LEON</li>
                  <li class="list-group-item list-group-item-warning">YUPANQUI VILCAPOMA GISELA A</li>
                  <li class="list-group-item list-group-item-warning">ZARATE CATANZARO JULIETA AIMÉE</li>
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
          2do 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ZIBANA ADARO NAIM NICOLAS</li>
                  <li class="list-group-item list-group-item-warning">SALINAS MOLINA RAMIRO ALEXIS</li>
                  <li class="list-group-item list-group-item-warning">VONGSA JAZMIN LUCIA</li>
                  <li class="list-group-item list-group-item-warning">FORESTIER SELENE</li>
                  <li class="list-group-item list-group-item-warning">MILLAÑIR ORREGO THIAGO MIGUEL</li>
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