<?php
    echo "<h3>Ejercicio 8</h3>";

    //Se crea un array vacio
    $jugadoresBasket = [];

    //Se introduce valores en el array creado de uno en uno indicando la posición en dicho array 
    $jugadoresBasket[0] = "Pau Gasol";
    $jugadoresBasket[1] = "Marc Gasol";
    $jugadoresBasket[2] = "Rudy Fernández";
    $jugadoresBasket[3] = "Ricky Rubio";
    $jugadoresBasket[4] = "Sergio Llull";

    //Se imprime el array para comprobar que se han añadido los valores
    echo "<pre>";
    var_dump($jugadoresBasket);
    echo "</pre>";

    /*Al igual que en la segunda parte del ejercicio 6, en este ejercicio se comprueba también en formato lista desordenada que se imprimen los
    valores del array recorriéndolo con un bucle foreach simple primero y después con un bucle foreach clave=>valor*/
    echo "<br><strong>a) Impresión del array indicando sólo los nombres</strong>";
    echo "<br>Jugadores del equipo de basket: ";

    foreach ($jugadoresBasket as $jugador){
        echo "<ul>";
        echo "<li>". $jugador . "</li>";
        echo "</ul>";
    }

    echo "<hr><strong> b) Impresión del array indicando posicion y el nombre del elemento en el array</strong>";
    echo "<br>Jugadores del equipo de basket: ";

    foreach ($jugadoresBasket as $posicion=>$nombre){
        echo "<ul>";
        echo "<li>" . $posicion . ": " . $nombre . "</li>";
        echo "</ul>";
    }