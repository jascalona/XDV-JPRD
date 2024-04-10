<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/style.css">
    <link rel="stylesheet" href="http://localhost/xdv-main/css/suministros.css">
    <link rel="stylesheet" href="http://localhost/xdv-main//css/barra_busqueda.css">
    <link rel="stylesheet" href="http://localhost/xdv-main//css/J-PRD.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="http://localhost/xdv-main//img/xven.jpeg">
    <title>Clientes</title>
</head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/JS/CSS/framework.css">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    

<body>
    

            <!--Header menu start-->
        <header>
            <div class="header-content">

                <div class="logo">
                    <a style="text-decoration: none; color: #000;" href="http://localhost/xdv-main//index.html"><h1>Grupo<b>XDV</b></h1></a>
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
                        <a href="../dashboard.php" class="nav-item nav-link ">Dashboard</a>
                        <a href="../clientes.php" class="nav-item nav-link ">Clientes</a>
                        <a href="../report.html" class="nav-item nav-link">IDS</a>
                        <a href="../report.php" class="nav-item nav-link">Reportes</a>
                        <a href="../DEVICES/devices.php" class="nav-item nav-link">DP</a>
                        <a href="../counter.php" class="nav-item nav-link">Contadores</a>
                        <a href="../listpart/listparts.php" class="nav-item nav-link">ListPart</a>
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


        <div style="margin-top: 50px; display:flex; font-size: 35px; margin-left: 15%;" class="title">
                <a style="text-decoration: none;" href="/huawei/panel.php" style="color: brown;"><p>Cartas de Instalación</a><b>/</b></p><a style="text-decoration: none;" href="#"><p>Desisntalación</p></a>
           </div>

        <?php
        include "modelo/conexion.php";
        include "controlador/delete.php";
        ?>
        
        <?php
        include "controlador/cargaData.php";
        ?>


        <!--start btn modal-->
        <div style="margin-left: 15%;" class="modal-global">
            <form action="" method="POST">
            <div class="container-modal-folder">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFolder" data-bs-whatever="@data">Carga de Datos</button>
                
                <div class="modal fade" id="modalFolder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Carga de Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>

                        <div class="mb-3">
                            <label for="serial" class="col-form-label">Rif</label>
                            <input type="text" class="form-control" id="rif" name="rif" placeholder="Rif del Cliente" required>
                        </div>

                        <div class="mb-3">
                            <label for="serial" class="col-form-label">Serial</label>
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="col-form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="col-form-label">Cliente</label>
                            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Modelo del equipo" required>
                        </div>

                        <div class="mt-3">
                            <label for="location" class="col-form-label">Localidad</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Localidad" required>
                        </div>

                        <div class="mt-3">
                            <label for="date" class="col-form-label">Fecha</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Fecha de Instalacion" required>
                        </div>

                        <div class="mt-3">
                            <label for="file" class="col-form-label">File</label>
                            <input type="file"class="form-control" id="file" name="file" placeholder="Examinar" required>
                        </div>

                            <div class="mb-3">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="btnCarga" value="ok" >Cargar</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!--end btn modal-->
        
            <div style="margin-right: 10%; margin-top: 50px; margin-left: 15% ; " class="container-vistas">
                <table class="table table-striped" >    
            
                <thead class="bg-info">
                    <tr>
                        <th class="col">id</th>
                        <th class="col">Rif</th>
                        <th class="col">Serial</th>
                        <th class="col">Modelo</th>
                        <th class="col">Cliente</th>
                        <th class="col">Localidad</th>
                        <th class="col">Fecha</th>
                        <th class="col">file</th>
                        <th class="col"></th>
                        <th class="col"></th>
                    </tr>
            
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query(" select *from customer ");
                    while($datos = $sql->fetch_object()){ ?>

                        <tr>
                            <td><?= $datos->id?></td>
                            <td><?= $datos->rif?></td>
                            <td><?= $datos->serial?></td>
                            <td><?= $datos->modelo?></td>
                            <td><?= $datos->cliente?></td>
                            <td><?= $datos->location?></td>
                            <td><?= $datos->date?></td>
                            <td><a class="btnPre" href="../huawei/controlador/preview.php"><?= $datos->file?></a></td>

                            <td>
                                <a class="btn btn-primary" href="./controlador/edit.php?id=<?= $datos->id?>"><i class='bx bxs-edit-alt'></i></a>
                            </td>


                    <!--start btn modal

                            <td>


                                <div style="margin-left: 15%;" class="modal-">
                                        <form action="" method="POST">
                                        <div class="container-modal-folder">

                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFolder" data-bs-whatever="@data">
                                                <a href="./controlador/edit.php"></a><i class='bx bxs-edit-alt'></i></button>
                                            
                                            <div class="modal fade" id="modalFolder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>

                                                    <div class="mb-3">
                                                        <label for="serial" class="col-form-label">Serial</label>
                                                        <input type="text" class="form-control" id="" name="" placeholder="Serial del equipo" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="model" class="col-form-label">Modelo</label>
                                                        <input type="text" class="form-control" id="" name="" placeholder="Modelo del equipo" required>
                                                    </div>

                                                    <div class="mt-3">
                                                        <label for="location" class="col-form-label">Localidad</label>
                                                        <input type="text" class="form-control" id="" name="" placeholder="Localidad" required>
                                                    </div>

                                                    <div class="mt-3">
                                                        <label for="date" class="col-form-label">Fecha</label>
                                                        <input type="date" class="form-control" id="" name="" placeholder="Fecha de Instalacion" required>
                                                    </div>

                                                    <div class="mt-3">
                                                        <label for="file" class="col-form-label">File</label>
                                                        <input type="file"class="form-control" id="" name="" placeholder="Examinar" required>
                                                    </div>

                                                        <div class="mb-3">
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary" name="btnCarga" value="ok" >Cargar</button>
                                                    </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                                                                
                                    </td>
                                end btn modal-->

                            <td>
                                <a class="btn btn-primary" href="panel.php?id=<?= $datos->id?>"><i class='bx bx-trash-alt'></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
                </table>
            </div>
            </div>
            




</body>
</html>