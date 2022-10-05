<?php
  
  $var1 = 5;
  $var2 = "7";
  $var2 = (int)"7";
  $var3 = (string)8;
  $var4 = "";
  $var5;

  /*notacion de variables:
  $camelCase   */
  
    echo "Var1 es del tipo : " . gettype($var1);

    echo "La variable 3 esta definida : ?" .isset($var3) . "<br>";
    echo "<br>La variable 4 esta definida : ?" .isset($var4);
    echo "<br>La variable 5 esta definida : ?" .isset($var5);

    echo "La variable 3 esta vacia: ?" .empty($var3) . "<br>";
    echo "<br>La variable 4 esta vacia : ?" .empty($var4);
    echo "<br>La variable 5 esta vacia : ?" .empty($var5);

    /* ambos metodos devuelve 1 para true y 0 para false*/

    const MICONST = 100;
    echo "La constante es : " . MICONST;

    define('OTRACONST',200);

    //las constantes no tienen dolar


    $num1 = 3;
    $num2 = "3";

    if($num1 == $num2){
        echo "<br> Son iguales";
    }
    else{
        echo "<br> Son diferentes";
    }
    //== si tiene el mismo contenido (ej: los dos 3)

    if($num1 === $num2){
        echo "<br> Son iguales";
    }
    else{
        echo "<br> Son diferentes";
    }
    //Si son iguales tanto en tipo de variable como contenido (ej los dos son 3 y integer)



  /* variablesa [A-Z,a-z,0-9]
    - no pueden comenzar con números (si puede contenerlos), ni contener caracteres especiales
    (como @,#, ?, -)
    - si que puede contener _ (pero no se recomienda empezar por _)

    Casesensitive:
        JAVA-> si
        PHP -> a medias:
                - las variables si
                    $MIVAR diferente de $mivar
                - los metodos no
                    metodo1 = METODO1 = Metodo1
-----------------------------------
/* Comentario en bloque*/
//Comentario en una sola linea
/*TIPOS DE DATOS:

simples: int, string, boolean, float
complejos: arrays, objetos,  ficheros


Tipado de lenguaje de programacion (si hay que declar el tipo de variable):
    -Fuerte: JAVA
    - Debil: php


OPERADORES:
=, <, >, ... !=, <>, ==, ===, <=>


 if(){} ; if(){} else{}


while(){}; do{} while();

foreach($array as $elemento);

$miarray
for($i=0; $i<10; $i++) {
    $miarray[$i];
}

Inclusion de codgio de un fichero en otro:

include, include once, require, require_once;

*/
