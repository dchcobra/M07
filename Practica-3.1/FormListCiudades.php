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
    <title>Form</title>
</head>
<body>
    <center>
        <h1>SELECCIONA EL PAIS PARA VER LOS PAISES</h1>
        <form action="./CiudadesFromCountry.php" method="POST">
            <select name="pais">
            <?php
                while($country = $countries->fetch()){
                    echo "<option value=" . $country['Code'] .">" . $country['Name'] . "</option>";
                }
            ?>
            </select>
            <input type="submit" value="Añadir">
        </form>
    </center>
</body>
</html>
