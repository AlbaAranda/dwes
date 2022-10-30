<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $esvalido = true;

        if (isset($_POST['envio'])) {
            $nombre = $_POST['nombre'];
            
            //strlen para comprobar que en nombre se ha introducido una cadena mayor o igual a 3 caracteres
            if (!empty($nombre) && strlen($nombre) >= 3) {
                
                echo "<br>Bienvenido " . $nombre;
            } 
            else {
                $esvalido= false;
                
            }
        }
    ?>
    <form name="miniformu" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <h2>Formulario</h2>
        <p>
            <label for="nombre">Nombre: </label>

            <!-- Con el valor de value se muestra siempre el valor de nombre-->
            <input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre']; ?>">

            <!-- Se pone aquí este codigo de php para que en el caso de que el campo nombre no sea se muestre el texto debajo del input -->
            <?php
                if(!$esvalido){
                   
                    echo "<br>*El campo nombre es obligatorio. El valor anterior no es válido";
                }
            ?> 
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
    
</body>
</html