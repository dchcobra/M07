<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>  
        <?php
            echo '<table border="1px"> <tr>';
            echo '<th>KEY</th> <th>VALUE</th> <tr>';
            foreach ($_SERVER as $x => $y) {
                echo "<td> $x </td> <td> $y </td> </tr>";
            }
            echo '</tr> </table>';
        ?>
    </div>
    
</body>
</html>