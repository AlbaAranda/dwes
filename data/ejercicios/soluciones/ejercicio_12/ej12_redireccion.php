<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <form name="miniformu" method="post" >
        <h2>Formulario</h2>
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
            
        </p>
        <p></p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>

<?php
    if (isset($_POST['envio'])) {
        $nombre = $_POST['nombre'];
        if (!empty($nombre)) {

            echo "<br>Bienvenido " . $nombre;
        } 
        else {
            echo "<br>*El campo nombre es obligatorio";
        }
    }
?>