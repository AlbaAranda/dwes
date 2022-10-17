<?php
    $nombrefich = "modulodwes.txt";
    
    //para abrir el fichero
    $fp = fopen($nombrefich, "r"); //true si no hay problemas

    if(!$fp){
        echo "<br> No he podido leer el fichero";
    }
    else{
        //leer el fichero
            //leer caracter a caracter: se usa la funcion fgetc
                /*while(!feof($fp)){
                    $caracter = fgetc($fp);
                    echo $caracter;

                    if($caracter == "\n"){
                        echo "<br>";
                    }
                    echo $caracter;
                }*/

                //2- Leyendo linea a linea
                /*
                while(!feof($fp)){
                    $linea= fgets($fp);
                    echo $linea . "<br>";
                }*/

                //3-  fread: se le pasa el fichero y el tamaño (en byte) del fichero que se quiere leer (en este caso se quiere el tamaño entero)
                $contenido = fread($fp, filesize($nombrefich));
                print_r($contenido);
    }
    echo "<br> Cerrando el fichero...";

    //para cerrar el fichero, se recomienda siempre cerrar el fichero lo mismo para la bases de datos
    fclose($fp);

    $fp2 = fopen($nombrefich, "a"); //true si no hay problema
    if(!$fp2){
        echo "<br> No he podido abrir el fichero";
    }
    else{
        $textoainsertar = "Esta es otra línea." . PHP_EOL;
        fwrite($fp2, $textoainsertar);
    }
    
    fclose($fp2);

    //CUidado con los saltos de linea 