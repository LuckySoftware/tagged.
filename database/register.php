<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acceder</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>

    <link href="https://fonts.cdnfonts.com/css/bomber-urban" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/billy" rel="stylesheet">

    <link rel="stylesheet" href="../style/loginStyle.css"/>
  </head>
  <body>
    <div class="container">
      <form action="register_backend.php" method="post">
        <h1>Registrarse</h1>

        <div class="input-box">
          <input type="text" name="nombre_usuario" placeholder="usuario" required/>
          <i class="bx bxs-user"></i>
        </div>

        <div class="input-box">
          <input type="email" name="email_usuario" placeholder="email" required/>
          <i class="bx bxs-envelope"></i>
        </div>

        <div class="input-box">
          <input type="tel" name="numero_usuario" placeholder="numero" required/>
          <i class="bx bxs-phone"></i>
        </div>

        <div class="input-box">
          <input type="adress" name="direccion_usuario" placeholder="direccion" required/>
          <i class="bx bxs-home"></i>
        </div>

        <div class="input-box">
          <input type="password" name="clave_usuario" placeholder="clave" required/>
          <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox"/>Recuérdame</label>
        </div>

        <input class="btn" type="submit" name="registro"></input>

        <div class="register-link">
          <p>Ya tenes una cuenta? <a href="login.php">Iniciar sesion ahora!</a></p>
        </div>
      </form>
    </div>
  </body>
</html>