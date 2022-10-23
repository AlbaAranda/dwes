<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    </head>
</head>
<body>
    <?php
    define('FILAS', 10);
    define('NUMERO', 8);
    
    echo "<table border=1>";

    for ($fila = 1; $fila <= FILAS; $fila++) {
        if ($fila % 2 == 0){
            echo "<tr bgcolor = gainsboro>";
        }
        else{
            echo "<tr>";
        }
        echo "<td> " . NUMERO . "<td>";
        echo "<td>" . "*" . "<td>";
        echo "<td>" . $fila . "</td>";
        echo "<td>" . "=" . "</td>";
        echo "<td>" . NUMERO * $fila . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html