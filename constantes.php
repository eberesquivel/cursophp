<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        define("AUTOR","Eber",true);
        echo "El autor es : " . AUTOR;
        echo "La linea de esta  instruciion es: " . __LINE__ . "<br>";
        echo "Estamos trabajando con este fichero: " . __FILE__;


    ?>
</body>
</html>