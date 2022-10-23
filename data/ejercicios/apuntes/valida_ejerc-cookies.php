<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Ejercicio cookies: </h3>

    <?php
        if (isset($_GET['envio'])) {
            if (!empty($_POST['idiomas'])) {
                $idioma = $_POST['idiomas'];
                if($idioma == "Espagnol"){
                    echo "<br>Bienvenido querido usuario. ";
                }
                elseif($idioma == "Ingles"){
                    echo "<br>Welcome dear user.";
                }
                else {
                    echo "<br>Willkommen sehr geehrter Nutzer. ";
                }
            } 
            else {
                echo "<br> <h3>No has seleccionado ningún idioma</h3>";
            }
        }

        if (isset($_POST['envio'])) {
            if (!empty($_POST['coches'])) {
                $coche = $_POST['coches'];
                if($coche == "Ford"){
                    echo "<br>Marca del coche preferido " . $coche;
                }
                elseif($coche == "Renault"){
                    echo "<br>Marca del coche preferido " . $coche;
                }
                else {
                    echo "<br>Marca del coche preferido " . $coche;
                }
            } 
            else {
                echo "<br> <h3>No has seleccionado ninguna marca de coche</h3>";
            }
        }
    ?>
</body>

</html>