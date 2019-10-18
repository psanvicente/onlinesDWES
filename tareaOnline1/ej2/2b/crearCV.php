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
  $funciones ="";
  $categoria = "";
  switch ($_POST['estudios']) {
    case '0':
        $categoria = "Graduado Escolar";
          break;
    case '1':
        $categoria = "Bachillerato";
          break;
    case '2':
        $categoria = "F.P I";
          break;
    case '3':
        $categoria = "F.P II";
          break;
    case '4':
        $categoria = "Grado Universitario";
          break;
    case '5':
        $categoria = "Otro";
          break;          
      
      default:
          # code...
          break;
  }
   //función para procesar los datos y evitar posibles usos maliciosos
   function limpiarDatos($data) {
    $data = trim($data);//quitamos los espacios de inicio y final
    $data = stripslashes($data);//quitamos barras
    $data = htmlspecialchars($data);//convertimos caracteres especiales a html
    return $data;
  }

  ?>

    <header>
        <h1>Curriculum Generado</h1>
    </header>
    <section id="datos">
        <h2>Datos Personales</h2>
        <div id="foto" class = "<?php echo limpiarDatos($_POST['sexo'])  ;?>"></div>
        <p><strong>Nombre: </strong><?php echo limpiarDatos($_POST['nombre']) ;?></p>
        <p><strong>Primer Apellido: </strong><?php echo limpiarDatos($_POST['apellido1']) ;?></p>
        <p><strong>Segundo Apellido: </strong><?php echo limpiarDatos($_POST['apellido2']) ;?></p>
        <p><strong>Dirección: </strong><?php echo limpiarDatos($_POST['direccion'])  ;?></p>
        <p><strong>Ciudad: </strong><?php echo limpiarDatos($_POST['ciudad']) ;?></p>
        <p><strong>Código Postal: </strong><?php echo limpiarDatos($_POST['cp']) ;?></p>
        <p><strong>E-mail: </strong><?php echo limpiarDatos($_POST['email']) ;?></p>
        <p><strong>Teléfono: </strong><?php echo limpiarDatos($_POST['number']) ;?></p>
        <p><strong>Sexo:</strong> <?php 
      if($_POST['sexo']=="hombre"){echo 'Masculino';}else{echo 'Femenino';}?> </p>
    </section>

    <section id="estudiado">
        <h2>Nivel máximo de estudios</h2>
        <p><strong>Categoría título: </strong><?php echo $categoria ?></p>
        <p><strong>Cursado en: </strong><?php echo limpiarDatos($_POST['centro']); ?></p>
        <p><strong>Dirección: </strong><?php echo limpiarDatos($_POST['dirCentro']); ?></p>
        <p><strong>Ciudad: </strong><?php echo limpiarDatos($_POST['ciuCentro']); ?></p>
        <p><strong>Código Postal: </strong><?php echo limpiarDatos($_POST['cpCentro']); ?></p>
        <p><strong>Fecha Obtención[Año-Mes-Día]: </strong><?php echo limpiarDatos($_POST['obtencion']); ?></p>
        <p><strong>Idiomas: </strong>
            <?php 
        if (isset($_POST['ingles'])) {

       echo " - Inglés -";
        }
        if (isset($_POST['frances'])) {

          echo "- Francés -"  ;
            }
        if (isset($_POST['aleman'])) {

               echo "- Alemán -" ;
                }
        if (isset($_POST['otro'])) {

                   echo "- Otro -" ;
                    }
                ?>
        </p>
    </section>
    <section id="trabajado">
        <h2>Experiencia Laboral</h2>
        <?php 
        if($_POST['experiencia']=="sin"){echo '<p>Sin experiencia Laboral </p>';}
        else{             
        ?>


        <p><strong>Puesto desempeñado: </strong> <?php echo limpiarDatos($_POST['puesto']); ?></p>
        <p><strong>Empresa: </strong> <?php echo limpiarDatos($_POST['empresa']); ?></p>
        <p><strong>Fecha Inicio: </strong> <?php echo $_POST['inicio'] ?></p>
        <p><strong>Fecha Fin: </strong> <?php if (isset($_POST['actualmente'])) {echo "- Sigue trabajando -" ;}else{echo $_POST['fin'];}?>
        </p>
        <p><strong>Funciones desempeñadas: </strong><?php echo limpiarDatos($_POST['funciones']);?></p>
        <?php }?>
        </article>
    </section>
    <br/>
    <button id="nuevo" onclick="window.open('./ejercicio3.html')">Nuevo</button>
</body>

</html>