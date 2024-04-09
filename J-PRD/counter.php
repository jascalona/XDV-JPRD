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
    <link rel="stylesheet" href="http://localhost/xdv-main//css/barra_busqueda.css">
    <link rel="stylesheet" href="http://localhost/xdv-main//css/J-PRD.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!--Librerias & Freemwares icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <title>Contadores</title>
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


      


   

            <script src="../ListPart/controlador/script.js" ></script>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</body>
</html>