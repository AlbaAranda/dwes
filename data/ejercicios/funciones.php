<?php

$var1= 6;
$var2 = 7;

function suma($a, $b){
    global $var1;
    global $var2;
    $var1= 99;
    $var2= 100;
    
    echo "<br>La variable dentro de la funcion var1  y var2 son: " . $var1 . " y " . $var2;

    //definicion variables estatica:
        //variable estatica se guarda el valor aunque acabe la funcion
    static $varestatica = 0;
    echo "<br> El valor de la var estatica s: " . $varestatica;
    $varestatica++;
    return $a + $b;
}

echo "<br>La variable a y b son : " . $a . " y " . $b;
echo "<br> La variable FUERA var1 y var2 son: " . $var1 . " y " . $var2;

echo "<br>LLamada a la suma 1 vez: " . suma(3,5);
echo "<br>LLamada a la suma 2 vez: " . suma(3,5);
echo "<br>LLamada a la suma 3 vez: " . suma(3,5);


//paso de parametros por valor o por referencia(variable)
function restar(&$var3, $var4){
    $var3--;
    echo "<br> var 3 vale" . $var3;
    
}
$var3= 8;
$var4= 3;
echo "<br>LLamada por valor: " . restar($var3, 6);