<?php 
    $hostname = "localhost";
    $dbname = "world";
    $username = "root";  
    $password = "";  
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    if(!$pdo){
        systemMSG('error', 'No se ha conectado a la base de datos!');
    }
    $countries = $pdo->prepare("SELECT country.Name as 'NombrePais', city.Name as 'NombreCiudad'  FROM country, city");
    $countries->execute();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
<table>
<?php
    echo "<tr>";
    echo "<th>Pais</th>";
    echo "<tr>";

    while($country = $countries->fetch()){
        echo "<tr>";
        echo "<td>" . $country['NombrePais'] . "</td>";
        echo "</tr>";
    }
?>
</table>

</ul>
</body>
</html>