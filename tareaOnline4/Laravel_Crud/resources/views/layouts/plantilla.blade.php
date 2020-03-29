<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .imagenCabecera{
        *float:right;
        padding-right:150px;
        width: 150px;
        
        
        
    }
    .cabecera{
       
        height: auto;
        border: 1px solid black;
        text-align: center;
        font-size:x-large;
        font-family: Tahoma;
        margin-bottom:100px;
        color: green;
        
    }
    table,td,tr,th{
        border: 1px solid black;
        border-collapse: collapse;
        
    }
    
    .contenido form,table{
        width: 300px;
        margin: 0 auto;
    }
    .pie{
        text-align: center;
        position: fixed;
        bottom: 0px;
        width: 100%;
        margin-bottom: 15px;
    }
    
    </style>
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
    @yield("cabecera")
    <img src="/images/logo.jpg" class="imagenCabecera"/>      
    </div>

    <div class="contenido">
    @yield("contenido")
    </div>
   
    <div class="pie">
    @yield("pie")
    Pablo Sánchez Sanvicente - 2º DAWS
    </div>
</body>
</html>