    <!-- TUTORIAL REALIZADO CON LA WEB
      https://websitesetup.org/bootstrap-tutorial-for-beginners/
    -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Cargamos Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Localmente sería con la siguiente etiqueta-->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- Cargamos el css principal -->
    <link rel="stylesheet" type="text/css" href="src/css/main.css">
    
    <title>Online 3 con BootStrap</title>
</head>
<body>
    
<?php include("src/includes/nav.php");?>
              <header class="page-header header container-fluid">
                  <div class="overlay">
                      <div class="description">
                          <h1>Desarrollo Web Entorno Servidor</h1>
                          <p>Bienvenido/a al índice de la Tarea Online 3<p>
                          
                            <a href="#enun" id="ancla"> <button class="btn btn-outline-secondary btn-lg" id="boton">Ir a enunciados</button></a>
                        </div>
                        
                  </div>           
                      
                
                </header>
                <div class="container features">
                    
                        <h3 class="feature-title" id="enun">Enunciado:</h3>
            
                          Crea una página inicio.html que enlazca las siguientes actividades a resolver:</br>
<ol>
<li>
Almacena mediante cookies una serie de frutas y verduras escogidas por el usuario. El usuario seleccionará frutas y verduras a partir de una lista (varios checkbox) y mantendrá dichos alimentos escogidos durante una hora aunque cierre el navegador. Mediante setcookie(), sin autenticación ni sesiones, almacena los alimentos elegidos por el usuario y crea también opciones para modificar, eliminar y comprobar si existe dicha cookie. Puedes ayudarte de los materiales de Diego Lázaro y de W3Schools.
</li>
<li>
Crea un sitio web que resuelva los primeros <a href="https://milq.github.io/cursos/fundprog/ud/06.html"> cinco de estos ejercicios</a> sobre clases. Se crearán cinco pestañas, en cada una se resolverá un ejercicio. Añade una pestaña más explicando, con capturas, cómo se depura en PHP y muestra un ejemplo.
</li>
<li>
Crea un balance sencillo de ingresos y gastos. Para obtener el balance, habrá que registrarse como usuario en una base de datos y después iniciar sesión; las contraseñas estarán almacenadas en hash mediante el algoritmo Bcrypt (usa password_hash y password_verify). Una vez iniciada la sesión correctamente, el usuario introducirá, mediante formularios, una serie de ingresos y gastos, pulsará en Generar y, a continuación, verá un informe similar a éste en PDF. Usa MPDF, instalálo con Composer y aloja esta aplicación web en Heroku y en GitHub.
</li>
<li>Crea una aplicación web CRUD usando Laravel de una organización ficticia sobre una de estas temáticas:
<ul>
<li>
Biblioteca: consulta y gestión de libros (ISBN, título, autor, editorial, edición, año).
</li>
<li>
Videoteca: consulta y gestión de películas (ISAN, título, director, guionista, productor, año).
</li>
<li>
Ludoteca: consulta y gestión de videojuegos (ISAN, título, desarrolladora, distribuidora, género, año).
</li>
<li>
Hemeroteca: consulta y gestión de periódicos (ISSN, título, director, editorial, idioma, frecuencia).
</li>
</ul>
La aplicación web estará alojada en Heroku y tendrá como mínimo las siguientes pestañas:
<ul>
  <li>
Inicio: presentación de la organización y de la página web.
</li>
<li>
Información con las siguientes subpestañas:
<ul>
  <li>
MVC: explicación de lo que es un MVC.
</li>
<li>
Laravel: explicación de un framework web MVC como Laravel.
</li>
<li>
Instalación de Laravel: tutorial paso a paso de cómo instalar Laravel (si es propio, realizado por uno mismo, mejor).
</li>
<li>
Material: enlaces con material didáctico para aprender Laravel, por ejemplo éste.
</li>
</ul>
</li>
<li>
Insertar: inserción de un producto nuevo en la organización.
</li>
<li>
Visualizar: visualización de todos los productos almacenados en la organización.
</li>
<li>
Editar: modificación de los campos de un producto determinado.
</li>
<li>
Borrar: eliminación de un producto almacenado en la organización.
</li>
<li>
Sobre nosotros: descripción y fines de la organización.
</li>
<li>
Contacto: datos de contacto para comunicarse con la organización.
</li>
</ul>
</li>
</ol>
Indicaciones
El profesor descomprimirá el zip entregado, moverá la carpeta descomprimida a htdocs y abrirá inicio.html. Desde ahí accederá a las diferentes actividades para evaluar su funcionamiento: algunas enlazarán en local y otras a Heroku, según corresponda. Por último, el profesor analizará y evaluará el código.

Puedes consultar también en la fuente original los ejercicios si quieres verlo en otro formato
                        </p>
        
                    
                  </div>
                  <?php include("src/includes/footer.php");?>
                  
                
    <!-- Incluimos JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- O modo local-->
    <!-- <script src="jquery-3.4.1.min.js"></script> -->
    <!--Cargamos el Javascript de BootStrap-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- O lo hacemos localmente-->
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <!--Incluimos el JS principal-->
    <script src="src/js/main.js"></script>
    
</body>
</html>