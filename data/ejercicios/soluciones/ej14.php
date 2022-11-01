<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <label for="operando1">Operando 1: </label>
            <input type="text" name="operando1" id="operando1">
        </p>
        <p>
            <label for="operando2">Operando 2:</label>
            <input type="text" name="operando2" id="operando2">
        </p>
        <p>
            <label>Operador </label>
            <select name="operador" id="operador">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form> 

    <?php
        if (isset($_POST['envio'])){
            $valor1 = $_POST['operando1'];
            $valor2 = $_POST['operando2'];
            $operador = $_POST['operador'];
            $resultado = null;

            //is_numeric() para comprobar que lo que se ha introducido en valor 1 y 2 es un número y no otro caracter o cadena vacia
            if (is_numeric($valor1) && is_numeric($valor2) && !empty($operador)){
                if ($operador == "suma"){
                    $resultado = $valor1 + $valor2;
                }
                elseif ($operador == "resta"){
                    $resultado = $valor1 - $valor2;
                    
                }
                elseif ($operador == "multiplicacion"){
                    $resultado = $valor1 * $valor2;

                }
                else {
                    if($valor2 == 0 ){
                        $resultado = "No se puede dividir entre 0";
                    }
                    else{
                        $resultado = $valor1 / $valor2;
                    }
                }

                echo "<br>" . $resultado;
            }
            
            /*este else no lo pide el enunciado del ejercicio, lo he puesto para comprobar que se reenvia el formulario si los datos 
            introducidos en $operando1 y $operando2 son incorrectos ( es decir si no se introduce nada o si se intruduce algo distinto
            a números*/
            else{
                echo "<br> Muestra de nuevo el formulario";
            }

        }
    ?>
</body>
</html>