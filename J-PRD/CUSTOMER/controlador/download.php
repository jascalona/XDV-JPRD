<?php

include "..//modelo/conexion.php";

$id=$_GET['id'];

$sql = " SELECT *FROM customer_inst WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);


if (mysqli_num_rows($resultado) ==1) {
    $datos = mysqli_fetch_assoc($resultado);
    $file = $datos['file'];
    $ruta_file = "repositi/" . $file;

    if (file_exists($ruta_file)) {
        //enviar el archivo al navegador
        header('Content-Type: application/octet-stram');
        header('Content-Disposition: attachment; filename="' .$file.' "');
        readfile($ruta_file);
    } else {
        echo "El archivo no existe en el servidor";
    }
    

} else {
    echo "el acrhivo no se encontro en la base de datos";
}


?>