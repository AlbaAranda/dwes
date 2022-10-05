<?php
$mihost = $_SERVER['HTTP_HOST'];
echo "<br>El host al que va la peticion es: " . $mihost;

/* mostrar aqui:
    - el nombre dle servidor web
    - el lenguaje
    - el nombre de la pagina actual que realiza la solicitud
    - el tipo de navegador que realiza la solicitud
*/

$nombreServer = $_SERVER['SERVER_NAME'];
echo "<br> El nombre del servidor web es: " . $nombreServer;

$lenguaje = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br>El lenguaje / idioma es: " . $lenguaje;

echo "<br> Nombre pagina actual: " . $_SERVER['PHP_SELF'];

echo "<br> El tipo de navegador que realiza la solicitud: " . $_SERVER['HTTP_USER_AGENT'];

