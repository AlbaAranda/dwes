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
                echo "<br>*El campo nombre es obligatorio";
            }
        }
    ?>
    <form name="miniformu" action="" method="post" >
        <h2>Formulario</h2>
        <p>
            <label for="nombre">Nombre: </label>
            <?php
                if($esvalido){
                    echo '<input type="text" name="nombre" id="nombre">';
                }
                else{
                    echo '<input type="text" name="nombre" id="nombre" placeholder="El valor anterior no es válido">';
                }
            ?>
           
            
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form>
    
</body>
</html