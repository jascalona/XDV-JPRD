<?php



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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>

                            <div class="mb-3">
                                <label for="serial" class="col-form-label">Serial</label>
                                <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required>
                            </div>

                            <div class="mb-3">
                                <label for="model" class="col-form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" required>
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