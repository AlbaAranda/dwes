<?php
    echo "<h3>Ejercicio 9</h3>";

    //Se crea un array vacio
    $paises = array();

    //Se introduce valores de uno en uno en el array creado (esta vez sin indicar la posición entre los corchetes)
    $paises[] = "España";
    $paises[] = "Portugal";
    $paises[] = "Francia";
    $paises[] = "Alemania";

    //En este caso se usa print_r para mostrar el contenido del array en formato clave => valor
    echo "<pre>"; 
    print_r($paises);
    echo "</pre>";
