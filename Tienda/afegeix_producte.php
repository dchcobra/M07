<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFORMULARIO</title>
</head>
<body>
    <?php echo htmlspecialchars($_POST['producto']), " ", htmlspecialchars($_POST['descripcion']), " ", htmlspecialchars($_POST['precio']); ?>
    <?php 
    
        if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["producto"], $_POST["descripcion"], $_POST["precio"])) {
            $fichero = fopen('productes.txt', 'a'); 
            fwrite($fichero, "\r\n");
            fwrite($fichero, $_POST['producto']);
            fwrite($fichero, ";");
            fwrite($fichero, $_POST['descripcion']);
            fwrite($fichero, ";");
            fwrite($fichero, $_POST['precio']);
        } else {
            echo "<p>No se ha añadido nada</p>";
        };
        
    ?>
    
</body>
</html>