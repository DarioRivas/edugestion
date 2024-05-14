<nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
    <div class="container-fluid my-0 py-0">
        <a class="navbar-brand" href="<?= ROOT_DIR ?>"><span class="text-white">edu</span>gestión<span
                class="fw-bold">CET5</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Secretaría
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>secretaria/">Novedades</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_DIR ?>laboratorio/">Laboratorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_DIR ?>taller/">Taller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= ROOT_DIR ?>biblioteca/">Biblioteca/TIC</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mesas de Exámen
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>mesasdeexamen/">Información</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>mesasdeexamen/subirtrabajos.php">Subir
                                trabajos</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>mesasdeexamen/vertrabajos.php">Ver
                                trabajos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mi Usuario
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>usuarios/ficha.php">Ficha de datos
                                personales</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= ROOT_DIR ?>usuarios/logout.php">Cerrar sesión
                            </a></li>
                    </ul>
                </li>
                <?php
                if (isset($_SESSION['user-rango']) == 'admin') { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-warning" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?= ROOT_DIR ?>admin/index.php">Panel de administración</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= ROOT_DIR ?>admin/usuariosrangos.php">Asignar rangos de
                                    usuarios
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php }
                if (isset($_SESSION)) { ?>
            <a class="position-absolute end-0 me-5 bg-success px-5 text-center m-0 p-0" id="badge-usuario">
                <span class="text-white m-0 p-0">
                    <?= $_SESSION['user-nombre'] . ' ' . $_SESSION['user-apellido'] ?>
                </span><br>
                <span class="text-black small m-0 p-0">
                    <?= $_SESSION['user-rol'] ?>
                </span>
            </a>
        <?php }
                ?>
    </div>

</nav>