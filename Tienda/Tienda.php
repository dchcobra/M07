<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <center>
        <?php
        $fichero = file('productos.txt');
        echo '<table border="1px"> <th>ITEM</th> <th>DESCRIPCION</th> <th>PRECIO</th><tr>';
        foreach($fichero as $linea) {
            $separados = explode(";", $linea);
            echo "<td>$separados[0]</td> <td>$separados[1]</td> <td>$separados[2]</td>";
            echo "</tr><br>";
        }
        ?>
    </center>
</body>
</html>