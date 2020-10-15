<?php
    session_start();

    echo "<p> Página 1 </p>";

    if( isset($_SESSION["producte"])) {
        echo "<p>Producte: " . $_SESSION["producte"] . "</p>\n";
    } else {
        echo "No hay ningun producto";
        $_SESSION["producte"] = "Manzana";
    }
?>