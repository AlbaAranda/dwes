<?php   
    if(isset($_COOKIE["idiomas"]) && isset($_COOKIE["marca"])){
        //Existen cookies
        $idioma = $_COOKIE["idiomas"];
        $marca = $_COOKIE["marca"];

        //IMPORTANTE inicializar variables  aunque estén vacias
        $mensajeidio = "";
        $mensajecoche = "";

        switch($idioma){
            case "es":
                $mensajeidio = "Bienvenido querido usuario.";
                $mensajecoche = "<br>Su marca de coche seleccionada es: ";
                break;

            case "en":
                $mensajeidio = "Welcome dear user.";
                $mensajecoche = "<br>Your prefered car brand is: ";
                break;
            
            case "de":
                $mensajeidio = "Willkomen lieber Benutzer.";
                $mensajecoche = "<br>Ihre bevorzugte Automarke ist: ";
                break;

            default:
                $mensajeidio = "Bienvenido querido usuario.";
                $mensajecoche = "<br>Su marca de coche seleccionada es: ";
                break;
        }
        $mensajecoche = $mensajecoche . $marca;

        //IMPORTANTE borrar cookies desde el navegador para volver a probar otros idiomas o marcas

        echo "<h2>" . $mensajeidio . "</h2>";
        echo $mensajecoche;
    }
    else{
        //No existen cookes 
        echo "<h3>Debe seleccionar algunos datos</h3>";
        echo "<a href=\"webcookies.html\">Volver al inicio</a>";
    }