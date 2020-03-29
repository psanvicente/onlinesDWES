<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Log in and sign up template</title>
    <link rel='stylesheet' type='text/css' href='src/css/style.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <body>

  <h1>Nuevo usuario</h1>
  <form action='sign_up.php' method='post'>
      <fieldset><legend>Registro</legend>
      Username: <input type='text' name='usuario' title='Username'  /><br />
      Password: <input type='password' name='pass' title='Password' /><br />
      DNI: <input type='text' name='dni' title='Dni' /><br />

      <input type='submit' value='Crear cuenta usuario' />
      </fieldset>
    </form>

  

  <a href='index.php'>Volver.</a>

  </body>
</html>