<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <!-- Con lo escrito en el action como valor, la información del formulario se redirige a sí mismo y  se evita la inyeccion de xml -->
    <form name="miniformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <h2>Ejercicio 12. Formulario</h2>
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">  
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
</body>
</html>

<?php

    //si está definido el input envio:
    if (isset($_POST['envio'])) {
        //en la variable $nombre se guarda el valor del input nombre
        $nombre = $_POST['nombre'];
        //si la variable $nombre no está vacía, debajo del formulario se imprime una cadena junto con el valor de la variable $nombre
        if (!empty($nombre)) {

            echo "<br>Bienvenido " . $nombre;
        } 
        // si variable $nombre está vacía se indica en el formulario se indica en el formulario que el campo nombre es obligatorio
        else {
            echo "<br>*El campo nombre es obligatorio";
        }
    }
?>
