<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Examen enviado</title>
    <link rel='stylesheet' type='text/css' href='src/css/style.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <?php
  require_once('conectarBD.php');
  session_start();?>
  <?php if (isset($_SESSION['username']) === false) { ?>

<p>Inicia sesión para realizar el examen.</p>
<a href='index.php'>Back to index.</a>

<?php } else {
  $username = $_SESSION['username'];
  //cargamos el alumno
  $sql = 'SELECT * FROM usuarios WHERE usuario=?';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($username));
    $result = $sth->fetch();
//hay que actualizar los intentos del usuario en la tabla usuarios
  if (isset($_POST['r1'])) {

    $nombre=$result['nombre'];
    $id = $result['id_usuario'];
    $apellidos=$result['apellidos'];
    $nota=0;
    $intentos= $result['intentos'] +1;
    $id =$_POST['id'];
    $r1 = $_POST['r1'];
    $r2 =  $_POST['r2'] ;
    $r3 =  $_POST['r3'] ;
    $r4 =  $_POST['r4'] ;
    $r5 =  $_POST['r5'] ;
    $r6 =  $_POST['r6'] ;
    $r7 =  $_POST['r7'] ;
    $r8 =  $_POST['r8'] ;
    $r9 =  $_POST['r9'] ;
    $r10 =  $_POST['r10'] ;
    $r11 =  $_POST['r11'] ;
    //evaluamos , comparando las respuestas del alumno con el examen correcto
      //CARGAMOS LOS DATOS DEL EXAMEN CORRECTO
  $sql = 'SELECT * FROM examenes WHERE id_usuario=1';
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll();
  ?>

  <body>
  <?php
  
  //comparamos respuestas, si son iguales, incrementamos nota un punto
  foreach ($rows as &$row) {
    if($row['r1']==$r1){
      $nota++;

    }
    if($row['r2']==$r2){
      $nota++;

    }
    if($row['r3']==$r3){
      $nota++;

    }
    if($row['r4']==$r4){
      $nota++;

    }
    if($row['r5']==$r5){
      $nota++;

    }
    if($row['r6']==$r6){
      $nota++;

    }
    if($row['r7']==$r7){
      $nota++;

    }
    if($row['r8']==$r8){
      $nota++;

    }
    if($row['r9']==$r9){
      $nota++;

    }
    if($row['r10']==$r10){
      $nota++;


    }
    if($row['r11']==$r11){
      $nota++;

    }
    }
    $nota = ($nota*10)/11;
    $sql = 'INSERT INTO examenes(id_usuario,intento,nota,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($id, $intentos, $nota, $r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10, $r11));

    //actualizamos el intento del usuario
    $sql = 'UPDATE usuarios SET intentos=? WHERE id_usuario=?';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($intentos, $id));
  }
  else {
    die('Some of the fields is empty. You must complete all the fields.');
  }
  
  ?>

  <body>
    <h1><?= $nombre ?> Examen enviado.</h1>

    <p>Éstas fueron tus respuestas:</p>

    <ul>
      <li>Pregunta 1: <?= $r1 ?>.</li>
      <li>Pregunta 2: <?= $r2 ?>.</li>
      <li>Pregunta 3: <?= $r3 ?>.</li>
      <li>Pregunta 4: <?= $r4 ?>.</li>
      <li>Pregunta 5: <?= $r5 ?>.</li>
      <li>Pregunta 6: <?= $r6 ?>.</li>
      <li>Pregunta 7: <?= $r7 ?>.</li>
      <li>Pregunta 8: <?= $r8 ?>.</li>
      <li>Pregunta 9: <?= $r9 ?>.</li>
      <li>Pregunta 10: <?= $r10 ?>.</li>
      <li>Pregunta 11: <?= $r11 ?>.</li>

    </ul>

    <p><a href='alumno.php'>Back to index</a>.</p>
<?php } ?>
  </body>
</html>


