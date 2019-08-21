<?php
    $titulo = "Ejercicio 9";
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
    <h2>Realiza un conversor de Bolivianos a Dolares. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.</h2>

<p>
    <?php
        $valorEnBoliviano = 150;
        $dolares = $valorEnBoliviano / 6.97;
        echo $valorEnBoliviano ."Bs =>Equivale ".$dolares ." $";
    ?>
</p>
</body>
</html>