<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h3>Ejercicio 14. Formulario como calculadora</h3>
    <!-- Con lo escrito en el action como valor, la información del formulario se redirige a sí mismo y  se evita la inyeccion de xml -->
    <form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>
            <!-- input del operando 1, donde se va introducir el primer valor para realizar la operación-->
            <label for="operando1">Operando 1: </label>
            <input type="text" name="operando1" id="operando1">
        </p>
        <p>
            <!--input del operando 2, donde se va introducir el segundo valor para realizar la operación -->
            <label for="operando2">Operando 2:</label>
            <input type="text" name="operando2" id="operando2">
        </p>
        <p>
            <!-- select para elegir el operador (+, -, *, /)-->
            <label>Operador </label>
            <select name="operador" id="operador">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
            </select>
        </p>
        <!--enviar los datos introducidos en el formulario -->
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
    </form> 

    <?php
        //si está difinido el input envio:
        if (isset($_POST['envio'])){
            //en la variable $valor1 se guarda el valor del input de operando1
            $valor1 = $_POST['operando1'];
            //en la variable $valor2 se guarda el valor del input de operando2
            $valor2 = $_POST['operando2'];
            //en la variable $operador se guarda el valor de la opción seleccionada como operador
            $operador = $_POST['operador'];
            //se inicia la variable resultado de la operanción ($resultado) como nula, así cada vez que se introduzcan datos nuevos no se acumula los resultados anteriores
            $resultado = null;

            //is_numeric() es una función para comprobar que lo que se ha introducido en $valor1 y $valor2 es un número y no otro caracter o cadena vacia
            /*si la variable $valor1 es un número y la variable $valor2 es un número y además la variable $operador no está vacía se realiza 
            lo que se especifica a continuación   */
            if (is_numeric($valor1) && is_numeric($valor2) && !empty($operador)){

                //si la variable $operador tiene el valor de suma, en la variable $resultado se guarda la suma de los dos valores 
                if ($operador == "suma"){
                    $resultado = $valor1 + $valor2;
                }
                //sino si la variable $operador tiene el valor de resta, en la variable $resultado se guarda la resta de los dos valores
                elseif ($operador == "resta"){
                    $resultado = $valor1 - $valor2;
                    
                }
                //sino si la variable $operador tiene el valor de multiplicación, en la variable $resultado se guarda la multiplicación de los dos valores
                elseif ($operador == "multiplicacion"){
                    $resultado = $valor1 * $valor2;

                }
                // sino $operador no tiene ninguno de los tres valores anteriores, por lo que vale división
                else {
                    /*en la calculadora del ordenador, cuando se intenta dividir entre 0, se muestra un error que indica que no se puede dividir entre 0
                     asi que si el segundo valor que se ha guardado en $valor2 es 0, en la variable $resultado se guarda dicho mensaje*/
                    if($valor2 == 0 ){
                        $resultado = "No se puede dividir entre 0";
                    }
                    //si $valor2 contiene un número distinto a 0, entonces en $resultado se guarda el valor de dividir $valor1 entre $valor2
                    else{
                        $resultado = $valor1 / $valor2;
                    }
                }
                //se imprime el resultado de la operación
                echo "<br> Resultado: " . $resultado;
            }
            
            /*este else no lo pide el enunciado del ejercicio, lo he puesto para comprobar que se reenvia el formulario si los datos 
            introducidos en $operando1 y $operando2 son incorrectos (es decir si no se introduce nada o si se intruduce algo distinto
            a números)*/
            else{
                echo "<br> Muestra de nuevo el formulario. No se han seleccionado datos o los datos son incorrectos";
            }
        }
    ?>
</body>
</html>