<?php
// cada cookie es una array asociativo  --> $_COOKIE
//para el tiempo de experiacion 

// time(); //epoch time  -> devuelve segundos desde 1970  == strtotime(now)

//strtotime();

//DEFINIR UNA COOKIE
//nombre, valor y duración
//se ponen siempren antes de mostrar nada en pantalla, ya que van en la cabecera

// setcookie("primeracookie", "aceptado", time() + (24*60*60)); // la cookie dura un dia 

// setcookie("primeracookie", "aceptado", strtotime("+1 week")); // la cookie dura hasta una semana

$miarray = ["hola",25,[1,3,5]];
//con serialize conviertes un array en una cadena 
$infoguardar = serialize($miarray);
setcookie("primeracookie", "aceptado", strtotime("+1 minute"));
setcookie("segundacookie", $infoguardar, time()+600);

// Borrar una cookie: poniendo la funcion de la hora en pasado, en negativo 
setcookie("primeracookier", "aceptado", time() -120);

//caduca la cookie, no la elimina
//unset();

echo "<h1>Mi primera cookie</h1>";
echo "<br>Valor de la cookie uno: " . $_COOKIE["primeracookie"];
echo "<pre>";
var_dump(unserialize($_COOKIE["segundacookie"]));
echo "<br>Número de cookies creadas " . count($_COOKIE);

