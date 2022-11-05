<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h3>Ejercicio 13. Formulario</h3>
    <?php
        //se crea una variable de tipo boolean cuyo valor es true
        $esvalido = true;

        //si está definido el input de envio se guarda en la variable $nombre el contenido del input nombre
        if (isset($_POST['envio'])) {
            $nombre = $_POST['nombre'];
            
            //strlen es una función para comprobar que la variable $nombre contiene una cadena igual o mayor a 3 caracteres
            /*entonces si la variable $nombre no está vacía y además su contenido es igual o mayor a 3 caracteres se imprime una cadena junto al valor 
            de la variable $nombre */
            if (!empty($nombre) && strlen($nombre) >= 3) {
                
                echo "<br>Bienvenido " . $nombre;
            } 
            /*si la variable $nombre está vacía o su contenido es inferior a 3 caracteres la variable $esvalido se iguala false, por no lo que no se 
             por lo que no se imprimirá el mensaje anterior   */
            else {
                $esvalido= false;
                
            }
        }
    ?>
    <!-- Con lo escrito en el action como valor, la información del formulario se redirige a sí mismo y  se evita la inyeccion de xml -->
    <form name="miniformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <p>
            <label for="nombre">Nombre: </label>

            <!-- Con el valor dado a value se muestra siempre en el input el valor de nombre-->
            <input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre']; ?>">

            <!-- Se escribe aquí este codigo de php para que en el caso de que el campo nombre no cumpla las características requeridas 
            se muestre debajo del input el texto indicado en echo -->
            <?php
                //si la variable $esvalido es false se imprime la cadena que hay en echo
                if(!$esvalido){
                   
                    echo "<br>*El campo nombre es obligatorio. El valor anterior no es válido";
                }
            ?> 
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
    
</body>
</html