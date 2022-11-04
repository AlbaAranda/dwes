<?php

    class App{

        public function __construct($name = "Aplicación PHP") {
            
            $this->name = $name;
        }
        
        public function run()
        {
            if (isset($_GET['method'])) {
            $method = $_GET['method'];
            } else {
            $method = 'login';
            }
        
            $this->$method();      
        }
        
        public function login()
        {
            if (isset($_COOKIE)) {
                
            }

            include('vista/login.php');    
        }

        public function auth(){
            if (isset($_POST['envio'])) {
                if (!empty($_POST['usuario'])) { 
                     setcookie("usuario",$_POST["usuario"],time()+3600);
                }
        
                if(!empty($_POST["usuario"]) && !empty($_POST["password"])){
                    //Redirige al metodo home
                    header("Location: ?method=home");
                }
            }
        }

        public function home(){
            if(isset($_COOKIE["listadeseos"])){
                $listadeseos = json_decode($_COOKIE["listadeseos"]);
                print_r($listadeseos);
            }
            include("vista/home.php");
        }

        public function new(){
            $listadeseos = [];
            //si existe la cookie sacar el valor
            if(isset($_COOKIE["listadeseos"])){
                $listadeseos = json_decode($_COOKIE["listadeseos"]);
            }
            //añadir el nuevo deseo al array 
            $listadeseos[]= $_POST["lista"];
            setcookie("listadeseos",json_encode($listadeseos), time()+3600);
            //llamar al metodo para que redireccione
            header("Location: ?method=home");
        }

        public function delete(){
            if(isset($_COOKIE["listadeseos"])){
                //decode pasa un string al array 
                $listadeseos = json_decode($_COOKIE["listadeseos"]);
                //borrar el valor del indice indicado
                unset($listadeseos[$_POST["indice"]]);
                /*coge los valores de un array y los devuelve en una variable. Despues de haber borrado se coge los valores restantes y se meten en otro array,
                de ahí que no queden posiciones vacias*/
                $listadeseos = array_values($listadeseos);
                //enconde pasa el array de $listadeseos a string
                setcookie("listadeseos",json_encode($listadeseos), time()+3600);
            }
            header("Location: ?method=home");
        }

        public function empty(){
            if(isset($_COOKIE["listadeseos"])){
                //decode pasa un string al array 
                $listadeseos = json_decode($_COOKIE["listadeseos"]);
                $listadeseos = [];
                setcookie("listadeseos",json_encode($listadeseos), time()+3600);
            }
            header("Location: ?method=home");
        }

        public function close(){

            setcookie("usuario","",time()-7200, '/');
            header("Location: ?method=login");
        }
     }
        