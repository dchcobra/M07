<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
    <center>
    <?php 
        $lista = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
        $tmp = 1;
        $primerdia = 4;
        $ndia = 1;
        echo '<table border="1px"> <tr>';
        foreach ($lista as $dia) {
            echo "<th>$dia</th>";
        };
        foreach ($lista as $num) {
            echo "</tr>";
            foreach ($lista as $num) {
                echo "<td>id: $tmp";
                if ($tmp >= $primerdia) {
                             echo "<br>dia: $ndia </td>";
                        $ndia = $ndia + 1;
                }
                $tmp = $tmp + 1;
                if ($ndia > 31) {
                    die;
                }
            }
        }
        
    ?>
    </center>
   <table></table>
</body>
</html>