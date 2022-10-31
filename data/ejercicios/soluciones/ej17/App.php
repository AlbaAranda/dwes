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
        //por el catch entran todos los errores
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

    public function index() {
        // echo "Estamos en el index<br>";
        include('vista/index.php');
    }
    
    //Método para calcular la serie de Fibonacci
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

    //Método para calcular las potencias de 2
    public function potencias2(){

        $base = 2;
        $resultadoPotencias = [];

        //Si el array está ya lleno, se inicia vacio para guardar el resultado de la función requerida
        $this->resultadoSerie = [];

        //para buscar las pontencias de 2 ($base), desde 2 elevado a 1 hasta 2 elevado a 24
        for($exponente= 1; $exponente<=24; $exponente++){
            //resultado[$exponente-1] para tener claro que se va a comenzar a introducir valores desde posición 0 del array.  pow es la funcion para realizar potencias
            $resultadoPotencias[$exponente-1] = pow($base,$exponente);
        }

        //se guarda el resultado de potencias de 2 en el array reseteado a vacio anteriormente
        $this->resultadoSerie = $resultadoPotencias;

        //incluye la vista donde se muestra el resultado del método
        include('vista/mostrarSerie.php');
    }

    //Método para calcular factoriales
    public function factoriales(){

        $factorial = 1;
        $resultado = 1;
        $resultadosFactoriales = [];

        //Si el array está ya lleno, se inicia vacio para guardar el resultado de la función requerida
        $this->resultadoSerie = [];

        //Buscar los factoriales desde 1 hasta el más cercano al millón
        while($resultado <= 1000000){
            //resultadosFactoriales[$factorial-1] para tener claro que se va a comenzar a introducir valores desde comenzar a introducir valores desdela posición 0 del array
            $resultadosFactoriales[$factorial -1] = $resultado;
            $factorial++;
            $resultado = $resultado * $factorial;
        }

        //se guarda el resultado de factoriales en el array reseteado a vacio anteriormente
        $this->resultadoSerie = $resultadosFactoriales;

        //incluye la vista donde se muestra el resultado del método
        include('vista/mostrarSerie.php');
    }

    //Método para buscar números primos
    public function primos(){

        $cantidadDiv = 0;
        $resultadoPrimos = [];

        //Si el array está ya lleno, se inicia vacio para guardar el resultado de la función requerida
        $this->resultadoSerie = [];

        //buscar números entre 1 y 10000 que sean números primos
        for($numero = 1; $numero<= 10000; $numero++){

            /*cada vez que $numero aumenta en 1 $cantidadDiv se resetea a 0, para buscar en el bucle anidado la cantidad de divisores sólo de ese número 
            ( y que no se acumulen la cantidad de divisore del número anterior)*/
            $cantidadDiv = 0;

            //este bucle anidado para buscar los divisores del números
            for($divisor = 1; $divisor<= $numero; $divisor++){
                if($numero%$divisor == 0){

                    //cada vez que se encuentra un divisor de un número, aumenta en en 1 la cantidad de divisores
                    $cantidadDiv++;
                }
            }

            //si un número solo tiene como cantidad de divisores 2  (es decir, el 1 y el propio número), es que es un número primo y se guarda en el array de los número primos
            if($cantidadDiv == 2){
                $resultadoPrimos[] = $numero;
            }
        }

        //se guarda el resultado de factoriales en el array reseteado a vacio anteriormente
        $this->resultadoSerie = $resultadoPrimos;

        //incluye la vista donde se muestra el resultado del método
        include('vista/mostrarSerie.php');
    }


    //método encargado de mostrar la serie numérica de cada método
    public function mostrarSerie(){
        //recorremos el array en el que se han guardado los resultados con un bucle foreach
        foreach($this->resultadoSerie as $clave=>$numero){
            //si es la primera posición (la 0) del array se imprime solo el número
            if($clave==0){
                echo $numero;
            }
            //si son otras posiciciones distintas a las primeras antes del número se imprimirá una coma con un espacio
            else{
                echo ",&nbsp" . $numero;
            }
            
        }
    }
}