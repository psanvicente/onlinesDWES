<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/estilosIndex.css">
    <title>Test Online de PHP</title>
</head>
<?php session_start();?>

<body>
    <header></header>
    <nav>
        <div id="izq"><?php if (isset($_SESSION['username']) === false) { ?>

            <p>Estás conectado como invitado.</p>

            <?php } else { ?>

            <div id="izq">
                <p>Estás conectado como: <?= $_SESSION['username'] ?>. <a href='log_out.php'>Cerrar sesión</a>.</p>
            </div>

            <?php } ?>
            <button onclick="location.href='registro.php'">Registrarse</button>
        </div>
        <div id="derecha">
            <form action='log_in.php' method='post'>
                <fieldset>
                    <legend>Iniciar Sesión</legend>
                    <label for="usuario">Usuario</label><input id="usuario" type='text' placeholder='Usuario'
                        name='usuario' title='usuario' required='required' /><br />
                    <label for="pass">Contraseña</label><input id="pass" type='password' name='pass' title='pass'
                        required='required' /><br />
                    <input type='submit' value='Log In' />
                </fieldset>
            </form>
        </div>
    </nav>
    <div id="contenedor">
        <h1>Bienvenidos al examen de php.</h1>
       
        <div id="logo"></div>
        
        <br />
        <?php if (isset($_SESSION['username']) === false) { ?>

        <?php } else { ?>

        <button onclick='location.href="alumno.php"'>Entrar a la web</button>
        <?php if(isset($_SESSION['role']) == "admin"){ ?>
        <button onclick='location.href="admin.php"'>Administrar</button>
        

        <?php }} ?>




    </div>



</body>

</html>