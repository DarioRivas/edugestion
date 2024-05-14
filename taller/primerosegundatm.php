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
                  <li class="list-group-item list-group-item-warning">BRANDANI THOMÁS BENJAMÍN</li>
                  <li class="list-group-item list-group-item-warning">CALQUIN MAXIMILIANO ANDRES</li>
                  <li class="list-group-item list-group-item-warning">CARDANO LUZ PAMPA</li>
                  <li class="list-group-item list-group-item-warning">CARRIZO AIXA LUZMILA MILAGROS</li>
                  <li class="list-group-item list-group-item-warning">MATRERO MORALES JUAN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">MUÑOZ ZAPATA GADIEL LAUTARO</li>
                  <li class="list-group-item list-group-item-warning">GIROLIMINI CAMILA</li>
                  <li class="list-group-item list-group-item-warning">GIULIOTTI SANTINO LUCA</li>
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
            1ro 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">CHAYLE GUADALUPE ANTONELLA</li>
                  <li class="list-group-item list-group-item-warning">GALLI FIORELLA LUCÍA</li>
                  <li class="list-group-item list-group-item-warning">HETHERINGTON JULIAN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">LLAMIN LUCIA BARBARA</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ BAUTISTA</li>
                  <li class="list-group-item list-group-item-warning">MARTINEZ ROMERO CATALINA ABRIL</li>
                  <li class="list-group-item list-group-item-warning">CELESTE MABELLINI UMA VALENTINA</li>
                  <li class="list-group-item list-group-item-warning">CERDA GONZALEZ JUAN PEDRO</li>
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
            1ro 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">MUÑOZ JULIAN IGNACIO</li>
                  <li class="list-group-item list-group-item-warning">MORA BENJAMIN JEREMIAS</li>
                  <li class="list-group-item list-group-item-warning">PARADA ALISON JAZMIN</li>
                  <li class="list-group-item list-group-item-warning">PARIS JUAN CRUZ</li>
                  <li class="list-group-item list-group-item-warning">PEREZ MARIA VALENTINA</li>
                  <li class="list-group-item list-group-item-warning">PAZ JAZMIN MORENA</li>
                  <li class="list-group-item list-group-item-warning">PEDREROS ANA SOFIA</li>
                  <li class="list-group-item list-group-item-warning">PEREZ IRAZUSTA BRUNELA</li>
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
            1ro 2da TM - 14:00 a 17:12hs
          </div>
          <div class="card-body small">
            <div class="row">
              <div class="col-xl-6 col-12">
                <ul class="list-group small">
                  <li class="list-group-item list-group-item-warning">PASCAL ANNA BIANCA</li>
                  <li class="list-group-item list-group-item-warning">PLAZA FRANCO MARTIN</li>
                  <li class="list-group-item list-group-item-warning">RANTERIA AITANA</li>
                  <li class="list-group-item list-group-item-warning">SCHERER BASTIAN</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA CABRAL MATTEO TIZIANO</li>
                  <li class="list-group-item list-group-item-warning">SEPULVEDA SELENA NAHIARA</li>
                  <li class="list-group-item list-group-item-warning">VALIENTE BERTOLA FRANCESCO G</li>
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