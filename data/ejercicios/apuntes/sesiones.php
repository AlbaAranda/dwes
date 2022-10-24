<?php

// Se guarda la informacion de las sesiones en el servidor (no en el cliente como las cookies)
//la info se las sesiones se guardan en un array  (en las cookies se guardan en otro array con $_COOKIE y su nombre)
//Se apoyan en una cookie para recuperar la info 

//COMO Crear o unirse a una sesion ya creada 
//pasa como las cookies, no se pueden poner antes del session_start

session_start();


//$_SESSION ["NOMBRE_Variable];

if(!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 0;
}

else{
    $_SESSION["contador"]++;
}

//esta sesion caduca al cerrrar el navegador
echo "He visitado la pagina " . $_SESSION["contador"] . " veces.";


echo "<a href=\"sesion2.php\">Siguiente pagina</a>";