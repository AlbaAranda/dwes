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
            session_start();
            include("vista/home.php");
            $this->colores();
        }

        public function colores(){
            include("vista/colores.php");
        }

        public function cambio(){
            //hay que abrir aquí también sesión porque sino no realiza el cambio
            session_start();
            $color= $_GET['color'];
            $_SESSION['color'] = $color;
            header('Location: ?method=home');

        }
    }      