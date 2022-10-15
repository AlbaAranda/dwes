
<?php

    include_once "manejadorexcepcion.php";
//calcula el inverso del número pasado como parametro

function inverso($num){
    if($num == 0){
        throw new MiExcepcion("No se puede dividir por cero");
    }
    return 1/$num;
}

try{
    echo "<br>El inverso del número 5 es: " . inverso(5);
}
catch(Exception $e){
    echo "<br>La razón de la excepción es: " . $e->getMessage();
}
finally{
    echo "<br>Esto siempre se ejecuta";
}

try{

    echo "<br> El inverso del número 0 es: " . inverso(0);
}

catch(MiExcepcion $e){
    echo "<br>La razón de la excepción es: " . $e->errorPersonalizado();
}
finally{
    echo "<br> Esto siempre se ejecuta";
}
