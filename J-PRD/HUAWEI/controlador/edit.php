<?php
    
include "../modelo/conexion.php";
    
$id=$_GET['id'];

$sql=$conexion->query(" SELECT *FROM huawei WHERE id=$id");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



        <!--start btn modal-->
        <div style="margin-left: 15%; margin-right: 30%;" class="modal-global">
            <form action="" method="POST">
            <div class="container-modal-folder">

                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <input type="hidden" name="id" value="<?= $_GET['id']?>">
                    
                    <?php
                    include "modification.php";
                    while($datos=$sql->fetch_object()){ ?>

                        <div class="modal-body">
                                    <form>

                                    <div class="mb-3">
                                        <label for="serial" class="col-form-label">Serial</label>
                                        <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" value="<?= $datos->serial?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="model" class="col-form-label">Modelo</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" value="<?= $datos->modelo?>">
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
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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