<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 16</title>
</head>
<body>
  <h3>Ejercicio 16</h3>
  <h3>Lista con formularios:</h3>
  <!-- Con lo escrito en el action como valor, la información del formulario se redirige a sí mismo y  se evita la inyeccion de xml -->
  <form name="formulario16" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    <!--Se crea un input de tipo de texto  cuyos valores se irán guardando en el array "nombres[]"-->
    <input type="text" name="nombres[]">

    <!--Botón para enviar los datos del input de tipo texto-->
    <input type="submit" value="Enviar Datos">
    <hr>
    <?php

    //si el array de nombre está definido, entra dentro del if y se crea una lista desordenada con echo '<ul>';
    if (isset($_POST['nombres'])) {
        echo "<ul>";

      //con un bucle foreach se recorre el array y en cada iteración se va guardando el valor en la variable $nombre
      foreach($_POST['nombres'] as $nombre) {

        /*el valor $nombre en cada iteración se recoge como valor de otro input (en value) para ir guardando esos valores en este input y que no se pierdan.
        Para evitar que se vaya mostrando todos los inputs(es decir, para que salgan ocultos) se declara de tipo "hidden"*/
        echo '<input type="hidden" name="nombres[]" value="' . $nombre . '" ><br>';

        //cada valor del array recogido en la variable $nombre se va mostrando en formato lista
        echo "<li> $nombre</li>";
      }
      echo "</ul>";
    }
    ?>
  </form>
</body>
</html>
