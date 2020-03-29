<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Iniciar sesión</title>
    <link rel='stylesheet' type='text/css' href='src/css/style.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <body>

  <h1>Iniciando sesión....</h1>

  <?php
  require_once('conectarBD.php');

  $username = $_POST['usuario'];
  $password = $_POST['pass'];

  $sql = 'SELECT * FROM cliente WHERE username=? and password=?';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($username, $password));
  $result = $sth->fetch();

  if (empty($result)) { ?>

  <p>Tu usuario o contraseña está equivocado. Inténtalo de nuevo.</p>

  <?php } else {

  if ($result['active'] === 'yes') {
    session_start();
    $_SESSION['username'] = $result['username'];
    $_SESSION['role'] = $result['role'];
  ?>

  <p>Has iniciado sesión con éxito.</p>

  <?php } else { ?>

  <p>Tu cuenta debe ser activada.</p>

  <?php } } ?>

  <a href='index.php'>Volver al inicio.</a>

  </body>
</html>
