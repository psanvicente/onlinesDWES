<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Examen enviado</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosIndex.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>
    
  <body>


  <?php session_start();?>
  <?php
  
  require_once('conectarBD.php');
  
  if (isset($_POST['inicio'])) {

    $id_cliente = $_POST['id_cl'];
    $id_coche = $_POST['vehiculos'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
    
  }

  if($fin>$inicio){
    //controlar que no exista reservada la fecha ya.
    /*
    select * from reserva where `inicio`<= $fin and $inicio <= `fin` and `id_coche`= '1'
    select * from reserva where `inicio`<= '2019-11-22' and '2019-11-17' <= `fin` and `id_coche`= '1'
    
 */
//la consulta está bien.
//$sql = 'SELECT * FROM reserva WHERE id=?';
//$sql = 'SELECT * FROM reserva WHERE inicio<= $fin and $inicio <= fin and id_coche= $id_coche';
$sql = 'SELECT * FROM reserva WHERE inicio<= ? and ? <= fin and id_coche= ?';
$sth = $dbh->prepare($sql);
$sth->execute(array($fin,$inicio,$id_coche));
$result = $sth->fetch();
/*
$sql = "select * from reserva where `inicio`<= $fin and $inicio <= `fin` and `id_coche`= '$id_coche'";
  $sth = $dbh->prepare($sql);
  $sth->execute(array());
  $result = $sth->fetch();
  */
    // si el resultado está vacío podemos reservarç
  //echo "echo del empty = ".empty($result);
  //echo "</br> echo directo = ".$result;
  if (empty($result)) { 
    //comenzar a reservar tras todo correcto
    $sql = 'INSERT INTO reserva(id_cliente,id_coche,inicio,fin) values(?,?,?,?)';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($id_cliente, $id_coche, $inicio,$fin));
    ?>
    <nav><p>Éstas fue su reserva:</p></nav>
<div id="contenedor">
<ul>
  <li>ID CLIENTE: <?= $id_cliente ?>.</li>
  <li>ID COCHE: <?= $id_coche ?>.</li>
  <li>FECHA INICIO: <?= $inicio ?>.</li>
  <li>FECHA FIN <?= $fin ?>.</li>
  <p><a href='cliente.php'>Volvemos a reservas</a>.</p>
 
</ul>
</div>

  <?php }
  //si no está reservado ya ese rango, debemos avisar
  else {
    
    ?>
    <p>Fecha no disponible. Solicite otra</p>
    <p><a href='cliente.php'>Volver a reservas</a>.</p>
   
    <?php
  }
}else {//No podemos reservar fechas finales anteriores o iguales a la inicial.
    echo "ERROR- La fecha fin debe ser posterior al inicio de la reserva. ";
    ?><p><a href='cliente.php'>Volvemos a reservas</a>.</p>
    <?php
  }
  ?>
   </body>
</html>


