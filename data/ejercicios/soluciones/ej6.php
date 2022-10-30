<?php

echo "<h3>Ejercicio 6</h3>";

//Creación y construcción del array con tres valores(jugadores de basket) usando la modalidad array()
$jugadoresBasket = array("Pau Gasol","Marc Gasol","Rudy Fernández");

//Se añade al array ya creado un valor usando el nombre de la varible con []
$jugadoresBasket[] = "Ricky Rubio";

//Se añade el quinto y ultimo jugador
$jugadoresBasket[] = "Sergio Llull";

echo "a) Impresión del array indicando sólo los nombres:";
echo "<br>Jugadores del equipo de basket: ";
foreach ($jugadoresBasket as $jugador){
    echo "<ul>";
    echo "<li>". $jugador . "</li>";
    echo "</ul>";
}


echo "<hr> b) Impresión del array indicando posicion y el nombre del elemento en el array";
echo "<br>Jugadores del equipo de basket: ";
foreach ($jugadoresBasket as $posicion=>$nombre){
    echo "<ul>";
    echo "<li>" . $posicion . ": " . $nombre . "</li>";
    echo "</ul>";
}