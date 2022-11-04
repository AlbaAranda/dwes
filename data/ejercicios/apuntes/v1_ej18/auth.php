<?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST['usuario']) && !isset($_COOKIE["usuario"])) { //si ya está establecida la cookie no vuelve a entrar por aqui
             setcookie("usuario",$_POST["usuario"],time()+3600);
        }
        

        if(!empty($_POST["password"]) && !isset($_COOKIE["password"])){
             setcookie("password",$_POST["password"],time()+3600);
        }

        if(!empty($_POST["usuario"]) && !empty($_POST["password"])){
            //Redirige a la página home.php
            header("Location: home.php");
            exit(); //Para que no se ejecute ningun otro codigo
        }
    }

    /*else{
        //Medida de seguridad IMPORTANTE, para quien cargue la pagina (visualizaopciones.php) a mano no pueda hacer "travesuras"
        //Borrar las cookies y redirigir a inicio (webcookies.html)
        setcookie("idiomas",'',time()-7200);
        setcookie("marca",'',time()-7200);
        header("Location: webcookies.html");
        exit();
    } */
 ?>
