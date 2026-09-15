<?php
define('ROOT_DIR', '../');
include(ROOT_DIR . "_functions/validarsesion.php");
verificarSesion();
include(ROOT_DIR . "_includes/db.php");
require_once(ROOT_DIR . "_includes/header.php");
require_once(ROOT_DIR . "_includes/sidebar.php");


$conexion = conectar();
function get_Divisiones($anio)
{
    $query = "SELECT * FROM data_cursos WHERE anio = $anio AND activo = 1;";
    $result = mysqli_query(conectar(), $query);
    return $result;
}
$flag = 1;
?>
<main label="pisalumnos">
    <header>
        <i class='bx bx-paper-plane'></i> Alumnos
    </header>
    <section>
        <div class="card shadow mb-4">
            <div class="card-header text-bg-dark">Trabajos Prácticos de Periodo de Intensificación de Saberes</div>
            <div class="card-body p-0 g-0">
                <div class="row g-0">
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">1er año</h5>
                            <span class="small fw-semibold">Ciclo Básico</span>
                        </a>
                        <?php $div = get_Divisiones(1);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">2do año</h5>
                            <span class="small fw-semibold">Ciclo Básico</span>
                        </a>
                        <?php $div = get_Divisiones(2);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">3er año</h5>
                            <span class="small fw-semibold">1ro CS</span>
                        </a>
                        <?php $div = get_Divisiones(3);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">4to año</h5>
                            <span class="small fw-semibold">2do CS</span>
                        </a>
                        <?php $div = get_Divisiones(4);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">5to año</h5>
                            <span class="small fw-semibold">3ro CS</span>
                        </a>
                        <?php $div = get_Divisiones(5);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-6 mb-3 px-1">
                        <a type="button" class="btn btn-success shadow w-100 py-2">
                            <i class='bx bxs-folder bx-lg'></i>
                            <h5 class="fw-semibold">6to año</h5>
                            <span class="small fw-semibold">4to CS</span>
                        </a>
                        <?php $div = get_Divisiones(6);
                        while ($divisiones = mysqli_fetch_array($div)) { ?>
                            <a type="button" class="btn btn-outline-success shadow w-100 py-2" href="periodosaberestp.php?anio=<?= $divisiones['anio'] ?>&division=<?= $divisiones['division'] ?>&turno=<?= $divisiones['turno'] ?> ">
                                <span>
                                    <?= $divisiones['nombre']; ?>
                                </span>
                            </a>
                        <?php  }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="../_assets/js/menu.js"></script>
<?php require_once(ROOT_DIR . '_includes/footer.php') ?>