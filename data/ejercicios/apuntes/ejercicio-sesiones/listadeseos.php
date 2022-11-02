<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["envio"])){
            session_start();
            $item =$_POST["lista"];
            $_SESSION["listadeseo"][] = $item;
            //var_dump($_SESSION);
            echo "<br>";
            var_dump($_SESSION["listadeseo"]);
            //echo "<br>Elemento seleccionado: " . $_SESSION["listadeseo"];
            $sesioncodif = json_encode($_SESSION);

            //OPCION 1: decodificarlo como un array 
            //devuelve un array asociativo, esta es la mejor opcion y la mas simple
            $sesiondecodif = json_decode($sesioncodif,true);
    
            //var_dump($sesiondecodif);

            echo "<br><br>";

            //$_SESSION["listadeseo"][4]= "Porsche";

            // decodificarlos como un objeto
            var_dump($sesiondecodif);

            //OPCION 2: decodificar como un objeto 
            $sesiondecodif = json_decode($sesioncodif);
            //cambiar el elemento 2 a pizarra $sesiond;ecodif
            //var_dump($sesiondecodif)
            
            //ACCEDER A UN ELEMENTO DEL ARRAY 
            $sesiondecodif->{'listadeseo'}[1]= "lampara";
            //echo "<br>EL elemento es " . $sesiondecodif->{'listadeseo'}[6];
            //$this->metodo
            var_dump($sesiondecodif);

            $miarray = get_object_vars($sesiondecodif);
            print_r($miarray);
            for($i=0; $i<count($miarray,COUNT_RECURSIVE)-1; $i++){
                echo "<br>Elemento $i es :" . $miarray["listadeseo"][$i];
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
    <!-- Ejercicio Nuevo 

    Lista de deseos:

    deseos.php => desplegable : vaqueros
                                telefono movil 
                                coche
                                collar
                                cd

    se van mostrando en la misma pagina lo elegido.
        -> sesiones, codificarlo con json.
            -> recuperar de la informacion del json codficado.

    -->
</head>
<body>
    <form name="formulariodeseos" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h1>Lista de Deseos: </h1>
    <h3>Hoy me apetece comporar...</h3>
        <p>
            <select name="lista" id="lista" required>
                <option value="vaqueros">Vaqueros</option>
                <option value="movil">Telefono movil</option>
                <option value="coche">Coche</option>
                <option value="collar">Collar</option>
                <option value="cd">Cd</option>
            </select>
        </p>
        <input type="submit" name="envio" id="envio" value="Agregar Deseo">
    </form>
</body>
</html>


