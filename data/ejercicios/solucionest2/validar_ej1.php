<?php
       if (isset($_GET['envio'])) {
        $titulo = $_GET['titulo'];
        if (!empty($titulo)) {

            echo "<br>El titulo del libro es: " . $titulo;
        } else {
            echo "<br>No has elegido ningún titulo de libro";
        }
    }