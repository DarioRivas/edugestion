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
                  <li class="list-group-item list-group-item-warning">AGUILERA LEO VALENTINO</li>
                  <li class="list-group-item list-group-item-warning">CANO MAIZARES LUCAS LIMBER</li>
                  <li class="list-group-item list-group-item-warning">CARDENAS LEONEL EDUARDO</li>
                  <li class="list-group-item list-group-item-warning">CASTILLO LAZARO MATEO</li>
                  <li class="list-group-item list-group-item-warning">CASTRO MATIAS JAVIER</li>
                  <li class="list-group-item list-group-item-warning">CONDORI CAMILA AILEN</li>
                  <li class="list-group-item list-group-item-warning">CORBO ZILKER JOSE DAVID</li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">CURAQUEO ENZO VALENTINO</li>
                  <li class="list-group-item list-group-item-warning">DEZA CASTIGLIONI ULISES</li>
                  <li class="list-group-item list-group-item-warning">FRANCO ESPINDOLA MICHEL MAICOL</li>
                  <li class="list-group-item list-group-item-warning">GUZMAN BENJAMIN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">HUARACÁN CIELO NAHIARA YANET</li>
                  <li class="list-group-item list-group-item-warning">ORELLANA SANTIAGO NAHUEL</li>
                  <li class="list-group-item list-group-item-warning">MACEIRAS THIAGO RODOLFO</li>
                  <li class="list-group-item list-group-item-warning">ALONSO ÁLVAREZ SIMÓN </li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">MARCHANT PEDRERO THIAGO BENJAMIN</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ CACERES JOEL</li>
                  <li class="list-group-item list-group-item-warning">MELO JOAQUIN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">MILLACURA SAHIRA LUZMILA</li>
                  <li class="list-group-item list-group-item-warning">MOSCOSO GIMENEZ KIARA NICOLE</li>
                  <li class="list-group-item list-group-item-warning">IMPA FLORES CLIVER ADALI</li>
                  <li class="list-group-item list-group-item-warning">PEREZ JOSE AGUSTIN</li>
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
          1ro 2da TT - 08:00 a 11:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">PINO DASHA GRETEL</li>
                  <li class="list-group-item list-group-item-warning">RAMÍREZ THIAGO ANDRÉS</li>
                  <li class="list-group-item list-group-item-warning">RIVAS ROCIO ABRIL</li>
                  <li class="list-group-item list-group-item-warning">SIFUENTES DYLAN ALEXANDER</li>
                  <li class="list-group-item list-group-item-warning">SOPRANZETTI TIZIANO MATIAS</li>
                  <li class="list-group-item list-group-item-warning">SOTO ZENTENO JUAN DANIEL</li>
                  <li class="list-group-item list-group-item-warning">URRUTIA CRISTIAN ALEJO</li>
                  <li class="list-group-item list-group-item-warning">VIEDMA KYARA ABIGAIL</li>
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