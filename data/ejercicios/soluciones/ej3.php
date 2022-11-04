<?php
echo "<h3>Ejercicio 3</h3>";
echo "<br>Los número divisibles por 3 desde el 1 hasta el 10 son: ";

//bucle for que se inicia en el número 1 hasta llegar al 10
for($numero=1; $numero<= 10; $numero++){
    //si el resto de dividir el número entre 3 es 0, entonces se imprime con echo el número que es divisible mas un espacio con "&nbsp
    if ($numero%3 == 0){
        echo $numero . "&nbsp";
    }
}