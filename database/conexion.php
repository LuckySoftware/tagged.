<?php
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "tagged_database";

    $conexion = mysqli_connect($server, $user, $pass, $db);
    
    if ($conexion) 
    {
        //echo 'conectado exitosamente';
    }

    else
    {
        //echo "no se pudo conectar a la DB";
    }
?>