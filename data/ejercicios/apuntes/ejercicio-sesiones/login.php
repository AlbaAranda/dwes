<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--Crear un entorno de login.
    - La pagina de login: usuario y password (login.php)
        - usuario= usuario
          password= 1234 => ok, rol =0

        - usuario= admin
          password= 4567  => ok, rol =1

        
        - Si login ok => principal.php . Bienvenido usuario

            - Enlace logout.php

        -logout.php => cerrar la sesion y enlace/redireccion a login.php
    
-->
</head>
<body>
  <form name="formulario" action="/autoriza.php" method="post">
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>
        <p>
</body>
</html>
   
  
  
  

