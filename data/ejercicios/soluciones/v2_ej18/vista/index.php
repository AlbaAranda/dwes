<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h3>Eercicio 18</h3>
    <h3>Formulario de login</h3>
    <form name="formulario18" method="post">
        <p>
            <label for="usuario">Introduce usuario: </label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="password">Introduce contraseña: </label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>

<?php
    if(isset($_COOKIE["usuario"])){
        header("Location: ?method=home");
    }
?>