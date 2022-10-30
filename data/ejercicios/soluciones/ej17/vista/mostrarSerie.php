<?php

//mostrar el contenido de header
require('vista/header.php');

//obtener el  nombre del metódo pasándolo a mayúscula con la funcion stttouper y contatenándolo con : y un salto de línea
echo strtoupper($_GET['method'] . ":") . '<br>';

//llamada al método mostrar serie que se encuentra en App.php
$this->mostrarSerie();
    