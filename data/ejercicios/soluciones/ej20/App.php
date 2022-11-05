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
            //abrir sesion
            session_start();
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
            //hay que abrir aquí también sesión porque sino no realiza el cambio
            session_start();
            //en la variable $color se guarda el color
            $color= $_GET['color'];
            //en $_SESSION se guarda el contenido de la variable color
            $_SESSION['color'] = $color;
            //redireccionar al metodo home para que se pueda volver a repetir todo el proceso y se cambie de color
            header('Location: ?method=home');

        }
    }      