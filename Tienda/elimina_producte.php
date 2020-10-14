<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $linea = $_GET['linea'];
        $fichero = file("productes.txt");
        unset($fichero[$linea]);
        $fnew = fopen('productes.txt', 'w'); 
        foreach ($fichero as $new) {
            fwrite($fnew, $new);
        }
        echo 'Se ha eliminado correctamente';
    ?>
</body>
</html>

