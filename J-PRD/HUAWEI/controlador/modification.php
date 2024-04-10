<?php

if (!empty($_POST['btnModificar'])) {
    if (!empty($_POST['serial']) AND !empty($_POST['modelo']) AND !empty($_POST['location']) AND !empty($_POST['date']) AND !empty($_POST['file'])) {
        //recopilation-datos
        $id=$_POST['id'];
        $serial=$_POST['serial'];
        $modelo=$_POST['modelo'];
        $location=$_POST['location'];
        $date=$_POST['date'];
        $file=$_POST['file'];

        $sql=$conexion->query(" UPDATE huawei SET serial='$serial', modelo='$modelo', location='$location', 
        date='$date', file='$file' WHERE id='$id' ");

        if ($sql==1) {
            header("location: ../panel.php ");
        } else {
            echo '<div class="alert alert-warning">ERROR AL MODIFICAR PRODUCTO</div>';
        }
        

    } else {
        echo '<div class="alert alert-warning">RELLENE LOS CAMPOS VACIOS</div>';
    }
}

?>