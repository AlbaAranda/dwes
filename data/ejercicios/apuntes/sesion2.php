<?php
    session_start();  //creo o me uno a la sesion

    //se destruye la info de la session pero la cookie permanece (tampoco destruye las variables globales)
    $_SESSION = array();
    session_destroy();
    //con esto se borraria la cookie
    setcookie(session_name(),'',time()-7200,'/'); // el ultimo valor es para que funcione en el navegador chrome

    echo "La pagina se ha cargado " . $_SESSION["contador"] . " veces.";

    echo "Producto : " .  $_SESSION["producto"]; 