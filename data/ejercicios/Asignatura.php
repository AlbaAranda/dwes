<?php

/* 
    CONCEPTOS en JAVA:
        - Sobreescritura (metodos) --> mismo nombre con el mismo numero de parametros, diferente comportamiento
            -> Clase figura -> metodo calcular area
            -> Clase circulo -> metodo calcular area
            -> Clase cuadrado -> metodo calcular_area

        - Sobrecarga (metodos) --> mismo nombre con diferente numero de parametros
        - Sobrecarga (constructores) -> diferentes constructores con el mismo nombre con diferentes parametros
        - Polimorfimos: objeto que se comporta como otro objeto.
            -> Se puede conseguir con casting, con sobreescritura, sobrecarga, ligadura dinamica.

    
    PHP:
        - Si que existe sobrescritura
        - No existe sobrecarga
        - No hay sobrecarga de constructores (si se puede pero se hace de manera manual)
        - Si hay polimorfismo (sbreescritura de metodo)
        - public, private, protected, por defecto public 


    NOTACION:
        - Nombre clases: UpperCamelCase (PascalCase)
        - Nombre metodos: lowerCamelCase
        -java: this.attr
        -php: $this -> attr
    */
    
class Asignatura {
    private $nombre = null;
    private $numcreditos = null;
    private static $ciclo = null;

    //Constructores tienen que ser publicos
    public function __construct($nombre, $numcreditos){
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getNumeroCreditos(){
        return $this->numcreditos;
    }

    function setNumeroCreditos($numcreditos){
        $this->nombre = $numcreditos;
    }


    static function getCiclo(){
        return self::$ciclo;
    }

    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }
    
    function __toString()
    {
        return "<br><b> Datos de la asignatura: </b><br>"
        . "<br>Nombre asignatura: " . $this->nombre
        . "<br> Numero creditos: " . $this->numcreditos;
    }
}

?>