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
            1ro 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ALBORNOZ MARIA EUGENIA</li>
                  <li class="list-group-item list-group-item-warning">BARRERA DELFINA ELUNEY </li>
                  <li class="list-group-item list-group-item-warning">BRAVO NICOLÁS MARTÍN</li>
                  <li class="list-group-item list-group-item-warning">BRIZUELA DARIO RUBEN</li>
                  <li class="list-group-item list-group-item-warning">CASTIGLIONI AEDO JULIETA</li>
                  <li class="list-group-item list-group-item-warning">FLORITO ARIEL IGNACIO</li>
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
                  <li class="list-group-item list-group-item-warning">MILLALEN AMANCAY ANTONELLA</li>
                  <li class="list-group-item list-group-item-warning">MILLANER CAMILA</li>
                  <li class="list-group-item list-group-item-warning">MUÑOZ MILAGROS AIEN</li>
                  <li class="list-group-item list-group-item-warning">MUÑOZ TAPIA GABRIEL ALEXANDER</li>
                  <li class="list-group-item list-group-item-warning">RATTI JUAN EMILIO</li>
                  <li class="list-group-item list-group-item-warning">REYES DIANA ANAHI</li>
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
                  <li class="list-group-item list-group-item-warning">ROJAS MAXIMILIANO LAUTARO</li>
                  <li class="list-group-item list-group-item-warning">SUAREZ NEHUEN JEREMIAS</li>
                  <li class="list-group-item list-group-item-warning">TAPIA MIA LORENA</li>
                  <li class="list-group-item list-group-item-warning">TORRES LARA MARTINA</li>
                  <li class="list-group-item list-group-item-warning">VALDEZ HERNANDEZ PAULA LILEN</li>
                  <li class="list-group-item list-group-item-warning">VALENCIA MAZZONI EMMA GUILLERMINA</li>
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
                  <li class="list-group-item list-group-item-warning">FUENTES TOLOSA SIMON AGUSTIN</li>
                  <li class="list-group-item list-group-item-warning">JORGE NICOLE SOFIA BELEN</li>
                  <li class="list-group-item list-group-item-warning">RIVAS JUAN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">RIVAS MATTEO ALEJANDRO</li>
                  <li class="list-group-item list-group-item-warning">VALIENTE BERTOLA EMILIANO JOAQUIN </li>
                  <li class="list-group-item list-group-item-warning">VAZQUEZ LOPEZ BRISA NADIN </li>
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