<?php   
    if(isset($_COOKIE['usuario']) && isset($_COOKIE['password'])){
        //Medida de seguridad IMPORTANTE, para quien cargue la pagina (visualizaopciones.php) a mano no pueda hacer "travesuras"
        //Borrar las cookies y redirigir a inicio (login.php)
        setcookie("usuario",'',time()-7200);
        setcookie("password",'',time()-7200);
        header("Location: login.html");
        exit();
    }