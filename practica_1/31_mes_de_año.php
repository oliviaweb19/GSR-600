<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mostrar su corrrespondiente mes del año</title>
</head>
<body>
 <h1>mostrar su correspondiente mes del año</h1>
 <?php
 $mes=20;
 if ($mes==1){
     echo "Enero";
 }else
  if ($mes==2){
    echo "febrero";
}else
if ($mes==3){
  echo "Marzo";

}else
  if ($mes==4){
  echo "Abril";
  }else
  if ($mes==5){
    echo "Mayo";
  }else
    if ($mes==6){
      echo "junio";
    }else
      if ($mes==7){
        echo "julio";
      }else
if ($mes==8){
  echo "Agosto";
}else
if ($mes==9){
  echo "Septienbre";
}else
if ($mes==10){
  echo "octubre";
}else
if ($mes==11){
  echo "noviembre";

}else
if ($mes==12){
  echo "Diciembre";
}else
echo "Mes Incorrectos";
?>

  

</body>
</html>