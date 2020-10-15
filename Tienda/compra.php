<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRA</title>
</head>
<body>
    <center>
            <form action="afegeix_carro.php" method="POST">
                <label> PRODUCTO: </label>
                <select name="producto">
                        <?php
                            session_start();
                            $fichero = file("productes.txt");
                            foreach ($fichero as $new) {
                                $separados = explode(";", $new);
                                echo '<option>' . $separados[0] . '</option>';}
                        ?>
                </select>
                <br>
                <br>
                <label>CANTIDAD:</label>
                <input name="cantidad" type="number" min="1" />
                <br>
                <br>    
                <input type="submit" />
            </form>                      
    </center>
</body>
</html>