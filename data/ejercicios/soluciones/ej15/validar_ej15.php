<?php
    echo "<h3>Ejercicio 15</h3>";
    
    //si está definido el input envio:
    if (isset($_POST['envio'])) {
        //en la variable $datos se guarda el array datospersonales, que es el que contiene los valores introducidos en los inputs
        $datos = $_POST['datospersonales'];
        //en la variable $tamgnoArray se guarda la cantidad de valores que tiene el array con la funcion count()
        $tamgnoArray = count($datos);

        //si el array datospersonales no está vacio:
        if (!empty($_POST['datospersonales'])) {
            /*se crea un bucle for que se inicia con la variable $i en 0 (la primera posición de un array) hasta que dicha variable sea menor que el tamaño de array.
            Con esto se recorre todo el array guardado en la variable $datos*/
            for($i=0; $i < $tamgnoArray; $i++){
                //si el contenido de $datos en la posicion indicada ($i) es distinto a caracter vacio
                if($datos[$i] != ''){
                    //se imprime el valor del array en esa posición y se realiza un salto de línea
                    echo $datos[$i] . "<br>";
                }
                /*en cambio si el valor de una posición concreta del array es caracter vacio (no se ha introducido ningún valor), con un switch se va imprimiendo
                una cadena que indica que en esa posicion no se ha introducido un valor*/
                else{
                    switch ($i){
                        //En el caso de que $i (que es la posición del array) valga 0  se imprime que no se ha introducido el nombre
                        case 0:
                            echo "No has introducido un nombre" . "<br>";
                            break;

                        //En caso de que $i valga 1 se imprime que no se ha introducido el primer apellido
                        case 1:
                            echo "No has introducido el primer apellido" . "<br>";
                            break;
                        
                        //En caso de que $i valor 2 se imprime que no se ha introducido el segundo apellido
                        case 2;
                            echo "No has introducido el sesgundo apellido" . "<br>";
                            break;
                    }
                }
            }
        }   
    
    }

    //impresion del array que llega del formulario para comprobar su contenido
    echo "<br>";
    echo "<pre>";
    var_dump($datos);
    echo "</pre>";