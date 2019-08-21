<?php
    $titulo = "Ejercicio 11";
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
    <h2>Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
contorno hecho con asteriscos).</h2>

<pre>
    <?php
        echo "    *    <br>";
    ?>
    <?php
        echo "   * *   <br>";
    ?>
    <?php
       echo "  *   *  <br>";
    ?>
    <?php
        echo " *     * <br>";
    ?>
    <?php
        echo "*********";
    ?>
</pre>
</body>
</html>