<?php

if (!empty($_POST['btnCarga'])) {
    if (!empty($_POST['rif']) and !empty($_POST['serial']) and !empty($_POST['modelo']) and !empty($_POST['cliente']) and !empty($_POST['location']) and !empty($_POST['date']) and !empty($_POST['file'])){
        $rif = $_POST['rif'];
        $serial = $_POST['serial'];
        $modelo = $_POST['modelo'];
        $cliente = $_POST['cliente'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $file = $_POST['file'];

        $sql = $conexion->query(" insert into customer_inst(rif,serial,modelo,cliente,location,date,file)values('$rif','$serial','$modelo','$cliente','$location','$date','$file')");
        if ($sql==1) {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-success">LA CARGA SE REALIZO CORRECTAMENTE</div>';
        } else {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-danger">ERROR DE CONEXION COD: 10231514</div>';
        }
        
    } else{
        echo '<div style="margin-left: 500px; position: absolute;" class="alert alert-warning">DEBE LLENAR LOS CAMPOS VACIOS</div>';
    }

}

?>