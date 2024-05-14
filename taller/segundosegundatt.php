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
            2do 2da y 2do 3ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ARCE TICIANO JOEL</li>
                  <li class="list-group-item list-group-item-warning">BRUSAIN NAZARENO MAXIMILIANO</li>
                  <li class="list-group-item list-group-item-warning">CABEZAS FERNANDEZ ALUHE NAHIARA</li>
                  <li class="list-group-item list-group-item-warning">CALFUPAN ARRIBILLAGA SABRINA ABIGAIL</li>
                  <li class="list-group-item list-group-item-warning">CAMPOS FLORENCIA NICOLE</li>
                  <li class="list-group-item list-group-item-warning">CERDA XIOMARA</li>
                  <li class="list-group-item list-group-item-warning">CONDORI HUAYGUA JUAN PABLO</li>
                  <li class="list-group-item list-group-item-warning">CORI IMPA AYELEN CELESTE</li>
                  <li class="list-group-item list-group-item-warning">ENRIQUEZ IGNACIO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">GARRIDO MORENO JOSE BENJAMIN</li>
                </ul>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
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
            2do 2da TT y 2do 3ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ESPEJO LAKSHMI INGRID</li>
                  <li class="list-group-item list-group-item-warning">FRANCO MIA VALENTINA</li>
                  <li class="list-group-item list-group-item-warning">GIGENA THIAGO EMILIANO</li>
                  <li class="list-group-item list-group-item-warning">GUERRERO FIGUEROA LEILA MAILEN</li>
                  <li class="list-group-item list-group-item-warning">MONTECINO MARÍA SOL</li>
                  <li class="list-group-item list-group-item-warning">MUÑOZ LEANDRO GABRIEL</li>
                  <li class="list-group-item list-group-item-warning">SACCO YULIANA JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">SOTO ROJAS BRAIAN LUIS</li>
                  <li class="list-group-item list-group-item-warning">VALLEJOS LUISANA ISABELLA</li>
                  <li class="list-group-item list-group-item-warning">VILLAGRA GUADALUPE SOL</li>
                  <li class="list-group-item list-group-item-warning">VILLAGRA ANGELINA DENIS</li>

                </ul>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
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
            2do 2da TT y 2do 3ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">BRIDI VALENTINO</li>
                  <li class="list-group-item list-group-item-warning">GALERA JOAQUIN ANTONY</li>
                  <li class="list-group-item list-group-item-warning">HEREDIA MARCOS AGUSTIN</li>
                  <li class="list-group-item list-group-item-warning">KUNZ PABLO OTONIEL</li>
                  <li class="list-group-item list-group-item-warning">NICOLINI VALENTINA ANTONELLA</li>
                  <li class="list-group-item list-group-item-warning">ORREGO JOAQUIN EZEQUIEL</li>
                  <li class="list-group-item list-group-item-warning">PUENTES JERÓNIMO ARÓN</li>
                  <li class="list-group-item list-group-item-warning">RIPA NICOL ABRIL</li>
                  <li class="list-group-item list-group-item-warning">RIVERO FERNANDA DANIELA</li>
                  <li class="list-group-item list-group-item-warning">SALGADO BENJAMIN ANDRES</li>
                </ul>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
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
            2do 2da TT y 2do 3ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">CAMPOS JULIO EZEQUIEL</li>
                  <li class="list-group-item list-group-item-warning">CANALES TOMAS</li>
                  <li class="list-group-item list-group-item-warning">CANTUNEZ FEDERICO ARON</li>
                  <li class="list-group-item list-group-item-warning">FLORES SERGIO ALBERTO</li>
                  <li class="list-group-item list-group-item-warning">JELDREZ ARIADNA AGUSTINA</li>
                  <li class="list-group-item list-group-item-warning">MARIGUAN MORENA</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ CUBA FELICIDAD</li>
                  <li class="list-group-item list-group-item-warning">MUÑOZ VILLAGRA TIARA MALEN</li>
                  <li class="list-group-item list-group-item-warning">PACO TICONA LIMBER</li>
                  <li class="list-group-item list-group-item-warning">RAIMAN SANTINO NICOLAS</li>
                </ul>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
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
            2do 2da TT y 2do 3ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">FRANCO DAIRA AYTARA</li>
                  <li class="list-group-item list-group-item-warning">RIVAS CANDELARIA YAEL</li>
                  <li class="list-group-item list-group-item-warning">RIVERO GUTIERREZ SANTIAGO</li>
                  <li class="list-group-item list-group-item-warning">RODRIGUEZ TEJERINA AYELEN</li>
                  <li class="list-group-item list-group-item-warning">SAEZ KUNZ BRUNELLA SOLEDAD</li>
                  <li class="list-group-item list-group-item-warning">SUAREZ ZAIRA NAOMI</li>
                  <li class="list-group-item list-group-item-warning">VALDEZ HERNANDEZ LUANA ELUNEY</li>
                  <li class="list-group-item list-group-item-warning">VARELA JULIET</li>
                  <li class="list-group-item list-group-item-warning">VEGA SAMIRA</li>
                  <li class="list-group-item list-group-item-warning">VELIZ FLORES LUIS FERNANDO</li>
                  <li class="list-group-item list-group-item-warning">VILLAR RIFFO MATEO EZEQUIEL</li>
                </ul>
              </div>
              <div class="col-xl-6 col-lg-6 col-12">
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