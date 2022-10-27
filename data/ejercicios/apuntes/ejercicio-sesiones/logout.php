<?php
    session_start(); //unirme a la sesion

    //echo "<h2>Cerrando sesion</h2>";   NO SE PUEDE PONER AQUI UN ECHO 
    $_SESSION = array();
    session_destroy();
    setcookie(session_name(),"",time()-7200, '/');
    
    //echo "<h2>Cerrando sesion</h2>";
    //echo '<a href="login.php">Pagina de login</a>';

    header("Location: login.php");