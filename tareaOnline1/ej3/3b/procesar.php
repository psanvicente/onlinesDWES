<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

<head>
    <meta charset='utf-8' />
    <title>Listado de MAC</title>
    <link rel='stylesheet' type='text/css' href='src/css/styleProcesado.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
</head>

<body>
    <h1>Añadiendo MAC...</h1>
    <?php
//abrimos / creamos si no existe el archivo.txt
$archivo = fopen("listaMAC.txt", "r");
fwrite($archivo, "");
fclose($archivo);
$linea = "";
// unimos cada input para crear nuestra MAC
//
$mac = strtoupper( $_POST["1"].":".$_POST["2"].":".$_POST["3"].":".$_POST["4"].":".$_POST["5"].":".$_POST["6"]."\n");
//buscamos si existe la mac en la lista
$fichero = fopen("listaMAC.txt", "r");//solo lectura, puntero al inicio
$linea = "";
$encontrado = false;//si encontramos una mac , decimos que true.
while(!feof($fichero)){
    $linea = fgets($fichero);
    if($linea == $mac){
        echo "<div>La MAC introducida ya existe en el listado. </div>";
        $encontrado = true;
        break;
    }
 }
 if($encontrado==false){
    echo "<div>MAC añadida con éxito</div>";
}     
 fclose($fichero);
 if($encontrado == false){
    $fichero = fopen("listaMAC.txt", "a");//a+ permite leer y escribir, situa el puntero al final.
    fwrite($fichero,$mac);
    fclose($fichero);
 }
?>
    <div id="listado">
    <h2>Su filtrado de MAC actual es:</h2>
    <?php
    $archivo = fopen("listaMAC.txt", "r");
    while(!feof($archivo)){
        echo fgets($archivo)."<br/>";
    }
    fclose($archivo);  

?>
</div>
</body>

</html>