<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    </head>
</head>
<body>
    <h3>Ejercicio 2</h3>
    <?php
    //constante usada en el bucle for para dar 10 vueltas (para multiplicar el 8 desde 1 hasta 10)
    define('FILAS', 10);
    //constante usada para hacer la tabla de multiplica del número 8
    define('NUMERO', 8);
    
    //se define la tabla 
    echo "<table border=1>";

    //bucle for para sacar 10 filas con la tabl de multiplicar del 8. Se inicia en 1 hasta el valor de FILA que es 10
    for ($fila = 1; $fila <= FILAS; $fila++) {
        //si la fila es par se imprime con color
        if ($fila % 2 == 0){
            echo "<tr bgcolor = gainsboro>";
        }
        //si la fila es impar se inicia la fila sin color
        else{
            echo "<tr>";
        }
        //primera columna con el valor de la constante NUMERO (el 8)
        echo "<td> " . NUMERO . "<td>";
        //segunda columna con el símbolo de multiplicar
        echo "<td>" . "*" . "<td>";
        //tercera columna con los número desde el hasta 10
        echo "<td>" . $fila . "</td>";
        //cuarta columna con el símbolo de =
        echo "<td>" . "=" . "</td>";
        //ultima columna con el resultado de la multiplicacion
        echo "<td>" . NUMERO * $fila . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>