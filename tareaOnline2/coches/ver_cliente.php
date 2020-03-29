<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Reservas Cliente</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosIndex.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <?php
  //IMPORTANTE --- CONTROLAR QUE SOLO ENTRE EL ADMIN
  require_once('conectarBD.php');

  if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
  }
  //echo "nuestra id = ".$id;
  //echo "tipo = ".gettype($id);
  //echo gettype((int)$id);

  $sql = 'SELECT * FROM reserva WHERE id_cliente=?';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($id));
  $result = $sth->fetchAll();

 

  $sql = 'SELECT id_coche, MAX(id_coche) FROM reserva WHERE id_cliente=?';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($id));
  $max_coche = $sth->fetch();
  
  $sql = 'SELECT * FROM cliente WHERE id_cliente=?';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($id));
  $cli = $sth->fetchAll();
 
  

  ?>

  <body>
  <?php 
  
  ?>
    <h1>Reservas Cliente <?= $id ?></h1>
    Nombre: <?=$cli[0]['username']?></br>
    Dni: <?= $cli[0]['dni'];?>
    <table title='Reservas del cliente'>
      <caption>Reservas</caption>
      <thead>
        <tr>
          <th scope='col'>ID RESERVA</th>
          <th scope='col'>ID COCHE</th>
          <th scope='col'>FECHA INICIO</th>
          <th scope='col'>FEHA FIN</th>
        </tr>
      </thead>
      <tbody>
   
<?php 

      foreach ($result as &$row) { 
          ?>
        <tr>
          <td><?= $row['id_reserva'] ?></td>
          <td><?= $row['id_coche'] ?></td>
          <td><?= $row['inicio'] ?></td>
          <td><?= $row['fin'] ?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table><br/>
    <p>Veces que ha reservado:  <?=count($result)?></p>
    <p>Días reservados: </p>
    <p>ID Coche más reservado: <?=$max_coche['id_coche']?></p>
    <p><a href='admin.php'>Volver a clientes</a>.</p>

  </body>
</html>