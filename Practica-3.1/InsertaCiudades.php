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
    $insert = $pdo->prepare("INSERT INTO city VALUES (null, '$_POST[ciudad]', '$_POST[pais]', '$_POST[distrito]', $_POST[poblacion]);");
    $insert->execute();

    echo "Funciona correctamente";
    
?>