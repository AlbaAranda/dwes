<?php

echo "<h3>Ejercicio 4</h3>";

$num1 = 0;
$num2 = 1;
//variable donde se guarda el resultado de sumar los dos números anteriores
$numSuma = 0; 

echo "10 primeros números de la Sucesión de Fibonacci: ";

// Inicio del bucle para la sucesión de Fibonacci
//Se comienza el bucle for en 2, ya que en la primera iteración se van a imprimir los números 0 y 1 que están recogidos en las variables $num1 y $num2 respectivamente
for($i=2; $i<=10; $i++){ 
    if($i == 2){    // Obligamos a imprimir en la primera iteración los dos primeros números almacenados en $num1 y $num2
        echo $num1;
        echo ",&nbsp" . $num2; //aqui aparte del valor del número se imprime con anteriormente una coma con un espacio para que visualmente se vea mejor cada número
    }

    //Continuación de la sucesión en la iteración 3 (a partir del tercer número a imprimir)
    else{ 
        $numSuma = $num1 + $num2;   // almacenamos en $numSuma el nuevo número a imprimir de la sucesión (resultado de sumar $num1 y $num2)
        /* tanto num1 como num2 debe dar un salto, ya que los dos últimos números a sumar cambian para la siguiente iteración.
        Por eso en cada iteración, $num1 tiene que valer el siguiente número de la sucesión( que es el valor de $num2) y lo mismo para $num2 (su siguiente 
        es el número almacenado en $numSuma)*/
        $num1 = $num2;  
        $num2 = $numSuma;

        //Imprime los número de la sucesión del tercero hasta el décimo
        echo ",&nbsp" . $numSuma; 
    }
}