<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dia de la semana (CASE)</title>
</head>
<body>
    <H1><Datag>dia de la semana(CASE)</Datag></H1>
    <?php
    $numero=11;
    if($numero>=1&&$numero<=7){
        switch ($numero){
            case 1:$dia="Domingo";break;
            case 2:$dia="Lunes";break;
            case 3:$dia="Martes";break;
            case 4:$dia="Miercoles";break;
            case 5:$dia="Jueves";break;
            case 6:$dia="Viernes";break;
            case 7:$dia="Sabado";break;
           
        }
        echo "El dia de la semana que le  corresponde es: $dia";

    
 }else
    printf("El numero no esta  en el rango de 1 a 7");
    ?>
</body>
</html>