<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>MOBILIARIO</h1>
      <form action="login.php "method="post">
        <div class="txt_field">
          <input name="usuario" type="text" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input name="clave"type="password" required>
          <span></span>
          <label>Contraseña</label>
        </div>
        
        <input type="submit" value="Iniciar sesión">
        <div class="signup_link">
          No tienes una cuenta? <a href="#">Crear cuenta</a>
        </div>
      </form>
    </div>

  </body>
</html>