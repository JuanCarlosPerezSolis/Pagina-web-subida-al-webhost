<!DOCTYPE html>
<html lang="es">
 <head>
    <meta charset="utf-8" />
    <title> Usuarios </title>
 </head>
 <body>
  <br>
  <center>
    <h1> Iniciar sesión </h1>
    <form method="post" action="<?php echo base_url() ?>index.php/usuarios/iniciar_sesion_post">
       <label> Usuario </label>
       <br />
       <input type="text" name="iniciosecion" />
       <br />
       <label> Contraseña </label>
       <br />
       <input type="password" name="contrasena" />
       <br /><br><br>
       <input type="submit" value="Iniciar sesión" />
       <br><br>
    </form>
  </center>
 </body>
</html>
<br><br>
