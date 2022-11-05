<?php
    echo "<h3>Ejercicio 11</h3>";

    //comprobamos que el input de envío está definido
    if (isset($_POST['envio'])) {
        // se guarda el contenido del input de titulo en la variable $titulo
        $titulo = $_POST['titulo'];
        //si la variable $titulo no está vacía se hace lo indicado a continuación
        if (!empty($titulo)) {
            //se imprime la cadena indicada y el contenido de la variable del título
            echo "<br>El titulo del libro es: " . $titulo;
        } 
        //si variable $titulo está vacia, se imprime una cadena indicando que no se ha escrito nada en el input de titulo
        else {
            echo "<br>No has elegido ningún titulo de libro";
        }
    }

    //Todo lo comentado en el caso anterior se repiten exactamente igual pero con las otras 3 variables que pide el ejercicio 

    if (isset($_POST['envio'])) {
        $autor = $_POST['autor'];
        if (!empty($autor)) {

            echo "<br>El autor del libro es: " . $autor;
        } 
        else {
            echo "<br>No has elegido ningún autor de libro";
        }
    }

    if (isset($_POST['envio'])) {
        $editorial = $_POST['editorial'];
        if (!empty($editorial)) {

            echo "<br>La editorial del libro es: " . $editorial;
        } 
        else {
            echo "<br>No has elegido ninguna editorial de libro";
        }
    }

    if (isset($_POST['envio'])) {
        $paginas = $_POST['pag'];
        if (!empty($paginas)) {

            echo "<br>El libro tiene : " . $paginas . " páginas";
        } 
        else {
            echo "<br>No has escrito el número de páginas del libro";
        }
    }