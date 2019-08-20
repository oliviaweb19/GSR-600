<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar la edad de persona</title>
</head>
<body>
    <h1>ingrese la edad de persona </h1>
    <?php
    $edad=0;
    if ($edad>=0 && $edad<=11){
        echo "Es Niño";
    }else

    if ($edad>=12 && $edad<=18){
    echo "Es Adolescente";

    }else

    if ($edad>=19 && $edad<=25){
    echo "Es Joven";

    }else

    if ($edad>=36 && $edad<=5){
     echo "Es Adulto";

}else

   echo "Es Anciano";

   ?>
    
</body>
</html>