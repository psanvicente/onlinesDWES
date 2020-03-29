<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <title>Test Online</title>
    <link rel='stylesheet' type='text/css' href='src/css/styleUsuario.css' />
    <script type='text/javascript' src='src/js/app.js'></script>
  </head>
  <body>
  <header>
    <h1>Test PHP</h1>
  </header>
  <?php session_start();?>
  <?php if (isset($_SESSION['username']) === false) { ?>

<p>Inicia sesión para realizar el examen.</p>
<a href='index.php'>Back to index.</a>

<?php } else { ?>
  <?php 
  require_once('conectarBD.php');
  $username = $_SESSION['username'];
  $sql = 'SELECT * FROM usuarios WHERE usuario=?';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($username));
    $result = $sth->fetch();
  
  ?>

    <div id="contenido">
      <section>
        <nav>
        Bienvenido <?=$result['nombre']?> <?=$result['apellidos'] ?> <br/>
      Nº veces examinado =  <?=$result['intentos']?>(Intentos Máximos: 3) <br/>       
        </nav>   
     
          <form action="evaluar.php" method="post">
              <!-- Pregunta 1 - r1 = respuesta1
            https://www.digitallearning.es/tests/php.html
            -->
           
           <input type="hidden" name="id" value="<?=$result['id_usuario']?>">
              <div class="pregunta">
                    1- ¿En qué lugar se ejecuta el código PHP?<br/>
                    <input type="radio" name="r1" value="a" id="r1_a"/>
                    <label for="r1_a">a)Servidor</label>
                    <br/><input type="radio" name="r1" value="b" id="r1_b"/>
                    <label for="r1_b">b)Cliente</label><br />
              </div>
              <div class="pregunta">
                    2- ¿Cuáles de estas son marcas para la inserción del código PHP en las páginas HTML?<br/>
                    <input type="radio" name="r2" value="a" id="r2_a"/>
                    <label for="r2_a">a) &lt ? y ? ></label>

                    <br/><input type="radio" name="r2" value="b" id="r2_b"/>
                    <label for="r2_b">b) &lt php > &lt /php ></label>

                    <br/><input type="radio" name="r2" value="c" id="r2_c"/>
                    <label for="r2_c">c) &lt # y #></label><br/>
              </div>
              <div class="pregunta">
                    3- ¿En qué atributo de un formulario especificamos la página a la que se van a enviar los datos del mismo?<br/>
                    <input type="radio" name="r3" value="a" id="r3_a"/>
                    <label for="r3_a">a) name</label>
                    <br/><input type="radio" name="r3" value="b" id="r3_b"/>

                    <label for="r3_b">b) file</label>
                    <br/><input type="radio" name="r3" value="c" id="r3_c"/>
                    <label for="r3_c">c) action</label>
                    
                    <br/><input type="radio" name="r3" value="d" id="r3_d"/>
                    <label for="r3_d">d) description</label><br />
              </div>
              <div class="pregunta">
                    4- ¿Cuál de estas instrucciones está correctamente escrita en PHP?<br/>
                    <input type="radio" name="r4" value="a" id="r4_a"/>
                    <label for="r4_a">a) if (a=0) print a</label>

                    <br/><input type="radio" name="r4" value="b" id="r4_b"/>
                    <label for="r4_b">b) if (a==0) echo “hola mundo”;</label>

                    <br/><input type="radio" name="r4" value="c" id="r4_c"/>
                    <label for="r4_c">c) if (a==0) { echo ok }</label>
                    
                    <br/><input type="radio" name="r3" value="d" id="r3_d"/>
                    <label for="r4_d">d) if (a==0): print a;</label><br />
              </div>
              <div class="pregunta">
                    5- ¿Cuál de estas instrucciones PHP imprimirá por pantalla correctamente el mensaje “Hola Mundo” en letra negrita?<br/>
                    <input type="radio" name="r5" value="a" id="r5_a"/>
                    <label for="r5_a">a) print &lt strong >Hola Mundo &lt /strong>;</label>

                    <br/><input type="radio" name="r5" value="b" id="r5_b"/>
                    <label for="r5_b">b) print (&lt strong>Hola Mundo&lt /strong>);</label>

                    <br/><input type="radio" name="r5" value="c" id="r5_c"/>
                    <label for="r5_c">c) print ("&lt strong>Hola Mundo &lt /strong>");</label>
                
              </div>
              <div class="pregunta">
                    6- Dos de las formas de pasar los parámetros entre páginas PHP son:<br/>
                    <input type="radio" name="r6" value="a" id="r6_a"/>
                    <label for="r6_a">a) Require e Include</label>
                    <br/><input type="radio" name="r6" value="b" id="r6_b"/>

                    <label for="r6_b">b) Get y Put</label>
                    <br/><input type="radio" name="r6" value="c" id="r6_c"/>
                    <label for="r6_c">c) Post y Get</label>
                    
                    <br/><input type="radio" name="r6" value="d" id="r6_d"/>
                    <label for="r6_d">d) Into e Include</label><br />
              </div>
              <div class="pregunta">
                    7- ¿Cuál de estas instrucciones se utiliza para realizar una consulta a una base de datos MySQL?<br/>
                    <input type="radio" name="r7" value="a" id="r7_a"/>
                    <label for="r7_a">a) mysql_query</label>

                    <br/><input type="radio" name="r7" value="b" id="r7_b"/>
                    <label for="r7_b">b) mysql_access</label>

                    <br/><input type="radio" name="r7" value="c" id="r7_c"/>
                    <label for="r7_c">c) mysql_db_access</label>
                
              </div>
              <div class="pregunta">
                    8- Un array es...<br/>
                    <input type="radio" name="r8" value="a" id="r8_a"/>
                    <label for="r8_a">a) Un conjunto de caracteres alfanuméricos</label>

                    <br/><input type="radio" name="r8" value="b" id="r8_b"/>
                    <label for="r8_b">b) Un sistema para convertir una variable de texto en un número </label>

                    <br/><input type="radio" name="r8" value="c" id="r8_c"/>
                    <label for="r8_c">c) Un conjunto de elementos</label>
                
              </div>
              <div class="pregunta">
                    9- ¿Cómo se define una variable de tipo string en PHP?<br/>
                    <input type="radio" name="r9" value="a" id="r9_a"/>
                    <label for="r9_a">a) char str;</label>

                    <br/><input type="radio" name="r9" value="b" id="r9_b"/>
                    <label for="r9_b">b) string str;</label>

                    <br/><input type="radio" name="r9" value="c" id="r9_c"/>
                    <label for="r9_c">c) En PHP no se define el tipo de las variables explícitamente</label>
                
              </div>
              <div class="pregunta">
                    10- Tenemos el siguiente código: $a=”10”; $b=$a + 2; ¿Cuál será el valor de $b?<br/>
                    <input type="radio" name="r10" value="a" id="r10_a"/>
                    <label for="r10_a">a) "12"</label>
                    <br/><input type="radio" name="r10" value="b" id="r10_b"/>

                    <label for="r10_b">b) 12</label>
                    <br/><input type="radio" name="r10" value="c" id="r10_c"/>
                    <label for="r10_c">c) "102"</label>
                    
                    <br/><input type="radio" name="r10" value="d" id="r10_d"/>
                    <label for="r10_d">d) Ninguno (no se puede sumar un número a una cadena)</label><br />
              </div>
              <div class="pregunta">
                    ¿Para qué sirve el siguiente código?: if (isset($variable)){}<br/>
                    <input type="radio" name="r11" value="a" id="r11_a"/>
                    <label for="r11_a">a) Recorre un array de nombre $variable</label>
                    <br/><input type="radio" name="r11" value="b" id="r11_b"/>

                    <label for="r11_b">b) Crea una variable de nombre "$variable"</label>
                    <br/><input type="radio" name="r11" value="c" id="r11_c"/>
                    <label for="r11_c">c) Verifica si la variable "$variable" está definida y tiene un valor no nulo</label>
                    
                    <br/><input type="radio" name="r11" value="d" id="r11_d"/>
                    <label for="r11_d">d) Ninguna de las anteriores</label><br />
              </div>
              
              <br/>
            <?php if($result['intentos']<3){?><input id="enviar" type="submit" value="Enviar Examen"><?php } ?>
           

          </form>
          
        </div>

      </section>
    </div>
    <?php } ?>
    <footer></footer>
  </body>
</html>
