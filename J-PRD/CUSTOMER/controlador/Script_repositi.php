<?php

// repositi script para almacenamiento de formatos 

//carpeta-destino
$forlder_destin = "repositi/";


//name-extencion-files
$name_file = basename($file['file']['name']);
$extension = strtolower(pathinfo($name_file, PATHINFO_EXTENSION));

if (move_uploaded_file($file['file']['tmp_name'], $folder_destin . $name_file)) {
    include "../modelo/conexion.php";
}
?>