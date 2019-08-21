<?php
    $titulo = "Ejercicio 7";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo?></title>
</head>
<body>
    <h1><?php echo $titulo?></h1>
    <h2>Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. Muestra los
valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.</h2>

<p>
    <?php
        $nombre = "olivia";
        $direccion = "Camino Tajani";
        $telefono = "71279395";

        echo $nombre ." - ".$direccion." - ".$telefono;
    ?>
</p>
</body>
</html>