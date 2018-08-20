<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>
<body>

<?php
    // echo "<p class='resaltar'>Esto es un ejemplo de frase </p>"

    $variable1="casa";
    $variable2="CASA";


    $reesultado=strcmp($variable1,$variable2);// Devuelve 1 si no son iguales y devuelve 0 si son 

    if ($reesultado){
        echo "No coinciden";
    }else{
        echo "Coinciden";
    }
     
?>
    
</body>
</html>