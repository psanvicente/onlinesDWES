<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Reservas Vehículos Online</title>
    <link rel="stylesheet" href="src/css/estilosIndex.css">
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>
  <body>
  <header>
    
  </header>
  <nav><h1>Reservar Vehículo</h1></nav>
  
  <?php session_start();?>
  <?php if (isset($_SESSION['username']) === false) { ?>

<p>Inicia sesión para realizar reservas.</p>
<a href='index.php'>Back to index.</a>

<?php } else { ?>

<!-- Your user webpage starts here -->

<p>Bienvenido, <?= $_SESSION['username'] ?>! <a href='log_out.php'>Log out</a>.</p><br/>
<?php
  require_once('conectarBD.php');
$username = $_SESSION['username'];
$sql = 'SELECT id_cliente FROM cliente WHERE username=?';
  $sth = $dbh->prepare($sql);
  $sth->execute(array($username));
  $result = $sth->fetch();
 
  $id = $result[0];
 
  echo "<br/>ID del usuario = ".$id."</br>";
  ?>
<div id="contenido">
      <form action="add_reserva.php" method="post">
      <input type="hidden" name="id_cl" value="<?php echo $id?>">
            Elija vehículo<select name="vehiculos" id="vehiculos">
                  <option value=1>Citroen Saxo, Gasolina</option>
                  <option value=2>Citroen C4, Diesel</option>
                  <option value=3>Audi A3, Diesel</option>
                  <option value=4>BMW Serie 2, Diesel</option>
                  <option value=5>BMW X5, Diesel</option>
                  <option value=7>Kia Carnival, Gasolina</option>
                  <option value=8>Kia Sorento, Diesel</option>
                  <option value=9>Hyundai Coupé, Gasolina</option>
                  <option value=10>Hyundai I30, Diesel</option>
            </select><br/>
            Fecha inicio <input type="date" name="inicio" id="inicio">Fecha fin <input type="date" name="fin" id="fin">
            <br/> <button type="submit">Reservar</button>
      </form>
      
    </div>

<!-- Your user webpage ends here -->

<?php } ?>



    <footer></footer>
  </body>
</html>
