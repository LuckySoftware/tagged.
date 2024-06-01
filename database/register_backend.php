<?php

    include 'conexion.php';

    if(isset($_POST['registro']))
    {
        $nombre_usuario = $_POST['nombre_usuario'];

        $email_usuario = $_POST['email_usuario'];
    
        $numero_usuario = $_POST['numero_usuario'];
    
        $direccion_usuario = $_POST['direccion_usuario'];
    
        $clave_usuario = md5($_POST['clave_usuario']);

        $query = "INSERT INTO usuarios (nombre_usuario, email_usuario, numero_usuario, direccion_usuario, clave_usuario) 
        VALUES('$nombre_usuario', '$email_usuario', '$numero_usuario', '$direccion_usuario', '$clave_usuario')";
    
    
        // verificar que el EMAIL no se repita
        $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usuario='$email_usuario'");
    
        if(mysqli_num_rows($verificar_email) > 0)
        {
            echo 
            '
            <script>
                alert("Error, este correo ya esta registrado");
                window.location = "register.php"; 
            </script>
            ';
    
            exit();
        }
    
        // verificar que el USUARIO no se repita
        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'");
    
        if(mysqli_num_rows($verificar_usuario) > 0)
        {
            echo 
            '
            <script>
                alert("Error, este usuario ya esta registrado");
                window.location = "register.php"; 
            </script>
            ';
        
            exit();
        }
    
        $ejecutar = mysqli_query($conexion, $query);

        echo 
        '
        <script>
        window.location = "../html/index.php"; 
        </script>
        ';
    }
?>