<?php
    
include "../modelo/conexion.php";
    
$id=$_GET['id'];

$sql=$conexion->query(" SELECT *FROM customer_inst WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>MODIFICATION</title>
</head>

<body style="background-image: url(https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D); 
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;">
    


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




        <!--start btn modal-->
        <div style="display: flex; justify-content: center; margin-top: 3%;" class="modal-global">
            <form action="" method="POST">
            <div  style="border: 1px solid ffffff83; padding-left: 150px; padding-right: 150px; padding-top: 50px; padding-bottom: 30px; background: #ffffff83; border-radius: 7px;" class="container-modal-folder">

                <div class="modal-dialog">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                    </div>
                        <input type="hidden" name="id" value="<?= $_GET['id']?>">
                    
                    <?php
                    include "modification.php";
                    while($datos=$sql->fetch_object()){ ?>

                        <div class="modal-body">
                                    <form>
                                    
                                    <div class="mb-3">
                                        <label for="serial" class="col-form-label">Rif</label>
                                        <input type="text" class="form-control" id="rif" name="rif" placeholder="Serial del equipo" value="<?= $datos->rif?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="serial" class="col-form-label">Serial</label>
                                        <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" value="<?= $datos->serial?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="model" class="col-form-label">Modelo</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" value="<?= $datos->modelo?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="serial" class="col-form-label">Cliente</label>
                                        <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Serial del equipo" value="<?= $datos->cliente?>">
                                    </div>

                                    <div class="mt-3">
                                        <label for="location" class="col-form-label">Localidad</label>
                                        <input type="text" class="form-control" id="location" name="location" placeholder="Localidad" value="<?= $datos->location?>">
                                    </div>

                                    <div class="mt-3">
                                        <label for="date" class="col-form-label">Fecha</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Fecha de Instalacion" value="<?= $datos->date?>">
                                    </div>

                                    <div class="mt-3">
                                        <label for="file" class="col-form-label">File</label>
                                        <input type="file"class="form-control" id="file" name="file" placeholder="Examinar" >
                                    </div>

                                        <div class="mb-3">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="btnModificar" value="ok" >Modificar</button>
                                    </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                    
        <!--end btn modal-->



</body>
</html>