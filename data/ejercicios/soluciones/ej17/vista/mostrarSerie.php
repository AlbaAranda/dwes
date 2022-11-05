<?php

//mostrar el contenido de header
require('vista/header.php');

/*obtener e imprimir el nombre del metódo seleccionado pasándolo a mayúscula con la funcion strtoupepr() para que visualmente destaque más
 y contatenándolo con : y un salto de línea */
echo strtoupper($_GET['method'] . ":") . '<br>';

//llamada al método mostrar serie que se encuentra en App.php
$this->mostrarSerie();
    