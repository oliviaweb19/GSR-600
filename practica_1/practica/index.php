<?php
require_once 'models/database.php';

/if (isset($_REQUEST['carnes'])) {
    $controller = 'carne';
}else if(isset($_REQUEST['cliente'])){
    $controller = 'cliente';
}else if(isset($_REQUEST['venta'])){
  $controller = 'venta';
}else if(isset($_REQUEST['usuario'])){
   $controller = 'usuario';
}else{
    $controller = 'home';
}
//Todo esta logica hara el papel de un frontController

if(!isset($_REQUEST['c']))
{
    require_once "controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'controller';
    $controller = new $controller;
    $controller->Index();
}
else
{
    //Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    //Intanciamos el controlador
    require_once "controllers/$controller.controller.php";
    $controller = ucwords($controller) . 'controller';
    $controller = new $controller;

    //llamar la accion
    call_user_func( array( $controller, $accion ));

 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
    <ol>
        <li><a href="?carnes">Personas</a></li>
        <li><a href="?cliente">Clientes</a></li>
        <li><a href="?venta">Libros</a></li>
        <li><a href="?usuario">Libreria</a></li>
    </ol>
 </body>
 </html>