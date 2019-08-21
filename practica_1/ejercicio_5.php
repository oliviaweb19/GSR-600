<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <h2>Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente.
A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.</h2>

<p>
<?php

    $x = 144;
    $y = 999;

    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x + $y;
    $division = $x / $y;
?>
</p>
<p>
    <?php 
    echo "La suma es: ".$suma;
    ?>
</p>
<p>
    <?php 
    echo "La resta es: ".$resta;
    ?>
</p>
<p>
    <?php 
    echo "La multiplicacion es: ".$multiplicacion;
    ?>
</p>
<p>
    <?php 
    echo "La division es: ".$division;
    ?>
</p>

</body>
</html>