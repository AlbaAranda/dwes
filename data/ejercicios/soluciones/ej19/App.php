<?php

    class App{
        //constructor de la clase App donde a $nameApp se le da el valor del string indicado
        public function __construct($name = "Aplicación PHP") {
            
            $this->name = $name;
        }

        public function run(){
            if (isset($_GET['method'])) {
            $method = $_GET['method'];
                } 
                else {
                $method = 'home';
                }
            
                $this->$method();      
        }

        public function home(){
            //incluir aquí el contenido del archivo home.php que se encuentra en la carpeta vista
            include("vista/home.php");
            //se llama al método colores()
            $this->colores();
        }

        public function colores(){
            //incluir aquí el contenido del archivo colores.php que se encuentra en la carpeta vista
            include("vista/colores.php");
        }

        public function cambio(){
            //en la variable $color se guarda el color
            $color= $_GET['color'];
            //se crea la cookie de color con valor (color) que se ha guardado en la variable $color
            setcookie('color', $color, time()+3600);
            //redireccionar al metodo home para que se pueda volver a repetir todo el proceso y se cambie de color
            header('Location: ?method=home');

        }
    }      