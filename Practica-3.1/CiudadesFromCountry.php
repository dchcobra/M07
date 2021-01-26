<?php 
    $hostname = "localhost";
    $dbname = "world";
    $username = "root";  
    $password = "";  
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    if(!$pdo){
        systemMSG('error', 'No se ha conectado a la base de datos!');
    }
    $countries = $pdo->prepare("SELECT city.Name as 'Nombre', country.Name as 'NombrePais', country.Code as 'codigo' FROM city, country WHERE country.Code LIKE '$_POST[pais]' AND city.CountryCode = country.Code;");
    $countries->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
<ul>
    <?php

    $count = 1;
    while($country = $countries->fetch()){
        if ($count == 1) {
            echo "<h1>CIUDADES DE " . $country['NombrePais'] . "</h1>";
            $count = $count - 1;
        }
        echo "<li>" . $country['Nombre'] . "</li>";
    }
    ?>
</ul>
    
</body>
</html>