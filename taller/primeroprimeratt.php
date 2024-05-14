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
                  <li class="list-group-item list-group-item-warning">AGUERO MELANIE JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">ALFARO MARTINA</li>
                  <li class="list-group-item list-group-item-warning">AVARESE RODRIGUEZ OLIVIA PILAR</li>
                  <li class="list-group-item list-group-item-warning">BARRERA ANGEL VALENTIN</li>
                  <li class="list-group-item list-group-item-warning">CARIMAN GONZALO DAMIAN</li>
                  <li class="list-group-item list-group-item-warning">CASTILLO FRANCO AGUSTÍN</li>
                  <li class="list-group-item list-group-item-warning">CERVELO MIA ABIGAIL</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Ajuste > 20/03 - 17/05</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 20/05 - 05/07</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 22/07 - 04/10</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 07/10 - 30/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          1ro 1ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">ACUÑA JOAQUIN</li>
                  <li class="list-group-item list-group-item-warning">CONTINANZA ZAIRA ARIANA SOLEDAD</li>
                  <li class="list-group-item list-group-item-warning">CORTEZ JOAQUIN</li>
                  <li class="list-group-item list-group-item-warning">DI PAULA LAUTARO DANIEL</li>
                  <li class="list-group-item list-group-item-warning">GIGENA DYLAN ANDRÉS</li>
                  <li class="list-group-item list-group-item-warning">GONZALEZ MIQUEAS ELUEN</li>
                  <li class="list-group-item list-group-item-warning">GUZMAN BARGAS NATANAEL EMILIANO</li>
                  <li class="list-group-item list-group-item-warning">JARA AGOSTINA  ANTONELLA</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Electricidad > 20/03 - 17/05</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 20/05 - 05/07</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 22/07 - 04/10</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 07/10 - 30/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          1ro 1ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">LOPEZ CONDORI JAZMIN DAIANA</li>
                  <li class="list-group-item list-group-item-warning">MARCANIO MELANI ROCÍO</li>
                  <li class="list-group-item list-group-item-warning">MONTELPARE BERON MALENA JOSEFINA</li>
                  <li class="list-group-item list-group-item-warning">MONTUPIL XIOMARA MILAGROS JACINTA</li>
                  <li class="list-group-item list-group-item-warning">MOSCHETTANI IGNACIO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">NAVARRETE ALEJO EFRAIN</li>
                  <li class="list-group-item list-group-item-warning">RUIZ LAILA</li>
                  <li class="list-group-item list-group-item-warning">PORFIRIO TOMÁS</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Carpintería > 20/03 - 17/05</li>
                  <li class="list-group-item list-group-item-info">Hojalatería > 20/05 - 05/07</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 22/07 - 04/10</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 07/10 - 30/11</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow rounded my-3">
          <div class="card-header">
          1ro 1ra TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">RUIZ JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">SALAZAR JULIAN RAIM</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA SOLORZA ELIAS SEBASTIAN</li>
                  <li class="list-group-item list-group-item-warning">SUAREZ JULIETA GUADALUPE</li>
                  <li class="list-group-item list-group-item-warning">TAPIA SELENA AILIN</li>
                  <li class="list-group-item list-group-item-warning">TAPIA ZAIRA LORENA</li>
                  <li class="list-group-item list-group-item-warning">VECCHIO LUANA MICAELA</li>
                  <li class="list-group-item list-group-item-warning">VILLEGAS FLORES SHARY ROUSSE</li>
                </ul>
              </div>
              <div class="col-xl-6 col-12">
                <ul class="list-group mt-2 small">
                  Rotaciones
                  <li class="list-group-item list-group-item-info">Hojalatería > 20/03 - 17/05</li>
                  <li class="list-group-item list-group-item-info">Ajuste > 20/05 - 05/07</li>
                  <li class="list-group-item list-group-item-info">Electricidad > 22/07 - 04/10</li>
                  <li class="list-group-item list-group-item-info">Carpintería > 07/10 - 30/11</li>
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