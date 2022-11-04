<?php

echo "<h3>Ejercicio 6</h3>";

//Creación y construcción del array con tres valores(jugadores de basket) usando la modalidad array()
$jugadoresBasket = array("Pau Gasol","Marc Gasol","Rudy Fernández");

//Se añade al array ya creado un valor usando el nombre de la varible con []
$jugadoresBasket[] = "Ricky Rubio";

//Se añade el quinto y ultimo jugador
$jugadoresBasket[] = "Sergio Llull";

echo "<strong>a) Impresión del array indicando sólo los nombres</strong>";
echo "<br><br>Jugadores del equipo de basket: ";

//bucle foreach para recorrer el array de $jugadoresBasket e ir guardando en cada vuelta el valor en la variable $jugador
//cada valor del array se imprime en formato de lista desordenada
foreach ($jugadoresBasket as $jugador){
    echo "<ul>";
    echo "<li>". $jugador . "</li>";
    echo "</ul>";
}


echo "<hr><strong>b) Impresión del array indicando posicion y el nombre del elemento en el array </strong>";
echo "<br><br>Jugadores del equipo de basket: ";

//bucle foreach para recorrer el array e ir guardando en cada iteración tanto la posición como el valor en la variable $posicion y $nombre respectivamente
//como en la opción anterior se imprime en formato de lista desordenada
foreach ($jugadoresBasket as $posicion=>$nombre){
    echo "<ul>";
    echo "<li>" . $posicion . ": " . $nombre . "</li>";
    echo "</ul>";
}