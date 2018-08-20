<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejemplos pHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
       $nombre="Juan";
       function dameNombre(){
        global $nombre;
        $nombre= "EL nombre es " . $nombre;
    } 
        dameNombre();

        echo $nombre;
    ?>
</body>
</html>