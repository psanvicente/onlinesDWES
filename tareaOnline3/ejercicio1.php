<!DOCTYPE html>
<?php include("src/includes/nav.php");
    function crearCookie($nombre, $cantidad) {
        setcookie($nombre,$cantidad,time()+3600);
    }
    function borrarCookie($nombre) {
        setcookie($nombre,1,time()-3600);
    }
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Cargamos Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Localmente sería con la siguiente etiqueta-->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Cargamos el css principal -->
    <link rel="stylesheet" type="text/css" href="src/css/main.css">
    <title>Ejercicio 1</title>
</head>

<body> 


    <div class="container features" id="ej">
        

            <h3 class="feature-title" id="enun">Ejercicio 1:</h3>
     

        <?php

   
       
        
 
 if(isset($_POST['submit']))//Si se ha pulsado submit
  
 {
    
    
    if($_POST['platanos']>0){
        crearCookie('platanos',$_POST['platanos']);

    }else{
        borrarCookie('platanos');
    }
    if($_POST['manzanas']>0){
        crearCookie('manzanas',$_POST['manzanas']);

    }else{
        borrarCookie('manzanas');
    }
    if($_POST['peras']>0){
        crearCookie('peras',$_POST['peras']);

    }else{
        borrarCookie('peras');
    }
    if($_POST['lechugas']>0){
        crearCookie('lechugas',$_POST['lechugas']);

    }else{
        borrarCookie('lechugas');
    }
    if($_POST['calabacines']>0){
        crearCookie('calabacines',$_POST['calabacines']);

    }else{
        borrarCookie('calabacines');
    }
    if($_POST['berenjenas']>0){
        crearCookie('berenjenas',$_POST['berenjenas']);

    }else{
        borrarCookie('berenjenas');
    }
    
    
    
    
    


 }
 ?>
 <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <h6>Listado Productos:</h6>
    <table>
  <tr>
    <th>Nombre</th>
    <th>Cantidad</th>
  </tr>
  <tr>
    <td>Plátanos</td>
    <td><?php if(isset($_COOKIE['platanos'])){?><?=$_COOKIE['platanos'];}else{ ?><?= " - ";} ?></td>
  </tr>
  <tr>
    <td>Manzanas</td>
    <td><?php if(isset($_COOKIE['manzanas'])){?><?= $_COOKIE['manzanas'];}else{ ?><?= " - ";} ?></td>  </tr>
  <tr>
    <td>Peras</td>
    <td><?php if(isset($_COOKIE['peras'])){?><?= $_COOKIE['peras'];}else{ ?><?= " - ";} ?></td>  </tr>
  <tr>
    <td>Lechugas</td>
    <td><?php if(isset($_COOKIE['lechugas'])){?><?= $_COOKIE['lechugas'];}else{ ?><?= " - ";} ?></td>  </tr>
  <tr>
    <td>Calabacines</td>
    <td><?php if(isset($_COOKIE['calabacines'])){?><?= $_COOKIE['calabacines'];}else{ ?><?= " - ";} ?></td>  </tr>
  <tr>
    <td>Berenjenas</td>
    <td><?php if(isset($_COOKIE['berenjenas'])){?><?= $_COOKIE['berenjenas'];}else{ ?><?= " - ";} ?></td>  </tr>
</table>
<button onclick=window.location.reload()>Actualizar lista.</button>

    </div>
    <div class="col-lg-8 col-md-8 col-sm-8">

      <form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>Frutas</h2>
                    <label for="platanos">Plátanos</label><input type="number" name="platanos" id="platanos" min="0"
                        max="10"></br>
                    <label for="manzanas">Manzanas</label><input type="number" name="manzanas" id="manzanas" min="0"
                        max="10"></br>
                    <label for="peras">Peras</label><input type="number" name="peras" id="peras" min="0" max="10"></br>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>Verduras</h2>
                    <label for="lechugas">Lechugas</label><input type="number" name="lechugas" id="lechugas" min="0"
                        max="10"></br>
                    <label for="calabacines">Calabacines</label><input type="number" name="calabacines" id="calabacines"
                        min="0" max="10"></br>
                    <label for="berenjenas">Berenjenas</label><input type="number" name="berenjenas" id="berenjenas"
                        min="0" max="10"></br>

                </div>
            </div>
           
            <button type="submit" name="submit">Añadir a la compra.</button>
        </form>
        

        <div class="aviso">
        *Nota: Un número entre 1 y 10 modificará el valor actual del producto.</br>
            *Nota: Si el valor del elemento es 0, su cookie será eliminada.</div>
    </div>
  </div>
             

        
       
        


               
    </div>
            
            

            
        </div>



        
    <?php include("src/includes/footer.php");?>


    <!-- Incluimos JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- O modo local-->
    <!-- <script src="jquery-3.4.1.min.js"></script> -->
    <!--Cargamos el Javascript de BootStrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- O lo hacemos localmente-->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <!--Incluimos el JS principal-->
    <script src="src/js/main.js"></script>


</body>

</html>