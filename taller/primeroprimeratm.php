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
            1ro 1ra TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ALFONZO RUIZ CONSTANZA</li>
                  <li class="list-group-item list-group-item-warning">ALVAREZ OSSES VALENTINA AVRIL </li>
                  <li class="list-group-item list-group-item-warning">ARELLANO DANIELA ALDANA</li>
                  <li class="list-group-item list-group-item-warning">BUSTOS BENJAMÍN</li>
                  <li class="list-group-item list-group-item-warning">CARRA NOAH ISABELLA</li>
                  <li class="list-group-item list-group-item-warning">CIDES SEBASTIAN EZEQUIEL</li>
                  <li class="list-group-item list-group-item-warning">COFRE JUAN CRUZ</li>
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
                  <li class="list-group-item list-group-item-warning">JAEGER MATIAS ISAAC</li>
                  <li class="list-group-item list-group-item-warning">JARAMILLO LUISANA</li>
                  <li class="list-group-item list-group-item-warning">JOHANSEN CLARA LEIRA</li>
                  <li class="list-group-item list-group-item-warning">NAVARRETE JEREMIAS JONAS</li>
                  <li class="list-group-item list-group-item-warning">NICOSIA LIBERATORE BIANCA</li>
                  <li class="list-group-item list-group-item-warning">OLIVARES RIVEROS FIORELLA AGUSTINA</li>
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
                  <li class="list-group-item list-group-item-warning">RIVERO DELFINA MORENA</li>
                  <li class="list-group-item list-group-item-warning">SANCHEZ ARANCIBIA RENZO</li>
                  <li class="list-group-item list-group-item-warning">SANCHEZ TIZIANO MARTIN</li>
                  <li class="list-group-item list-group-item-warning">SERER FACUNDO SEBASTIAN</li>
                  <li class="list-group-item list-group-item-warning">SIFUENTES DYLAN ALEXANDER</li>
                  <li class="list-group-item list-group-item-warning">SIGLIANO SANTIAGO MARTIN</li>
                  <li class="list-group-item list-group-item-warning">SILVA DE LA VEGA MATEO JOAQUIN</li>
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
                  <li class="list-group-item list-group-item-warning">VONGSA EVANGELINA ALISONS</li>
                  <li class="list-group-item list-group-item-warning">FIGUEROA SANTINO</li>
                  <li class="list-group-item list-group-item-warning">POBLETTE PAULA GUADALUPE </li>
                  <li class="list-group-item list-group-item-warning">REMIREZ MORENA JAZMIN </li>
                  <li class="list-group-item list-group-item-warning">TOMAS LAUTARO </li>
                  <li class="list-group-item list-group-item-warning">VELIZ FLORES WILLIAMS </li>
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