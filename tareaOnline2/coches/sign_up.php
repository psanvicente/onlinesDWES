<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Log in and sign up template</title>
    <link rel='stylesheet' type='text/css' href='src/css/style.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <body>

  <h1>Sign up</h1>

  <?php

  require_once('conectarBD.php');

  $username = $_POST['usuario'];
  $password = $_POST['pass'];
  $dni = strtoupper($_POST['dni']);

  $username_regex = '/^[A-Za-z][A-Za-z0-9]{3,31}$/';
  $dni_regex ='/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i';

  // https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength
  $password_regex = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

  if (preg_match($dni_regex, $dni) === 0) { ?>

    <p>Tu DNI:</p>
  
    <ul>
      <li>Debe terminar por una letra.</li>
      <li>Contener 8 dígitos.</li>
    </ul>
    <a href='registro.php'>Back to index.</a>
  
    <?php } 
  elseif (preg_match($username_regex, $username) === 0) { ?>

  <p>Tu usuario:</p>

  <ul>
    <li>Debe empezar por una letra.</li>
    <li>Contener entra 4 y 32 caracteres.</li>
    <li>Letras y números sólo.</li>
  </ul>
  <a href='registro.php'>Back to index.</a>

  <?php } elseif (preg_match($password_regex, $password) === 0) { ?>

  <p>Tu contraseña:</p>

  <ul>
    <li>Debe tener un mínimo de 8 caracteres.</li>
    <li>Debe contener al menos un número.</li>
    <li>Debe contener al menos una mayússcula.</li>
    <li>Debe contener al menos uno de los siguientes caracteres especiales: <code>!@#$%^&amp;*-</code>.</li>
  </ul>
  <a href='registro.php'>Back to index.</a>

  <?php } else {

  $sql = 'INSERT INTO cliente(username,password,active,role,dni) values(?,?,?,?,?)';
  $sth = $dbh->prepare($sql);
  $success = $sth->execute(array($username, $password, 'yes', 'user',$dni));

  if ($success) { ?>

  <p>Felicidades! You create an username with an user role.</p>
  <a href='index.php'>Back to index.</a>

  <?php } else { ?>

  <p>Hubo un error during registration. Maybe username already exists.</p>
  <a href='registro.php'>Back to index.</a>

  <?php } } ?>

  

  </body>
</html>
