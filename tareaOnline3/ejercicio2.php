<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Localmente sería con la siguiente etiqueta-->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Cargamos el css principal -->
    <link rel="stylesheet" type="text/css" href="src/css/main.css">
    <!-- para el boton subir -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    
    <title>Ejercicio 2</title>
    
</head>
<body>
  <!--Botón volver arriba -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<?php
#Apartado 1.
class Punto{
    //Propiedades
    public $x;
    public $y;
    //Métodos
    function get_x(){
        return $this->x;
    }
    function set_x($x){
        $this->x=$x;

    }
    function get_y(){
        return $this->y;
    }
    function set_y($y){
        $this->y=$y;

    }

}
#Apartado 2.
class Linea{
  public $x1;
  public $x2;
  public $y1;
  public $y2;
  public $x3;//Coordenada X del punto medio
  public $y3;//Coordenada Y del punto medio
  function __construct($x1,$y1,$x2,$y2){
    $this->x1=$x1;
    $this->x2=$x2;
    $this->y1=$y1;
    $this->y2=$y2;
  }
  function obtenerPuntoMedio(){
    $this->x3 = ($this->x1 + $this->x2)/2;
    $this->y3 = ($this->y1 + $this->y2)/2;  
  }

}
#Apartado 3.

class Rectangulo{
  public $longitud;
  public $ancho;
  public $area;
  function __construct($longitud, $ancho){
      $this->longitud = $longitud;
      $this->ancho = $ancho;
  }
  function calcularArea(){
    $this->area= $this->longitud * $this->ancho;
  }
}
#Apartado 4.
class Circulo{
  public $radio;
  public $area;
  public $circunferencia;
  function __construct($radio){
    $this->radio = $radio;

  }
  function calcularArea(){
    $this->area = round($this->radio*$this->radio *pi(),2);//pi*radio al cuadrado
  }
  function calcularCircunferencia(){
    $this->circunferencia = round(M_PI*$this->radio*2,2);//PI*diámetro
  }
}
#Apartado 5.
class Estudiante{
  public $nombre;
  public $eval1;
  public $eval2;
  public $eval3;
  public $mediaFinal;//nota media de las 3.
  public $notas = array();
  function __construct($nombre,$eval1,$eval2,$eval3){
    $this->nombre = $nombre;
    $this->notas[0] = $eval1;
    $this->notas[1] = $eval2;
    $this->notas[2] = $eval3;
  }
  function calcularMedia(){
    $suma = 0;
    for($x = 0; $x < count($this->notas); $x++) {
      $suma += $this->notas[$x];
  }
  $this->mediaFinal = round($suma/count($this->notas),2);
  }
  function getNombre(){
    return $this->nombre;
    }
  function setNombre($nombre){
    $this->nombre = $nombre;
  }
  function getNota1(){
    return $this->notas[0];
    }
  function setNota1($nota1){
    $this->notas[0] = $nota1;
  }
  function getNota2(){
    return $this->notas[1];
    }
  function setNota2($nota2){
    $this->notas[1] = $nota2;
  }
  function getNota3(){
    return $this->notas[2];
    }
  function setNota3($nota3){
    $this->notas[2] = $nota3;
  }
}





?>
<?php include("src/includes/nav.php");?>

<h1>Ejercicio 2.</h1>
<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="desplegable">
      Apartados
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#ap1">Apartado 1</a>
      <a class="dropdown-item" href="#ap2">Apartado 2</a>
      <a class="dropdown-item" href="#ap3">Apartado 3</a>
      <a class="dropdown-item" href="#ap4">Apartado 4</a>
      <a class="dropdown-item" href="#ap5">Apartado 5</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Depuración en PHP</a>
    </div>
  </div>

