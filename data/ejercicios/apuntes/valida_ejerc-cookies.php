
    

    <?php
        if (isset($_POST['envio'])) {
            if (!empty($_POST['idiomas']) && !isset($_COOKIE["idiomas"])) {
                setcookie("idiosmas",$_POST["idiomas"],time()+3600);
            }
        

            if(!empty($_POST["marca"]) && !isset($_COOKIE["marca"])){
                setcookie("marca",$_POST["marca"],time()+3600);
            }

            if(!empty($_POST["idioma"]) && !empty($_POST["marca"])){
                //Redirige a la pag visualizaciones
                header("Location: visualizaciones.php");
                exit(); // o die(); Para que no se ejecute ningun otro codigo
            }
        }

        else{
            setcookie("idiomas",'',time()-72000);
            setcookie("marca",'',time(), -7200);
            header("Location: webcookies.html");
            exit();
        }
    ?>
