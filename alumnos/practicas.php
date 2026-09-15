<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
$dir = 'imagenespracticas/';
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
shuffle($images);
?>
<style>
  .pasantes .row {
    padding: 0.8rem 1px;
    border-bottom: 1px solid gray;
  }
</style>
<main label="infopracticas">
  <header>
    <i class='bx bx-paper-plane'></i> Alumnos
  </header>
  <section>
    <div class="card shadow">
      <div class="card-header text-bg-dark">
        PRACTICAS PROFESIONALIZANTES
      </div>
      <div class="card-body">
        <section class="text-center my-3 justify-content-center">
          <div>
            <i class='bx bxs-briefcase'></i> Coordinadora de Prácticas Profesionalizantes: <span class="text-success">Prof. Verónica Cardenas</span>
          </div>
        </section>
        <div class="my-3 pasantes">
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>JARA, Iasin</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>COOPERATIVA AROMÁTICAS ALTO VALLE - Fdez. Oro</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>MORENO, Florencia</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>COOPERATIVA AROMÁTICAS ALTO VALLE - Fdez. Oro</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>BAI, li</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>BUNTECH DEL LAGO S.A - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>BECHER, Florencia</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>LABORATORIO CHIESA - Centenario</div>
          </div>
          <!--
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CARABELLI, Camila Nicole</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>BROMATOLOGÍA MUNICIPALIDAD CINCO SALTOS</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CISTERNA, Bruno Emanuel</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>BROMATOLOGÍA MUNICIPALIDAD CINCO SALTOS</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CIFUENTES D, Paula Wanda Suyay</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>BUNTECH DEL LAGO S.A - Cinco Saltos</div>
          </div>        
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>MARTÍNEZ, Dana Avril</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>HOSPITAL AREA CINCO SALTOS</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>PEREZ, Nicolás Geremías</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>HOSPITAL AREA CINCO SALTOS</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CONTRERA, Abril Constanza</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>LABORATORIO BIO-LAB - Cipolletti</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>SAN MARTIN, Iara Camila Nahir</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>LABORATORIO BIO-LAB - Cipolletti</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>SAAVEDRA CATANZARO, Abril Loana</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>LABORATORIO BIO-LAB - Cipolletti</div>
          </div>         
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>BARRERA, Maria Constanza Milagros</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>LABORATORIO CHIESA - Centenario</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>ACUÑA, Lucas Valentin</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>PECOM - Parque Industrial Neuquen</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>ALARCON DOMINGUEZ, Joaquín Marcelo</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CORTEZ, Nair Romina</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>DÍAZ, Leandro Alexis</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>FRANCO CARDOZO, Ayelen Vanesa</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>NANCUPILLAN, Jose Alejandro</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>ORTIZ, Geremías Emanuel</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>OSORIO, Marcos Ivan</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>TINTE, Maia Valentina</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>QUÍMICA DEL VALLE - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>ALFARO, Lisandro Adrian</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>TOLSA MINERALES LA PATAGONIA S.A - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>CONACHS, Aquiles</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>TOLSA MINERALES LA PATAGONIA S.A - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>GUAJARDO HERNANDEZ,Alejandra Ruth</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>TOLSA MINERALES LA PATAGONIA S.A - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>VERA, Mariana Abigail</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>TOLSA MINERALES LA PATAGONIA S.A - Cinco Saltos</div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-6"><i class='bx bxs-user-circle text-success me-2'></i>INAL, Aixa Romina</div>
            <div class="col-12 col-xl-6"><i class='bx bxs-factory me-2'></i>WELL SERVICES ARGENTINA - Neuquén</div>
          </div>
          -->
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5">
    <div class="flexbin flexbin-margin">
      <?php foreach ($images as $image) : ?>
        <div class="img-container">
          <img src="<?php echo $image; ?>" class="img-collage">
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>