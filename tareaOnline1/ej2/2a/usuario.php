<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Datos Usuario</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosProcesado.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>
  <body>
  <?php 
  //DECLARAMOS VARIABLES Y LAS TRATAMOS PARA EVITAR ATAQUES MALICIOSOS
      $nombre = limpiarDatos($_POST['nombre']);
      $apell = limpiarDatos($_POST['apellido']);
      $email = limpiarDatos($_POST['email']);
    
      $number = limpiarDatos($_POST['number']);
      $dep = limpiarDatos($_POST['department']);
      $website = limpiarDatos($_POST['website']);
      $message = limpiarDatos($_POST['message']);
      $puesto = 'Unknown'; //puesto de trabajo

      //Procesar select: Dependiendo del valor recibido será un puesto u otro.
      if($dep == '0'){
        $puesto = 'Desarrollador';
      }
      else if($dep == '1'){
        $puesto = 'Tester';
      }else{
        $puesto = 'Jefe de Proyecto';
      }
      //Si no se introduce comentario.
      if($message==""){
        $message = "-";
      }
      if($website==""){
        $website = "-";
      }
      //función para procesar los datos y evitar posibles usos maliciosos
      function limpiarDatos($data) {
        $data = trim($data);//quitamos los espacios de inicio y final
        $data = stripslashes($data);//quitamos barras
        $data = htmlspecialchars($data);//convertimos caracteres especiales a html
        return $data;
      }
      ?>
          
    <header><h1>Pablo Sánchez Sanvicente</h1></header>  
      <section>
    

    <div id="titulo"><strong>Ficha Trabajador:</strong></div>

    <div>
      <p>Nombre: </p>
      <p><?php echo $nombre ?></p>
    </div>  
    <div>
      <p>Apellido: </p>
      <p><?php echo $apell ?></p>
    </div>
    <div>
      <p>Email:<  /p>
      <p> <?php echo $email ?></p>
    </div>   
    <div> 
      <p>Teléfono: </p>
      <p><?php echo $number ?></p>
    </div>
   <div>
     <p>Página Web:</p>
     <p> <?php echo $website ?></p>
    </div>
    <div>
      <p>Departamento:</p>
      <p> <?php echo $puesto ?></p>
    </div>
    <div>
      <p>Comentario: </p>
      <p><?php echo $message ?></p>
    </div>
    <button id="nuevo" onclick="window.open('./ejercicio2.html')">Nuevo</button>
    </section>
  </body>
</html>
