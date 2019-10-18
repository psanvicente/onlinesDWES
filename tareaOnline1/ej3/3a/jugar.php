<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Juego</title>
    <link rel='stylesheet' type='text/css' href='src/css/estilosJugar.css' />

  </head>

<?php
//PAPEL GANA PAPEL???? ARREGLAR

//$opcion = $_POST['opcion'];
//valor aleatorio entre 1 y 5 para saber qué opción elige la máquina.hint
$aleatorio = rand(1,5);//1 = Piedra, 2 = Papel, 3 = tijera, 4 = Lagarto, 5 = spock;
$gana;//true == gana, false == false.
$ganador;//quien gana de los 5
$perdedor;//quien pierde de los 5
switch ($_POST['opcion']) {
    case '1'://Piedra
        if($aleatorio == 4 || $aleatorio == 3){//Piedra gana a lagarto y tijeras
            $gana = true;
            $ganador = "piedra";
            if($aleatorio==4){
                $perdedor="lagarto";
            }else{
                $perdedor="tijeras";
            }
        }
        elseif($aleatorio == 2 || $aleatorio == 5){//Piedra pierde con papel y spock
                $gana = false;
                $perdedor="piedra";
                if($aleatorio==2){
                    $ganador="papel";
                }else{
                    $ganador="spock";
                }
            }
       
      
        break;
    case '2'://Papel
    if($aleatorio == 1|| $aleatorio == 5){//Papel gana a piedra y Spock
        $gana = true;
        $ganador = "papel";
        if($aleatorio==1){
            $perdedor="piedra";
        }else{
            $perdedor="spock";
        }
        
    }
        elseif($aleatorio == 3 || $aleatorio == 4){//Papel pierde con tijeras y lagarto
            $gana = false;
            $perdedor = "papel";
            if($aleatorio==4){
                $ganador="lagarto";
            }else{
                $ganador="tijeras";
            }
        }
       
        break;
    case '3'://tijeras
    if($aleatorio == 2|| $aleatorio == 4){//tijeras gana a papel y lagarto
        $gana = true;
        $ganador = "tijeras";
        $ganador = "papel";
        if($aleatorio==2){
            $perdedor="papel";
        }else{
            $perdedor="lagarto";
        }
    }
        else if($aleatorio == 1 || $aleatorio == 5){//tijeras pierde con piedra y Spock
            $gana = false;
            $perdedor = "tijeras";
            if($aleatorio==1){
                $ganador="piedra";
            }else{
                $ganador="spock";
            }
        }
       
        break;
    case '4'://lagarto
    if($aleatorio == 2|| $aleatorio == 5){//Lagarto gana a papel y spock
        $gana = true;
        $ganador = "lagarto";
        if($aleatorio==2){
            $perdedor="papel";
        }else{
            $perdedor="spock";
        }
    }
        else if($aleatorio == 3 || $aleatorio == 1){//Lagarto pierde con tijeras y piedra
            $gana = false;
            $perdedor = "lagarto";
            if($aleatorio==3){
                $ganador="tijeras";
            }else{
                $ganador="piedra";
            }
        }
       
        break;
    case '5'://Spock
    if($aleatorio == 1|| $aleatorio == 3){//Spock gana a piedra y tijeras
        $gana = true;
        $ganador = "spock";
        if($aleatorio==1){
            $perdedor="piedra";
        }else{
            $perdedor="tijeras";
        }
    }
        elseif($aleatorio == 2 || $aleatorio == 4){//Spock pierde con papel y lagarto
            $gana = false;
            $perdedor = "spock";
            if($aleatorio==2){
                $ganador="papel";
            }else{
                $ganador="lagarto";
            }
        }
        
        break;
}
if($aleatorio==$_POST['opcion']){
    $gana = 'empate';
}

?>
  <body>
  <nav>
        <div id="logo"></div><p><strong>Piedra, papel, tijera, lagarto, Spock.</strong></p>
    </nav>

    <?php 

    if($gana ==='empate'){
        echo "<p class='resultado'>Has empatado intentalo de nuevo.</p>";

    }else{
        if($gana ===true){
        
            echo "<p class='resultado'>Has ganado!!</p>";
           
            echo "<br/><div class='foto' id='".$ganador."'></div> ".$ganador." gana a ".$perdedor." <div class='foto' id='".$perdedor."'></div>";
            
        }
        else if($gana === false){
            echo "<p class='resultado'>Has perdido :(</p>";
            
            echo "<br/><div class='foto' id='".$perdedor."'></div> ".$perdedor." pierde con ".$ganador." <div class='foto' id='".$ganador."'></div>";
        }

    }

    ?>
    <br/>
    <script>
    function denuevo(){
        window.location.href = "index.html";
        
    }
    </script>
    <button onclick="denuevo()">JUGAR DE NUEVO</button>
    
    
  </body>
</html>