<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://localhost/xdv-main/img/xven.jpeg">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/style.css">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/suministros.css">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/xdv.css">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/tablas.css">
    <link rel="stylesheet" href="http://localhost/xdv-main//css/barra_busqueda.css">
    <link rel="stylesheet" href="http://localhost/xdv-main//css/J-PRD.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!--Librerias & Freemwares icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <title>Clientes</title>
</head>
<body>
    
        <!--Header menu start-->
        <header>
            <div class="header-content">

                <div class="logo">
                    <a href="http://localhost/xdv-main//index.html"><h1>Grupo<b>XDV</b></h1></a>
                </div>

                <div class="menu" id="show-menu">

                </div>

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py- py-lg-0 px-xl-5">
                <a href="" class="text-decoration-none d-block d-lg-none">
            
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="dashboard.php" class="nav-item nav-link ">Dashboard</a>
                        <a href="clientes.php" class="nav-item nav-link ">Clientes</a>
                        <a href="report.html" class="nav-item nav-link">IDS</a>
                        <a href="report.php" class="nav-item nav-link">Reportes</a>
                        <a href="DEVICES/devices.php" class="nav-item nav-link">DP</a>
                        <a href="counter.php" class="nav-item nav-link">Contadores</a>
                        <a href="listpart/listparts.php" class="nav-item nav-link">ListPart</a>
                    </div>
                </div>
            </nav>

                <div style="margin-top: 15px; margin-bottom: 15px; margin-right: -120px;" class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    echo $_SESSION['user'];
                    ?>                    
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../Conn/controlador/cerrar.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
                </div>

        </div>
        </header>
        <!--Header menu end-->


        
        <div class="blog-container-cover">
            <div class="container-info-cover">
                <img src="http://localhost/xdv-main//img//imgheader/XEROX LOGO.png" alt="#" style="width: 550px; display: flex; justify-content: center; flex-wrap: wrap; ">
            </div>
        </div>


            <!-- Features Start -->
        <div style="background: #f3f3f3;" class="container-fluid my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid w-100" src="http://localhost/xdv-main//img/xdv.jpeg" alt="">
                    </div>
                    <div class="col-lg-7 py-5 py-lg-0">
                        <h6 class="text-primary text-uppercase font-weight-bold">XDV</h6>
                        <h1 class="mb-4">J-PRD La intefaz ideal para el Usuario</h1>
                        <p class="mb-4">J-PRD (Jose - Interfaz de Desarrollo para el Repositorio Primitivo) 
                            Es un software que trabaja en red diseñado para la automatización de procesos y consultas a una base de datos, 
                            remplazando un gestor de data por una interfaz agradable para el usuario.</p>
                        <ul class="list-inline">
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Transformación digital</h6>
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Automatizacion de Procesos</h6></li>
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Mejoras Continuas</h6></li>
                            <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Desarrollo de Modulos</h6></li>
                        </ul>
                        <a href="./CUSTOMER/PRESENTACION J-PRD.pptx" class="btn btn-primary mt-3 py-2 px-4">Leer Mas</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Blog Start -->
        <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <h6 class="text-primary text-uppercase font-weight-bold">MODULO CAC</h6>
                        <h1 class="mb-4"><?php echo $_SESSION['name'];?>, Bienvenido al portal de Socios XDV</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                    <h4 class="font-weight-bold mb-n1">01</h4>
                                    <small class="text-white text-uppercase">Fort</small>
                                </div>
                            </div>
                            <div class="bg-secondary" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle" style="width: 40px; height: 40px;" src="http://localhost/xdv-main//img/FORT.png" alt="">
                                        <a class="text-muted ml-2" href="">Designed by JE</a>
                                    </div>
                                    <div class="d-flex align-items-center ml-4">
                                        <i class="far fa-bookmark text-primary"></i>
                                        <a class="text-muted ml-2" href="./CUSTOMER/panel.php">Visualizar</a>
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">CARTAS DE INSTALACION</h4>
                                <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="https://images.unsplash.com/photo-1539627831859-a911cf04d3cd?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                    style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                    <h4 class="font-weight-bold mb-n1">02</h4>
                                    <small class="text-white text-uppercase">Fort</small>
                                </div>
                            </div>
                            <div class="bg-secondary" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle" style="width: 40px; height: 40px;" src="http://localhost/xdv-main//img/FORT.png" alt="">
                                        <a class="text-muted ml-2" href="">Designed by JE</a>
                                    </div>
                                    <div class="d-flex align-items-center ml-4">
                                        <i class="far fa-bookmark text-primary"></i>
                                        <a class="text-muted ml-2" href="./Mi Banco/panel.php">Visualizar</a>
                                    </div>
                                </div>
                                <h4 style="color: #fff;" class="font-weight-bold mb-3">CARTAS DE DESISNTALACION</h4>
                                <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->














<!-- Sesion de  JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


</body>
</html>