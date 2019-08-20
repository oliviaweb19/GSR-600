<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menor de tres numeros</title>
</head>
<body>
    <h1> menor de tres numero</h1>
    <?php
     // el menor de tres numeros 
    $a =2;
    $b =2;
    $c =2;
   
    if($a< $b){
        if($a < $c){
            echo "A es menor";

        }else{
            echo " c es menor";
        }
        }else{

            if($b < $c){
                if($b < $c){
                echo " B es menor";

            }else{
                echo " C es menor";
            
            }else{
            echo "no existe ";
             
        }
        }
    }
    ?>
</body>
</html>