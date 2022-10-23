<?php

echo "<h3>Ejercicio 6</h3>";

$jugadoresBasket = array("Pau Gasol","Marc Gasol","Maria");
$jugadoresBasket[] = "Juan";
$jugadoresBasket[] ="Luis";

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