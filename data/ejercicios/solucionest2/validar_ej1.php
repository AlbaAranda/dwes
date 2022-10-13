<?php
    if (isset($_GET['envio'])) {
        $titulo = $_GET['titulo'];
        if (!empty($titulo)) {

            echo "<br>El titulo del libro es: " . $titulo;
        } 
        else {
            echo "<br>No has elegido ningún titulo de libro";
        }
    }

    if (isset($_GET['envio'])) {
        $autor = $_GET['autor'];
        if (!empty($autor)) {

            echo "<br>El autor del libro es: " . $autor;
        } 
        else {
            echo "<br>No has elegido ningún autor de libro";
        }
    }

    if (isset($_GET['envio'])) {
        $editorial = $_GET['editorial'];
        if (!empty($editorial)) {

            echo "<br>La editorial del libro es: " . $editorial;
        } 
        else {
            echo "<br>No has elegido ninguna editorial de libro";
        }
    }

    if (isset($_GET['envio'])) {
        $paginas = $_GET['pag'];
        if (!empty($paginas)) {

            echo "<br>El libro tiene : " . $paginas . " páginas";
        } 
        else {
            echo "<br>No has escrito el número de páginas del libro";
        }
    }