<?php
    echo "<h3>Ejercicio 15</h3>";
    
    if (isset($_POST['envio'])) {
        $datos = $_POST['datospersonales'];
        $tamgnoArray = count($datos);
        if (!empty($_POST['datospersonales'])) {
            
            for($i=0; $i < $tamgnoArray; $i++){
                if($datos[$i] != ''){
                    echo $datos[$i] . "<br>";
                }
                else{
                    switch ($i){
                        case 0:
                            echo "No has introducido un nombre" . "<br>";
                            break;

                        case 1:
                            echo "No has introducido el primer apellido" . "<br>";
                            break;

                        case 2;
                            echo "No has introducido el sesgundo apellido" . "<br>";
                            break;
                    }
                }
            }
        }   
    
    }

    //impresion del array que llega del formulario 
    echo "<pre>";
    var_dump($datos);
    echo "</pre>";