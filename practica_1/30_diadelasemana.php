<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mostrar su correspondiente dia de la semana</title>
</head>
<body>
  <h1>mostrar su correspondiente dia de la semana</h1>
  <?php
  $dia=0;
  if($dia==1){
      echo "Domingo";
  }else
  if ($dia==2){
      echo "lunes";
    }else
    if ($dia==3){
        echo "martes";
    }else
    if ($dia==4){
        echo "miercoles";
    }else
    if ($dia==5){
        echo "jueves";
    }else
    if ($dia==6){
        echo "viernes";
    }else
    if ($dia==7){
        echo "sabado";
    }else
    
        echo "Dia Incorrecto";   
        ?>      
  
</body>
</html>