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
  // https://aprende-web.net/javascript/js13_3.php
  $username = $_POST['usuario'];
  $nombre = $_POST['nombre']; //      /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
  $apellidos = $_POST['apellidos'];// /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/
  $password = $_POST['pass'];
 

  $username_regex = '/^[A-Za-z][A-Za-z0-9]{3,31}$/';
  $nomapellido_regex ='/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/';

  // https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength
  $password_regex = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';

  if (preg_match($nomapellido_regex, $nombre) === 0 || preg_match($nomapellido_regex, $apellidos) === 0) { ?>

    <p>Tu nomnre o apellidos:</p>
  
    <ul>
      <li>Debe empezar por una mayúscula y seguir por minúsculas.</li>
      <li>Puede contener nombre compuesto.</li>
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

  $sql = 'INSERT INTO usuarios(nombre,apellidos,usuario,password,role) values(?,?,?,?,?)';
  $sth = $dbh->prepare($sql);
  $success = $sth->execute(array($nombre, $apellidos, $username, $password, 'alumno'));

  if ($success) { ?>

  <p>Felicidades! You create an username with an user ALUMNO.</p>
  <a href='index.php'>Volver al índice.</a>

  <?php } else { ?>

  <p>Hubo un error during registration. Puede que el nombre de usuario ya exista.</p>
  <a href='registro.php'>Volver al índice.</a>

  <?php } } ?>

  

  </body>
</html>
