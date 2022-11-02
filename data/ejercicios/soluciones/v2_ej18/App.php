<?php

    class App {

      public function __construct($name = "Aplicación PHP") {
        // echo "Consturyendo la app <hr>";
        $this->name = $name;
    
      }
    
      public function ejecutar() {
        if (isset($_POST['method'])) {
          $method = $_POST['method'];
        } else {
          $method = 'index';
        } 
        $this->$method();    
      }


      public function login(){

        include('vista/index.php');
      }


      public function auth(){

        if (isset($_POST['envio'])) {
            if (!empty($_POST['usuario']) && !isset($_COOKIE["usuario"])) { //si ya está establecida la cookie no vuelve a entrar por aqui
                 setcookie("usuario",$_POST["usuario"],time()+3600);
            }
            
    
            if(!empty($_POST["password"]) && !isset($_COOKIE["password"])){
                 setcookie("password",$_POST["password"],time()+3600);
            }
    
            if(!empty($_POST["usuario"]) && !empty($_POST["password"])){

                //Redirige al metodo  home
                header("Location: ?method=home");
                exit(); //Para que no se ejecute ningun otro codigo
            }
        }
      }

      public function home(){
        if(isset($_COOKIE["usuario"]) && isset($_COOKIE["password"])){
            //Existen cookies
            $mensajeInicial = "<br>Bienvenido a la web " . $_POST["usuario"];
            echo $mensajeInicial;
            echo "<br><a href=?method=logout>Cerrar Sesión</a>";
        }
    
        else{
            //No existen cookies 
            echo "<h3>Debe introducir algunos datos</h3>";
            echo "<a href=\"?method=login\">Volver al inicio</a>";
        }
      }

      public function logout(){
        if(isset($_COOKIE['usuario']) && isset($_COOKIE['password'])){
            //Medida de seguridad IMPORTANTE, para quien cargue la pagina (visualizaopciones.php) a mano no pueda hacer "travesuras"
            //Borrar las cookies y redirigir a inicio (login.php)
            setcookie("usuario",'',time()-7200);
            setcookie("password",'',time()-7200);
            header("Location: ?method=login");
            exit();
        }
      }
    }