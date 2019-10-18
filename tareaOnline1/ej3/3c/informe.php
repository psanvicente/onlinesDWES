<?php
//Los datos,ejemplo y fórmula han sido tomados de https://www.mytecbits.com/tools/medical/bfpcalculator

  //función para procesar los datos y evitar posibles usos maliciosos
  function limpiarDatos($data) {
    $data = trim($data);//quitamos los espacios de inicio y final
    $data = stripslashes($data);//quitamos barras
    $data = htmlspecialchars($data);//convertimos caracteres especiales a html
    return $data;
  }
$altura= limpiarDatos($_POST['altura']/100);//lo pasamos a metros ya que lo recibimos en cm.
$sexo=1;
if($_POST['sexo']==="hombre"){
    $sexo = 1;//para los calculos del imc /bfp
}else{
    $sexo = 0;
}
$edad = limpiarDatos($_POST['edad']);//consideramos adulto a partir de los 16 años , inclusive.
$peso= limpiarDatos($_POST['peso']);
$imc = $peso/($altura*$altura);//indice de masa corporal
$imc = number_format((float)$imc, 2, '.', '');//Ajustamos decimales
$bfp_adultos = (1.20*$imc)+(0.23*$edad)-(10.8*$sexo)-(5.4);//Porcentaje de grasa corporal para adultos

$bfp_ninios = (1.51*$imc)+(0.70*$edad)-(3.6*$sexo)-(1.4);//Porcentaje de grasa corporal para adultos
$bfp_tipo; //string para decir qué valor de BFP se tiene
$bfp;//variable en la que guardamos el valor del bfp_adulto o niño , según lo que sea el usuario. Se usará para el tipo de bfp.

$tipo_imc;//tipo de imc que tiene el usuario(infrapeso, normal , sobrepeso, obeso)
/*
CALCULAR TIPO DE IMC SEGÚN PÁGINA

BMI in Kg/m2	BMI Category
Less than 15	Highly Severe Underweight
15 to 15.9	    Severe Underweight
16 to 18.4  	Underweight
18.5 to 24.9	Normal - Healthy Weight*
25 to 29.9	    Overweight
30 to 34.9	    Obese Class 1 (Moderate Obese)
35 to 39.9	    Obese Class 2 (Severe Obese)
40 and above	Obese Class 3 (Highly Severe Obese)
*/
if($imc>=18.5&&$imc<=24.9){
    $tipo_imc="Normal";
}elseif($imc>24.9&&$imc<=29.9){
    $tipo_imc="Sobrepeso";
}elseif($imc>29.9){
    $tipo_imc="Obeso";
}else{
    $tipo_imc="Infrapeso";
}
/*
TIPO DE BFP
Essential Fat Percent	10-13%	2-5%
Fat Percent for Athletes	14-20%	6-13%
Fitness Level	21-24%	14-17%
Average Level	24-31%	18-24%
Obese Level	32% and above	25% and above
*/
if($edad>15){
    $bfp = $bfp_adultos;
}else{
    $bfp = $bfp_ninio;
}


switch ($_POST['sexo']) {
    case 'hombre':
    if($bfp>=25){
        $bfp_tipo="Nivel Obeso";
    }elseif($bfp>=18&&$bfp<25){
        $bfp_tipo="En la media";
    }elseif($bfp>=14&&$bfp<17){
        $bfp_tipo="En forma";
    }elseif($bfp>=6&&$bfp<13){
        $bfp_tipo="Con grasa (Atletas)";
    }elseif($bfp>=2&&$bfp<5){
        $bfp_tipo="Grasa Esencial(Atletas)";
    }
        break;
    case 'mujer':
    if($bfp>=32){
        $bfp_tipo="Nivel Obeso";
    }elseif($bfp>=31&&$bfp<24){
        $bfp_tipo="En la media";
    }elseif($bfp>=21&&$bfp<24){
        $bfp_tipo="En forma";
    }elseif($bfp>=14&&$bfp<20){
        $bfp_tipo="Con grasa (Atletas)";
    }elseif($bfp>=10&&$bfp<13){
        $bfp_tipo="Grasa Esencial(Atletas)";
    }
        break;
    
    default:
        # code...
        break;
}


?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

<head>
    <meta charset='utf-8' />
    <title>Informe de Salud</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosInforme.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
</head>

<body>
    <header>Informe de Salud del Paciente</header>
    <div id="contenedor">
        <section>
            <article id="datos">

                <h2>Datos paciente</h2>
                <div class="contArt">
                    <div><strong>Sexo: </strong><?php if($sexo == 1 ){echo "Hombre";}else{echo "Mujer";};?></div>
                    <div><strong>Edad: </strong><?php echo $edad;?></div><br />
                    <div><strong>Altura: </strong><?php echo $altura;?></div>
                    <div><strong>Peso: </strong><?php echo $peso;?></div><br />

                </div>
            </article>
            <article id="informe">

                <h2>Datos de salud</h2>
                <div class="contArt">
                    <div><strong>Valor IMC: </strong><?php echo $imc;?></div>
                    <div><strong>Descripción: </strong><?php echo $tipo_imc;?></div><br />
                    <div><strong>Valor Grasa Corporal(BFP):
                        </strong><?php echo number_format((float)$bfp, 2, '.', '');?>%</div>
                    <div><strong>Descripción BFP: </strong><?php echo $bfp_tipo;?></div><br />
                </div>
            </article>
        </section>
    </div>
</body>

</html>