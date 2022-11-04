<?php   
    if(isset($_COOKIE["usuario"]) && isset($_COOKIE["password"])){
        //Existen cookies
        $mensajeInicial = "<br>Bienvenido a la web " . $_POST["usuario"];
        echo $mensajeInicial;
        echo "<br><a href=\"logout.php\">Cerrar Sesión</a>";
    }

    else{
        //No existen cookies 
        echo "<h3>Debe introducir algunos datos</h3>";
        echo "<a href=\"login.html\">Volver al inicio</a>";
    }