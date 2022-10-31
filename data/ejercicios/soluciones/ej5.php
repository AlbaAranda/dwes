<?php


echo "<h3>Ejercicio 5</h3>";

const NUMERO = 169;

$cantidadDiv = 0;

echo "<br>Divisores de " . NUMERO . ": ";

//Para dividir un número desde 1 hasta sí mismo (número a número) se crea un bucle for que comience en 1 e itere hasta llegar al número indicado por constante
for($divisor=1; $divisor<= NUMERO; $divisor++){

    //Si el resto del número entre el divisor es 0, entonces el divisor es un número divisible del número establecido por constante y se imprime en un echo con un espacio
    //Si lo anterior ocurre la variable $cantidadDiv se incrementa en uno, para llevar el recuento de la cantidad de divisores del número indicado
    if(NUMERO%$divisor == 0){
        echo $divisor . "&nbsp";
        $cantidadDiv++;
    }
}

//Si la cantidad de divisores del numero establecido por constantes es solo 2 (que sería el 1 y el propio número), entonces el número es un número primo
if($cantidadDiv == 2){
    echo "<br>El número " . NUMERO . " es un número primo, ya que solamente es divisible por 1 y por sí mismo.";
}