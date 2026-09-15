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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ABELDAÑO MILLACURA DARIO </li>
                  <li class="list-group-item list-group-item-warning">AGUIRRE ERIC MATEO JOAQUIN</li>
                  <li class="list-group-item list-group-item-warning">AUSEJO SANTINO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">BARRIA SANTIAGO ABDIAS</li>
                  <li class="list-group-item list-group-item-warning">CANO ALEXANDER DANIEL</li>
                  <li class="list-group-item list-group-item-warning">CARRASCO SIOMARA CANDELA</li>
                  <li class="list-group-item list-group-item-warning">CARRERA LUZ AINARA</li>
                  <li class="list-group-item list-group-item-warning">CASTIGLIONI ZOE ISABELLA</li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">CASTRO BIANCA VALENTINA</li>
                  <li class="list-group-item list-group-item-warning">CERDA FERRERO CATALINA</li>
                  <li class="list-group-item list-group-item-warning">CONTRERAS CONDORI RODRIGO</li>
                  <li class="list-group-item list-group-item-warning">DIAZ LEDESMA AMPARO</li>
                  <li class="list-group-item list-group-item-warning">DURAN RADONICH LIS</li>
                  <li class="list-group-item list-group-item-warning">FRANCO ESPINDOLA MICHEL MAICOL</li>
                  <li class="list-group-item list-group-item-warning">GIGENA DYLAN ANDRÉS</li>
                  <li class="list-group-item list-group-item-warning">GUERRA FLORES HELEN MAGDALENA </li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">HUENTEN ERIC ESTEBAN ISMAEL</li>
                  <li class="list-group-item list-group-item-warning">ISSICH AYERBE YAQUELIN INÉS</li>
                  <li class="list-group-item list-group-item-warning">KITTLER EMANUEL DEMETRIO</li>
                  <li class="list-group-item list-group-item-warning">MACEIRAS THIAGO RODOLFO</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ MAXIMO TOMÁS</li>
                  <li class="list-group-item list-group-item-warning">MILLA MATHEO ADRIAN</li>
                  <li class="list-group-item list-group-item-warning">NAVARRETE GUADALUPE LUZIA</li>
                  <li class="list-group-item list-group-item-warning">ORELLANA SANTIAGO NAHUEL</li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">SAEZ KUNZ JOAQUIN ESTEBAN</li>
                  <li class="list-group-item list-group-item-warning">SANDOVAL VICTOR EXEQUIEL</li>
                  <li class="list-group-item list-group-item-warning">THACHEK NICOL JASMIN</li>
                  <li class="list-group-item list-group-item-warning">TILLERIA ENZO IVAN</li>
                  <li class="list-group-item list-group-item-warning">TRECANAO FUENTES LUANA AGUSTINA</li>
                  <li class="list-group-item list-group-item-warning">TUCO TRUJILLO JOSELYN GLADYS</li>
                  <li class="list-group-item list-group-item-warning">VEGA NAHIARA JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">ZUÑIGA DARIEN IAN</li>
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