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
        $fichero = file('productes.txt');
        echo '<table border="1px"> <th>ITEM</th> <th>DESCRIPCION</th> <th>PRECIO</th><tr>';
        $tmp = 0;
        foreach($fichero as $linea) {
            $separados = explode(";", $linea);
            if (sizeof($separados) == 3) {
                echo '<td>'. $separados[0].'</td> <td>'. $separados[1] . '</td> <td>' . $separados[2] . '</td> <td><a href="elimina_producte.php?linea='. $tmp . '"> <img src="basura.png" width=25px></a></td>';
                echo "</tr><br>";
                $tmp = $tmp + 1;
            }
        };
        ?>

    </center>
</body>
</html>