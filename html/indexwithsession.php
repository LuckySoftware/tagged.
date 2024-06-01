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

            <div class="shop">

                <a href="pago.html">

                    <button type="button" class="btn-personalizado"><i class="fas fa-shopping-cart"></i> Pagar</button>

                </a>

            </div>

            <nav class="menu-principal">

                <a href="../html/index.html"><button type="button" class="btn-personalizado">Inicio</button></a>

                <a href=""><button type="button" class="btn-personalizado">Catalogo</button></a>

                <a href="../html/contact.html"><button type="button" class="btn-personalizado">Contacto</button></a>

            </nav>

            <div class="login">

                <a href="../html/config.php">

                    <button type="button" class="btn-personalizado">Cuenta <i class="fas fa-cog"></i></button>
                </a>

            </div>

        </section>

    </section>

    <section class="landing-lineado">

        <div class="catalogo-principal">

            <?php foreach($resultado as $row) { ?>

                <?php 
                
                    $id = $row['id'];
                    $imagen = "../images/productos/" . $id . "/camiseta.png";
                
                    if (!file_exists($imagen))
                    {
                        $images = "../images/productos/sinfoto.png";
                    }

                ?>

                <div class="item">
                    <a href="">
                        <img src="<?php echo $imagen; ?>">
                        <p>Remera: <br><?php echo $row['nombre_prenda']; ?>
                        <br>Talle: <?php echo $row['talle_prenda']; ?>
                        <br>$  <?php echo number_format($row['precio_prenda']); ?></p>
                    </a>
                </div>

            <?php } ?>

        </div>

    </section>

    <script src="../script/script.js"></script>
</body>

</html>