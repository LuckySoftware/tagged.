<?php



    require '../config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id, nombre_prenda, tipo_prenda, talle_prenda, precio_prenda, color_prenda FROM productos");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos de pagina -->
    <link rel="stylesheet" href="../style/style.css">

    <!-- Responisve de la pagina -->
    <link rel="stylesheet" href="../style/responsive.css">

    <!-- icono de la pagina-->
    <link rel="icon" href="../images/Taggie.png">

    <!-- titulo -->
    <title>Tagged.</title>

    <!-- fuentes externas -->
    <link href="https://fonts.cdnfonts.com/css/bomber-urban" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/billy" rel="stylesheet">

    <!-- fuente de iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>

<body>

    <!--                                               Header & Menu                                                            -->

    <header id="header">
        <h1>Tagged.</h1>
    </header>

    <section id="nav" class="nav-bar">

        <section class="lineado">

            <div class="login">

                <a href="../database/cerrar_sesion.php">

                    <button type="button" class="btn-personalizado">cerrar sesion<i class="fas fa-cog"></i></button>
                </a>

            </div>

        </section>

    </section>

    <script src="../script/script.js"></script>
</body>

</html>