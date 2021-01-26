<?php 
    $hostname = "localhost";
    $dbname = "world";
    $username = "root";  
    $password = "";  
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    if(!$pdo){
        systemMSG('error', 'No se ha conectado a la base de datos!');
    }
    $countries = $pdo->prepare("SELECT * FROM country");
    $countries->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormNuevasCiudades</title>
</head>
<body>
<h1>FORMULARIO INTRODUCIR CIUDAD</h1>
<form action="./InsertaCiudades.php" method="POST">
        <input type="text" name="ciudad" required placeholder="ciudad">
        <select name="pais">
            <?php
                while($country = $countries->fetch()){
                    echo "<option value=" . $country['Code'] .">" . $country['Name'] . "</option>";
                }
            ?>
            </select>
        <input type="text" name="distrito" required placeholder="distrito">
        <input type="number" name="poblacion" required placeholder="Num de población">
        <input type="submit" value="Afegir">
    </form>
</body>
</html>