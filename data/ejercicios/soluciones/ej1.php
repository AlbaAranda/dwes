<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>

    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $nombre ="alba";
        $apellidos="aranda gomez";
        $edad=31;
        $telefono= 666666666;
        $email= "alumno@gmail.com";

    ?>
    <table style="border: 1px solid black;">
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

echo "<table>";
echo "<tr>";
echo "<td>Nombre</td>";
echo "<td>" . $nombre . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Apellidos</td>";
echo "<td> $apellidos  </td>";
echo "</tr>";

echo "<tr>";
echo "<td>Edad</td>";
echo '<td>' . $edad . '</td>';
echo "</tr>";

echo "<tr>";
echo "<td>Teléfono</td>";
echo '<td>' . $telefono . '</td>';
echo "</tr>";

echo "<tr>";
echo "<td>Email</td>";
echo '<td>' . $email . '</td>';
echo "</tr>";

echo "</table>";


