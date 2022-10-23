<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        $nombre ="alba";
        $apellidos="aranda gomez";
        $edad=31;
        $telefono= 666666666;
        $email= "alumno@gmail.com";

    ?>
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
    <br><br>
</body>
</html>

<?php
//Solución del punto 2 del ejercicio

echo "<table border=2>";
echo "<tr>";
echo "<td>Nombre</td>";
echo "<td>" . $nombre . "</td>";
echo "</tr>";

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