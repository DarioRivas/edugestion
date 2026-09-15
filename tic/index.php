<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
include(ROOT_DIR . "_functions/taller.php");
include(ROOT_DIR . "_functions/usuarios.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="maintic">
  <header>
    <i class='bx bx-book'></i> TIC
  </header>
  <section>
    <div class="card shadow border border-dark">
      <div class="card-header text-bg-dark">
        RECURSOS PROPUESTOS POR PROFES
      </div>
      <div class="card-body">
        <div class="row  align-items-center">
          <div class="col-12 col-xl-4 text-center my-2">
            <img src="https://learningequality.org/static/assets/kolibri-ecosystem-logos/kolibri.svg" alt="" style="max-height:100px">
          </div>
          <div class="col-12  col-xl-8 my-2">
            <p>Kolibri es una plataforma educativa de código abierto especialmente diseñada para proporcionar acceso sin conexión a una amplia gama de contenidos educativos de calidad
            </p>
            <div class="text-center">
              <a class="btn btn-success" href="https://learningequality.org/kolibri/download/"> Descargar Kolibri</a>
            </div>
          </div>
        </div>
        <hr>
        <div class="row  align-items-center">
          <div class="col-12 col-xl-4 text-center my-2">
            <img src="https://phet.colorado.edu/images/phet-logo-trademarked.png" alt="" style="max-height:100px">
          </div>
          <div class="col-12  col-xl-8 my-2">
            <p>PhET proporciona simulaciones científicas y matemáticas divertidas, gratuitas, interactivas y basadas en la investigación.
              Las simulaciones están escritas en HTML5 (con algunas simulaciones antiguas en Java o Flash) y pueden ejecutarse en línea o descargarse. </p>
            <div class="text-center">
              <a class="btn btn-success" href="https://phet.colorado.edu/es_PE/"> Visitar el sitio de PhET</a>
            </div>
          </div>
        </div>
        <hr>
        <div class="row  align-items-center">
          <div class="col-12 col-xl-4 text-center">
            <img src="https://image4.owler.com/logo/robobloq_owler_20181212_113000_original.png" alt="" style="max-height:80px">
          </div>
          <div class="col-12  col-xl-8 my-2">
            <p>
              MyQcode es el software que permite la programación básica de nuestros robots Robobloq basada en Scratch 3.0.
              Pueden programar de manera avanzada con Python y Arduino Coding con este software
            </p>
            <div class="text-center">
              <a class="btn btn-success" href="https://www.robobloq.com/software/download"> Visitar el sitio de Robobloq</a>
            </div>
          </div>
        </div>
        <hr>
        <div class="row  align-items-center">
          <div class="col-12 col-xl-4 text-center">
            <img src="https://i.ytimg.com/vi/pixRrW5mSSM/maxresdefault.jpg" alt="" style="max-height:100px">
          </div>
          <div class="col-12  col-xl-8 my-2">
            <p>Tabla Periódica Interactiva</p>
            <p>
              Elementos: La Tabla Periódica ofrece información completa y útil acerca de cada uno de los elementos químicos, en un solo lugar. Haga click en un elemento para conocer más acerca de sus propiedades, historia, origen del nombre, imágenes, aplicaciones, riesgos asociados con el elemento y diagrama de electrones.
            </p>
            <div class="text-center">
              <a class="btn btn-success" href="https://es.periodic-table.io/">Ver la tabla periodica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>