<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Cerrar sesión.</title>
    <link rel='stylesheet' type='text/css' href='src/css/style.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <body>

  <h1>Cerrando Sesión...</h1>

  <?php

  session_start();
  session_destroy();

  ?>

  <p>Sesión cerrada con éxito.</p>

  <a href='index.php'>Volver al inicio.</a>

  </body>
</html>
