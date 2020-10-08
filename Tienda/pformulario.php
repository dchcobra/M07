<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFORMULARIO</title>
</head>
<body>
    <?php echo htmlspecialchars($_POST['producto']), " ", htmlspecialchars($_POST['descripcion']), " ", htmlspecialchars($_POST['precio']); ?>
    <?php $fichero = fopen('productos.txt', 'a'); 
        fwrite($fichero, "\r\n");
        fwrite($fichero, htmlspecialchars($_POST['producto']));
        fwrite($fichero, ";");
        fwrite($fichero, htmlspecialchars($_POST['descripcion']));
        fwrite($fichero, ";");
        fwrite($fichero, htmlspecialchars($_POST['precio']));
    ?>
    
</body>
</html>