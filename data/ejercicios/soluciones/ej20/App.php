<?php

    class App{
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
            include("vista/home.php");
            $this->colores();
        }

        public function colores(){
            include("vista/colores.php");
        }

        public function cambio(){
            $color= $_GET['color'];
            //se crea la cookie de color
            setcookie('color', $color, time()+3600);
            header('Location: ?method=home');

        }
    }      