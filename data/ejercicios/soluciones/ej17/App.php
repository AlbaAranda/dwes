<?php

class App {

     //Se declara este array vacio para guardar el resultado de los metódos. Se declara como private porque es propio de la clase
    private $resultadoSerie = [];

    //constructor de la clase App donde a $nameApp se le da el valor del string indicado
    public function __construct($nameApp = "Aplicación PHP. Ejercicio 17") {
        $this->nameApp = $nameApp;
    }

    /*con esta función se ejecuta la aplicación. Si el metodo está definido, se ejecuta dicho método
    sino se ejecuta el método index ( que se incluye en el archivo index de la carpeta vista). La primera vez que se carga la págna 
    entra por el else (el index) ya que el parámetro método no va en la url en la primera carga*/
    public function ejecutar() {
        if (isset($_GET['method'])) {
        $method = $_GET['method'];
        } else {
        $method = 'index';
        }
        
        /*Se intenta llamar al metodo, en caso de que el método exista pero da un error, se muetra un error 500. En caso de que el método no exista y haya 
        algún error se muestra un error 400.*/
        try {
            $this->$method();      
        } 
        //por el catch entran todos los error 
        catch (\Throwable $th) {
            if (method_exists($this, $method)) {

                //redirecciona hacia un error 500
                header("HTTP/1.0 500 Internal Server Error");

                //funcion que devuelve 500
                return http_response_code(500);
                echo "Error en el servidor";
            } 
            else {
                header("HTTP/1.0 404 Not Found");
                echo "No encontrado";      
            }  
        }
        //si hay algún error que se muestre en pantalla 
        finally {
            echo "<pre>";
            print_r($th);
        }
    }

    public function index()
    {
        // echo "Estamos en el index<br>";
        include('vista/index.php');
    }
    
    public function fibonacci(){
        $num1 = 0;
        $num2 = 1;
        $numSuma = 0; 

        //Si el array está ya lleno, se inicia vacio para guardar el resultado de la función requerida
        $this->resultadoSerie = [];

        //se inicia la sucesion de fibonacci guardando en un array los dos primeros (0 y 1) contenidos inicialemente en las variables $num1 y $num2
        $serieFibonacci = [$num1,$num2];

        //Buscamos los siguientes números de la sucesión hasta llegar a un millón
        while(($num1 + $num2)  < 1000000){

            $numSuma = $num1 + $num2; //almacenamos en $numSuma el número resultante de la suma de $num1  y $num2

            /* tanto num1 como num2 debe dar un salto, ya que los dos últimos números a sumar cambian para la siguiente iteración.
            Por eso en cada iteración, $num1 tiene que valer el siguiente número de la sucesión( que es el valor de $num2) y lo mismo para $num2 (su siguiente 
            es el número almacenado en $numSuma)*/
            $num1 = $num2;  
            $num2 = $numSuma;
            
            //en cada vuelta se guarda en el array el siguiente número de la sucesión
            $serieFibonacci[] = $numSuma;
        }

        //se guarda el resultado de fibonacci en el array reseteado a vacio anteriormente
        $this->resultadoSerie = $serieFibonacci;

        //incluye la vista donde se muestra el resultado del método
        include('vista/mostrarSerie.php');
    
    }

    //método encargado de mostrar la serie 
    public function mostrarSerie(){
        foreach($this->resultadoSerie as $clave=>$numero){
            if($clave==0){
                echo $numero;
            }
            else{
                echo ",&nbsp" . $numero;
            }
            
        }
    }
}
