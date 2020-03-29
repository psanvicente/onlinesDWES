<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Reservas Vehículos Online</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosIndex.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>
  <body>
  <?php session_start();?>

  <?php if (isset($_SESSION['username']) === false) { ?>
    <header>
    
  </header>
  <h1>ERROR AUTENTICACIÓN</h1>

<p>Inicia sesión para entrar en nuestro contenido.</p>

<?php } else { ?>

<?php if ($_SESSION['role'] !== 'admin') { ?>
  <header>
    
    </header>
    <h1>ERROR AUTENTICACIÓN</h1>

<p>Área restringida. No tienes permisos de administrador.</p>

<?php } else { ?>

<!-- Your admin webpage starts here -->
<header>
    <h1>Administración</h1>
  </header>

<p>Bienvenido, <?= $_SESSION['username'] ?>! <a href='log_out.php'>Log out</a>.</p>

  <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
    .tg .tg-cly1{text-align:left;vertical-align:middle}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <h2>Clientes actuales</h2>
    <table title='Table of students'>
      <caption>Clientes</caption>
      <thead>
        <tr>
          <th scope='col'>ID</th>
          <th scope='col'>Nombre</th>
          <th scope='col'>DNI</th>
          <th scope='col'>INFORME</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('conectarBD.php');

      $sql = 'SELECT * FROM cliente ORDER BY id_cliente';
      $sth = $dbh->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll();

      foreach ($rows as &$row) { ?>
        <tr>
          <td><?= $row['id_cliente'] ?></td>
          <td><?= $row['username'] ?></td>
          <td><?= $row['dni'] ?></td>
          <td><a title='ver_<?= $row['id_cliente']; ?>' href='ver_cliente.php?id=<?= $row['id_cliente'] ?>'>Genearar</a></td>
          
        </tr>
      <?php } ?>
      </tbody>
    </table>
        <button>Generar Informe</button>
      
    </div>

<!-- Your admin webpage ends here -->

<?php } } ?>

<a href='index.php'>Volver al indice.</a>
    <footer></footer>
  </body>
</html>
