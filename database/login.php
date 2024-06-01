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
      <form action="login_backend.php" method="post">
        <h1>Iniciar Sesion</h1>

        <div class="input-box">
          <input type="email" name="email_usuario" placeholder="email" required/>
          <i class="bx bxs-envelope"></i>
        </div>

        <div class="input-box">
          <input type="password" placeholder="clave" name="clave_usuario"required/>
          <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox"/>Recuérdame</label>
          <a href="#">Olvidaste tu clave?</a>
        </div>

        <input type="submit" class="btn" name="acceder">

        <div class="register-link">
          <p>Aún no tienes una cuenta? <a href="register.php">Registrarse ahora!</a></p>
        </div>
      </form>
    </div>
  </body>
</html>