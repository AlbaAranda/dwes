<?php   
    echo "<h3>Ejercicio 10</h3>";

    //Array asociativo: se asocian claves de tipo string a sus correspondientes valores para referenciarlos
    $jugadoresBasket = array(
        'base' => 'Pau Gasol',
        'escolta' => 'Marc Gasol',
        'alero' => 'Rudy Fernádez',
        'alapivot' => 'Ricky Rubio',
        'pivot' => 'Sergio Llull'
    );

    //Se recorre el array con un blucle foreach  de tipo clave=>valor y se va mostrando con echo y un salto de línea
    foreach ($jugadoresBasket as $posicion=>$nombre){
        echo $posicion . ": " . $nombre . '<br>';
    }