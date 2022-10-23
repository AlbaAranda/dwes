<?php
    //establecer una cookie

    setcookie(nombre, valor, timeexpired);

    // leer el valor 
    $_COOKIE["nombre"];

    //borrar 
    setcookie(nombre, valor, timeexpired-mutchotiempo);

    //redireccionar
    header('Location: miotrapagina.php');