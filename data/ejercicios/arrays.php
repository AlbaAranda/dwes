<?php
    //los elementos son heterogeneos
    $miarray = array(1,"hola", 3.0,false);

    echo "<br>Elemento 2 del array: " . $miarray[2];

    //mostrar
    //foreach

    foreach($miarray as $elmto){
        echo "<br>el elmto es: " . $elmto;
    }

    echo "<br>";
    print_r($miarray);

    echo"<br>";
    var_dump($miarray);

    echo "<br> longitud del array: " . count($miarray);

    $array2 = [
        3,
        2,
        5,
        9
    ];


    foreach($array2 as &$elto){
        $elto =  $elto *2;
    }
    echo "<br>";
    print_r($array2);

    $array2[]= 15;
    echo "<br>";
    print_r($array2);
    //eliminar un elemento del array
    unset($array2[2]);

    $mivar = 5;
    unset($mivar);

    echo "<br> y la posicion 2?: " . $array2[2];

    $array2[]= 99;
    echo "<br>";
    print_r($array2);
    $array2[2] = 13;
    echo "<br>";
    print_r($array2);

    /*
    echo "<br> y QUE DEMONIOS TIENE a posicion 2?: " . $array2[2];

    echo "<br> MOSTRAR CLAVE Y VALRO DE ARRAY: "
    foreach($array2 as $key => $value){
        echo "<br> Clave: " . $key . " y valor: " . $value;
    }
    */

    //Los indices o claves solo puede ENTEROS O CADENAS

    // Con los arrays indexado  es como los has map.

    $persona= array(
        "edad" => 23,
        "peso" => 75,
        "casado" => false,
        "dni" => "78451122",
        8 => "nss"
    );

    foreach($persona as $key => $value){
        echo "<br> Clave: " . $key . " y valor: " . $value;
    }
    echo "<br>";
    print_r($persona);


    $persona[] = 7;
    echo "<br>";
    print_r($persona);

    echo "<br> El dni es: " . $persona["dni"];

    //Array multidimensionales es como las matrices

    $arrm = [
        0 => [1,3],
        1 => [5,7,9],
    ];

    echo "<br> Debe salir 3: " . $arrm[0][1];
