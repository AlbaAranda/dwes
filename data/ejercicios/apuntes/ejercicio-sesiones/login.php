<?php 
  //usuario: 1234
  //adimin : 4567

  function comprobarcrendenciales($nombreusu, $clave){
    if($nombreusu === "usuario" && $clave === "1234"){
      $credenciales["nombreusu"] = "usuario";
      $crendenciales["rol"] = 0;
      return $credenciales;
    }

    if($nombreusu === "admin" && $clave == "4567"){
      $credenciales["nombreusu"] = "usuario";
      $crendenciales["rol" ]= 1;
      return $credenciales;
    }
    return false;
  }

  if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["envio"])){
      $credentials = comprobarcrendenciales($_POST["nombre"], $_POST["passwd"]); // en la variable guardas el array que devuelve la funcion si funciona bien , o falso
      if($credentials === false){
        $error = 1;
      }
      else{
        session_start();
        $_SESSION["loginok"] = $credentials;
        header("Location: principal.php");
      }
    }
  }
?>

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
  <h2>Pagina de acceso</h2>
  <br>
  <?php 
    if(isset($error) && $error == 1){
      echo "<p><font color=\"red\">Credenciales inválidas.</font></p>";
    }
  ?>
   <!-- Con lo puesto en el action evitas la inyeccion de xml -->
  <form name="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nombre">Introduce Usuario: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="password">Introduce la contraseña: </label>
        <input type="password" name="passwd" id="passwd">
        <br><br>
        <input type="submit" name="envio" id="envio" value="Enviar Datos">
  </form>

</body>
</html>
   
  
  
  

