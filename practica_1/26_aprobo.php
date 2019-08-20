<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dado de nota de un examen</title>
</head>
<body>
    <h1>dado de nota de un examen</h1>
    <?php
    $nota=9;
    if ($nota>=0 && $nota<=5){
        echo "cuidado";
    }else
    if ($nota>=5 && $nota<=6){
        echo "Aprobo";
    }else
    if ($nota>=6 && $nota<=7){
        echo "Notable";
    }else
    if ($nota==9){
        echo "Sobre Saliente";
    }else
    if ($nota=10){ 
        echo "Excelente";
        

    }
    ?>
</body>
</html>