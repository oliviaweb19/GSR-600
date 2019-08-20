<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar los numeros enteros positivo  entre 1 y 100(DO-WHILE)</title>
</head>
<body>
    <H1>Mostrar los numeros 1 y 100(DO-WHILE)</H1>
    <?php
    $n =100;
    $i=1;
    do{
        echo "<h2>".$i."</br>\n";
        $i= $i +1;
    }while($i<= $n);

    ?>
</body>
</html>