<section class="ej" class="container-fluid" >
<h2 id="ap1">Apartado 1.</h2>
<?php
//Creamos 3 instancias y usamos sus métodos.
$punto1 = new Punto();
$punto1->set_x(2);
$punto1->set_y(4);
$punto2 = new Punto();
$punto2->set_x(3);
$punto2->set_y(16);
$punto3 = new Punto();
$punto3->set_x(1);
$punto3->set_y(-10);
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-lboi">Nombre</th>
    <th class="tg-0lax">Valor X</th>
    <th class="tg-0lax">Valor Y</th>
  </tr>
  <tr>
    <td class="tg-0lax">punto1</td>
    <td class="tg-0lax"><?=$punto1->get_x()?></td>
    <td class="tg-0lax"><?=$punto1->get_y()?></td>
  </tr>
  <tr>
    <td class="tg-0lax">punto2</td>
    <td class="tg-0lax"><?=$punto2->get_x()?></td>
    <td class="tg-0lax"><?=$punto2->get_y()?></td>
  </tr>
  <tr>
    <td class="tg-0lax">punto3</td>
    <td class="tg-0lax"><?=$punto3->get_x()?></td>
    <td class="tg-0lax"><?=$punto3->get_y()?></td>
  </tr>
</table>
<?php



?>

</section>
<section class="ej container-fluid fondoPar"> 
<h2 id="ap2">Apartado 2.</h2>
<?php
//instanciamos 3 objetos
$linea1 = new Linea(1,5,8,5);//linea($x1,$y1,$x2,$y2)
//calculamos el punto medio con su método
$linea1->obtenerPuntoMedio();
$linea2 = new Linea(5,5,9,2);//linea($x1,$y1,$x2,$y2)
//calculamos el punto medio con su método
$linea2->obtenerPuntoMedio();
$linea3 = new Linea(11,36,-12,5);//linea($x1,$y1,$x2,$y2)
//calculamos el punto medio con su método
$linea3->obtenerPuntoMedio();
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-9wq8">Nombre</th>
    <th class="tg-0lax">Punto 1</th>
    <th class="tg-0lax">Punto 2</th>
    <th class="tg-0lax">Punto medio</th>
  </tr>
  <tr>
    <td class="tg-baqh">Linea2</td>
    <td class="tg-0lax">( <?=$linea1->x1?> , <?=$linea1->y1?> )</td>
    <td class="tg-0lax">( <?=$linea1->x2?> , <?=$linea1->y2?> )</td>
    <td class="tg-0lax">( <?=$linea1->x3?> , <?=$linea1->y3?> )</td>
  </tr>
  <tr>
  <td class="tg-baqh">Linea2</td>
    <td class="tg-0lax">( <?=$linea2->x1?> , <?=$linea2->y1?> )</td>
    <td class="tg-0lax">( <?=$linea2->x2?> , <?=$linea2->y2?> )</td>
    <td class="tg-0lax">( <?=$linea2->x3?> , <?=$linea2->y3?> )</td>
  </tr>
  <tr>
  <td class="tg-baqh">Linea3</td>
    <td class="tg-0lax">( <?=$linea3->x1?> , <?=$linea3->y1?> )</td>
    <td class="tg-0lax">( <?=$linea3->x2?> , <?=$linea3->y2?> )</td>
    <td class="tg-0lax">( <?=$linea3->x3?> , <?=$linea3->y3?> )</td>
  </tr>
</table>

</section>
<section class="ej container-fluid"> 
  <?php
  //instanciamos 3 objetos Rectangulo
  $rect1 = new Rectangulo(5,10);
  $rect1->calcularArea();  
  $rect2 = new Rectangulo(15,2);
  $rect2->calcularArea();
  $rect3 = new Rectangulo(8,2);
  $rect3->calcularArea();
  ?>
<h2 id="ap3">Apartado 3.</h2>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-9wq8">Nombre</th>
    <th class="tg-0lax">Longitud</th>
    <th class="tg-0lax">Ancho</th>
    <th class="tg-0lax">Área</th>
  </tr>
  <tr>
    <td class="tg-baqh">rect1</td>
    <td class="tg-0lax"><?=$rect1->longitud?></td>
    <td class="tg-0lax"><?=$rect1->ancho?></td>
    <td class="tg-0lax"><?=$rect1->area?></td>
  </tr>
  <tr>
    <td class="tg-baqh">rect2</td>
    <td class="tg-0lax"><?=$rect2->longitud?></td>
    <td class="tg-0lax"><?=$rect2->ancho?></td>
    <td class="tg-0lax"><?=$rect2->area?></td>
  </tr>
  <tr>
    <td class="tg-baqh">rect3</td>
    <td class="tg-0lax"><?=$rect3->longitud?></td>
    <td class="tg-0lax"><?=$rect3->ancho?></td>
    <td class="tg-0lax"><?=$rect3->area?></td>
  </tr>
