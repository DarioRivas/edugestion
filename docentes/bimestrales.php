<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");
?>
<main label="bimestrales">
    <header>
        <i class='bx bx-paper-plane'></i> Docentes
    </header>

    

    <section>
        <div class="card shadow mb-5 ">
            <div class="card-header text-bg-dark">PLANILLAS - CORTE BIMESTRAL <?= $aniolectivo = date('Y') ?></div>
            <div class="card-body bg-warning bg-opacity-50 p-0">
                <div class="row p-0 g-0">
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/10fhlLWtSFvgrKfIGDrXMARgZAnedMHjY?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>1er año</h5>
                            <span class="small fw-semibold">Ciclo Básico</span>
                        </a></div>
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/1hWR1Azn6k3kBjzu5mXRNqu8AIrHOqJle?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>2do año</h5>
                            <span class="small fw-semibold">Ciclo Básico</span>
                        </a></div>
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/1Rjl5sMHkNmuAQQfw7435ZRSgKloW_ca4?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>3er año</h5>
                            <span class="small fw-semibold">1er año CS</span>
                        </a></div>
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/1UHDm43WpanXbQqry3l6TlhVp_l7jNMKl?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>4to año</h5>
                            <span class="small fw-semibold">2do año CS</span>
                        </a></div>
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/1fVOO30Jg0wBQgr9BbzcwSrL-fAwqD3Uz?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>5to año</h5>
                            <span class="small fw-semibold">3er año CS</span>
                        </a></div>
                    <div class="col-xxl-2 col-lg-2 col-6"><a type="button" class="btn btn-warning shadow  w-100 py-2" href="https://drive.google.com/drive/folders/1YV9rTggsLc50MKSWe2nrWktBn8UFZgwP?usp=sharing" target="_blank">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5>6to año</h5>
                            <span class="small fw-semibold">4to año CS</span>
                        </a></div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>