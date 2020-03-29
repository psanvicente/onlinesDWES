<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Classroom - Edit a student</title>
    <link rel='stylesheet' type='text/css' href='src/css/styleUsuario.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>

  <?php
  require_once('conectarBD.php');
  
  //RESPUESTAS DEL ALUMNO
  $nota = 0;
  $sql = 'SELECT * FROM examenes WHERE id_usuario='.$_GET['id'];
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll();
  //DATOS DEL ALUMNO
  $sql = 'SELECT * FROM usuarios WHERE id_usuario='.$_GET['id'];
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $alumnos = $sth->fetchAll();
  //CARGAMOS LOS DATOS DEL EXAMEN CORRECTO
  $sql = 'SELECT * FROM examenes WHERE id_usuario='.$_GET['id'];
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $correctas = $sth->fetchAll();
  ?>

  <body>
  <?php
  session_start();?>
   <?php if (isset($_SESSION['username']) === false) { ?>
 
 <p>Inicia sesión para entrar en nuestro examen.</p>
 
 <?php } else { ?>
 
 <?php if ($_SESSION['role'] !== 'admin') { ?>
 
 <p>Área restringida. No tienes permisos de administrador.</p>
 
 <?php } else {
  //recorremos la tabla del alumno con sus respuestas
  foreach ($correctas as &$row) {
  $r1 = $row['r1'];
  $r2 = $row['r2'];
  $r3 = $row['r3'];
  $r4 = $row['r4'];
  $r5 = $row['r5'];
  $r6 = $row['r6'];
  $r7 = $row['r7'];
  $r8 = $row['r8'];
  $r9 = $row['r9'];
  $r10 = $row['r10'];
  $r11 = $row['r11'];
  }
  //recorremos el alumno para saber su nombre y apellidos
  foreach ($alumnos as &$row) {
    $nombre = $row['nombre'];
    $apellidos = $row['apellidos'];
    }
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
  ?>

    <header><h1>Respuestas Alumno</h1></header>
    
    <?php foreach ($rows as &$row) {?>
    <ul class="resp">
    <li>Nombre: <?= $nombre ?>.</li>
    <li>Apellidos: <?= $apellidos ?>.</li>
      <li>R1: <?= $row['r1'] ?>.</li>
      <li>R2: <?= $row['r2'] ?>.</li>
      <li>R3: <?= $row['r3'] ?>.</li>
      <li>R4: <?= $row['r4'] ?>.</li>
      <li>R5: <?= $row['r5'] ?>.</li>
      <li>R6: <?= $row['r6'] ?>.</li>
      <li>R7: <?= $row['r7'] ?>.</li>
      <li>R8: <?= $row['r8'] ?>.</li>
      <li>R9: <?= $row['r9'] ?>.</li>
      <li>R10: <?= $row['10'] ?>.</li>
      <li>R11:  <?= $row['r11'] ?>.</li>
      <li>Nota: <?= $row['nota']?></li>
    </ul>

    <?php }?>
    <div id="cont"></div>
    <p><a href='admin.php'>Back to index</a>.</p>
        
<?php } } ?>

  </body>
</html>
