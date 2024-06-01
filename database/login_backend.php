<?php

    session_Start();

    include 'conexion.php';

    if(isset($_POST['acceder']))
    {

        $nombre_usuario = $_POST['nombre_usuario'];

        $email_usuario = $_POST['email_usuario'];
    
        $clave_usuario = md5($_POST['clave_usuario']);


        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usuario='$email_usuario' and clave_usuario='$clave_usuario'");


        if(mysqli_num_rows($validar_login) > 0)
        {
            $_SESSION['usuario'] = $email_usuario;
            header("location: ../html/indexwithsession.php");
            exit;
        }

        else
        {
            echo 
            "
            <script>
                alert('Usuario o Contraseña incorrecta')
                window.location = 'login.php';
            </script>
            ";
        }
    }
?>