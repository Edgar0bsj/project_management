<?php //Esse código diz pro vscode para reconhecer o $this

/**
 * @var CodeIgniter\View\View $this
*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $this->renderSection('title')?></title>
    <link href="<?= site_url('dashboard/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- RENDER SECTION -->
    <?= $this->renderSection('style');?>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Gestão</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Ir ao site</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>



    <!------------------------------------------------------------- -->
    <!---------------------Menu Lateral esquerdo------------------- -->
    <!------------------------------------------------------------- -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Principal</div>
                        <a class="nav-link" href="<?= route_to('Dashboard')?>">
                            <div class="sb-nav-link-icon"></div>
                            Dashboard
                        </a>
                    </div>
                </div>
                <!------------------------------------------------------------- -->
                <div class="sb-sidenav-footer">
                    <div class="small">Desenvolvido por:</div>
                    Edgar Junior
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <!---------------------------------------------------------------------------------------->
                <!--------------------------------CONTEUDO------------------------------------------------>
                <!---------------------------------------------------------------------------------------->
                <?= $this->renderSection('main')?>







                <!---------------------------------------------------------------------------------------->
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="<?= site_url('dashboard/js/scripts.js') ?>"></script>
</body>

</html>