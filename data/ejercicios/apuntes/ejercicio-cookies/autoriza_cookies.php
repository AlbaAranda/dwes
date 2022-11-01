<?php
    //IMPORTANTE: poner las COOKIES SIEMPRE al principio de todo (delante del body)
        if (isset($_POST['envio'])) {
            if (!empty($_POST['idiomas']) && !isset($_COOKIE["idiomas"])) { //si ya está establecida la cookie no vuelve a entrar por aqui
                setcookie("idiomas",$_POST["idiomas"],time()+3600);
            }
        

            if(!empty($_POST["marca"]) && !isset($_COOKIE["marca"])){
                setcookie("marca",$_POST["marca"],time()+3600);
            }

            if(!empty($_POST["idiomas"]) && !empty($_POST["marca"])){
                //Redirige a la pag visualizaopciones
                header("Location: visualizaopciones.php");
                exit(); // o die(); Para que no se ejecute ningun otro codigo
            }
        }

        else{
            //Medida de seguridad IMPORTANTE, para quien cargue la pagina (visualizaopciones.php) a mano no pueda hacer "travesuras"
            //Borrar las cookies y redirigir a inicio (webcookies.html)
            setcookie("idiomas",'',time()-7200);
            setcookie("marca",'',time()-7200);
            header("Location: webcookies.html");
            exit();
        }
    ?>
