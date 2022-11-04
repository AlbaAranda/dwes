<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <?php
        //se declaran y definen las variables en php
        $nombre ="alba";
        $apellidos="aranda gomez";
        $edad=31;
        $telefono= 666666666;
        $email= "alumno@gmail.com";

        //se crea la tabla 
        echo "<table border=2>";
        //se crea la fila
        echo "<tr>";
        //se define la primera celda de la primera fila con su contenido
        echo "<td>Nombre</td>";
        //se define la segunda celda de la primera fila con el contenido de la variable nombre
        echo "<td>" . $nombre . "</td>";
        //se cierra la primera fila
        echo "</tr>";

        //el resto de filas y celdas se realizan igual que la primera
        //se usa indistintamente echo y print y se aprecia que se muestra igual.
        //Igualmente se usan indistintamente comillas dobles y simples y el resultado es el mismo 
        print "<tr>";
        print "<td>Apellidos</td>";
        print "<td>" . $apellidos . "</td>";
        print "</tr>";

        echo "<tr>";
        print "<td>Edad</td>";
        echo '<td>' . $edad . '</td>';
        print "</tr>";

        echo '<tr>';
        print '<td>Teléfono</td>';
        print '<td>' . $telefono . '</td>';
        echo '</tr>';

        echo "<tr>";
        echo "<td>Email</td>";
        echo '<td>' . $email . '</td>';
        echo "</tr>";

        echo "</table>";
    ?>
</body>
</html>



<!--SOLUCIÓN ALTERNATIVA DEL EJERCICIO: 
    En este caso la tabla en lugar de imprimirla con echo se hace directamente en el html y dentro de cada celda se introducen los valores de las variables
    con php. Para ello se usan tanto echo como print, pero en este caso no sería necesario concatenar -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <br><br>
    <h4>Solucion Alternativa (se muestra exactamente igual)</h4>
    <?php
        //se declaran y definen las variables en php
        $nombre ="alba";
        $apellidos="aranda gomez";
        $edad=31;
        $telefono= 666666666;
        $email= "alumno@gmail.com";
    ?>
    <!--Se construye la tabla -->
    <table border="2">
        <tr>
        <td>Nombre</td>
        <td><?php echo $nombre?></td>
        </tr>  
        <tr>
        <td>Apellidos</td>
        <td><?php echo $apellidos?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $edad?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php print $telefono?></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><?php print $email?></td>
        </tr>
    </table>
</body>
</html>