</table>

</section>
<section class="ej container-fluid fondoPar"> 
<?php
//instanciamos 3 objetos Circulo y calculamos sus valores con los metodos creados.container-fluid
$circ1 = new Circulo(5);
$circ1->calcularArea();
$circ1->calcularCircunferencia();
$circ2 = new Circulo(15);
$circ2->calcularArea();
$circ2->calcularCircunferencia();
$circ3 = new Circulo(3);
$circ3->calcularArea();
$circ3->calcularCircunferencia();
?>
<h2 id="ap4">Apartado 4.</h2>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:center;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-9wq8">Nombre</th>
    <th class="tg-0lax">Radio</th>
    <th class="tg-0lax">Área</th>
    <th class="tg-0lax">Circunferencia</th>
  </tr>
  <tr>
    <td class="tg-baqh">Circ1</td>
    <td class="tg-0lax"><?=$circ1->radio?></td>
    <td class="tg-0lax"><?=$circ1->area?></td>
    <td class="tg-0lax"><?=$circ1->circunferencia?></td>
  </tr>
  <tr>
    <td class="tg-baqh">Circ2</td>
    <td class="tg-0lax"><?=$circ2->radio?></td>
    <td class="tg-0lax"><?=$circ2->area?></td>
    <td class="tg-0lax"><?=$circ2->circunferencia?></td>
  </tr>
  <tr>
    <td class="tg-baqh">Circ3</td>
    <td class="tg-0lax"><?=$circ3->radio?></td>
    <td class="tg-0lax"><?=$circ3->area?></td>
    <td class="tg-0lax"><?=$circ3->circunferencia?></td>
  </tr>
</table>
</section>

<section class="ej container-fluid"> 
<?php
//instanciamos 3 objetos estudiante.
$estudiante1 = new Estudiante("Pablo Sanvicente",7,8,8);
$estudiante1->calcularMedia();
$estudiante2 = new Estudiante("Laura Piedra",5,6,9);
$estudiante2->calcularMedia();
$estudiante3 = new Estudiante("Francisco Merla",4,5,5);
$estudiante3->calcularMedia();


?>

<h2 id="ap5">Apartado 5.</h2>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
  <tr>
    <th class="tg-9wq8">Alumno/a</th>
    <th class="tg-0lax">1 Evaluación</th>
    <th class="tg-0lax">2 Evaluación</th>
    <th class="tg-0lax">3 Evaluación</th>
    <th class="tg-0lax">Nota media</th>
  </tr>
  <tr>
    <td class="tg-baqh"><?=$estudiante1->getNombre() ?></td>
    <td class="tg-0lax"><?=$estudiante1->getNota1() ?></td>
    <td class="tg-0lax"><?=$estudiante1->getNota2() ?></td>
    <td class="tg-0lax"><?=$estudiante1->getNota3() ?></td>
    <td class="tg-0lax"><?=$estudiante1->mediaFinal ?></td>
  </tr>
  <tr>
  <td class="tg-baqh"><?=$estudiante2->nombre ?></td>
  <td class="tg-0lax"><?=$estudiante2->getNota1() ?></td>
    <td class="tg-0lax"><?=$estudiante2->getNota2() ?></td>
    <td class="tg-0lax"><?=$estudiante2->getNota3() ?></td>
    <td class="tg-0lax"><?=$estudiante2->mediaFinal ?></td>
  </tr>
  <tr>
  <td class="tg-baqh"><?=$estudiante3->nombre ?></td>
  <td class="tg-0lax"><?=$estudiante3->getNota1() ?></td>
    <td class="tg-0lax"><?=$estudiante3->getNota2() ?></td>
    <td class="tg-0lax"><?=$estudiante3->getNota3() ?></td>
    <td class="tg-0lax"><?=$estudiante3->mediaFinal ?></td>
  </tr>
</table>
</div>


</section>


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
    <!-- para el menu desplegable -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>