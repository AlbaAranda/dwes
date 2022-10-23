<?php

    //serialize, unserialize, json_encode, json_decode

    $capitales = [
        "españa" => "madrid",
        "francia" => "paris"
    ];

    $infotrans = ""; //informacion trans
    $infonotrans = "";  // informacion de vuelta a la original

    $infotrans = serialize($capitales);
    echo "<br> Información serializada: ";
    var_dump($infotrans);

    $infonotrans = unserialize($infotrans);
    echo "<br> Información DESerializada: ";
    var_dump($infonotrans);


    $infotrans = json_encode($capitales);
    echo "<br> Información en JSON: ";
    var_dump($infotrans);

    $infonotrans = json_decode($infotrans);
    echo "<br> Información original desde JSON: ";
    var_dump($infonotrans);
