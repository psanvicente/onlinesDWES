<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Administración</title>
    <link rel='stylesheet' type='text/css' href='src/css/styleUsuario.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <body>
  <?php session_start();?>
  <?php if (isset($_SESSION['username']) === false) { ?>

<p>Inicia sesión para entrar en nuestro examen.</p>

<?php } else { ?>

<?php if ($_SESSION['role'] !== 'admin') { ?>

<p>Área restringida. No tienes permisos de administrador.</p>

<?php } else { ?>
    <!-- VISTA DEL PROFESOR AL LOGEAR -->
    <header><h1>Panel administración </h1></header>


    <table title='Table of students'>
      <caption>Alumnos</caption>
      <thead>
        <tr>
          <th scope='col'>ID</th>
          <th scope='col'>Nombre</th>
          <th scope='col'>Apellidos</th>
          <th scope='col'>Intentos</th>
          <th scope='col'>Nota</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('conectarBD.php');

      $sql = 'SELECT * FROM usuarios ORDER BY id_usuario';
      $sth = $dbh->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll();

      foreach ($rows as &$row) { ?>
        <tr>
          <td><?= $row['id_usuario'] ?></td>
          <td><?= $row['nombre'] ?></td>
          <td><?= $row['apellidos'] ?></td>
          <td><?= $row['intentos'] ?></td>
          <td><?= $row['nota'] ?></td>
          <td><a title='edit_<?= $row['id_usuario']; ?>' href='verRespuestas.php?id=<?= $row['id_usuario'] ?>'>Ver</a></td>
         
        </tr>
      <?php } ?>
      </tbody>
    </table>
    
<?php } } ?>
  </body>
</html>