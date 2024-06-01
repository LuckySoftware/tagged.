<?php

    require '../config/database.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id, nombre_prenda, tipo_prenda, talle_prenda, precio_prenda, color_prenda FROM remeras");
    $sql = $con->prepare("SELECT id, nombre_prenda, tipo_prenda, talle_prenda, precio_prenda, color_prenda FROM canguros");
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

    <!-- fuente de BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>

<body>

    <!--                                               Header & Menu                                                            -->

    <header id="header">
        <h1 id="h1">Tagged.</h1>
    </header>

    <section id="nav" class="nav-bar">

        <section class="lineado">

            <div class="shop">

                <a href="pago.html">

                    <button type="button" class="btn-personalizado"><i class="fas fa-shopping-cart"></i> Pagar</button>

                </a>

            </div>

            <nav class="menu-principal">

                <a href="../html/index.php"><button type="button" class="btn-personalizado">Inicio</button></a>

                <a href="../html/catalogo.php"><button type="button" class="btn-personalizado">Catalogo</button></a>

                <a href="../html/contact.php"><button type="button" class="btn-personalizado">Contacto</button></a>

            </nav>

            <div class="login">

                <a href="../database/login.php">

                    <button type="button" class="btn-personalizado">Acceder <i class="fas fa-user"></i></button>
                </a>

            </div>

        </section>

    </section>

    <section class="lineado">

        <section class="catalogo">

            <div class="catalogo-ventas">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/1/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/1/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/camiseta.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div> 

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" id="span-prev"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" id="span-next"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
            </div>

        </section>

    </section>

    <section class="lineado">
        
      <section class="catalogo">

            <div class="catalogo-ventas">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/1/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/1/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/2/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            
                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/3/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="">
                                        <img src="../images/productos/4/hoodie.png" class="d-block w-20" alt="...">
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div> 

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" id="span-prev"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" id="span-next"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
            </div>

        </section>

    </section>

    <div class="slogan">
        <cite>
            ~ Expresate en la <b>calle</b>, vistete con <b>arte</b> © 2024
        </cite>
    </div>

    <footer>
        <cite>
            © 2024, Tagged.
        </cite>
    </footer>

    <!-- Scripts .JS -->
    <script src="../script/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>