<?php
    include_once "Asignatura.php";
    include_once "Modulo.php";

    echo "<h1> Web de asignaturas: </h1>";
    $bbdd = new Asignatura("BBDD", 6);

    Asignatura::setCiclo("DAM");

    /*echo "<br> Se ha creado la asignatura " . $bbdd->getNombre()
    . " con el numero de creditos : " . $bbdd->getNumeroCreditos();*/

    echo "<br> " . $bbdd;
    echo "<br> BBDD pertenece al ciclo " . Asignatura::getCiclo();
    $dwes = new Modulo("DWES",9,"IFC3014");

    Modulo::setCiclo("DAM");
    echo "<br> " . $dwes;
    echo "<br> DWES pertenece al ciclo " . Modulo::getCiclo();