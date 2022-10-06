<?php

    class Modulo extends Asignatura{
        private $codigo = null;

        function __construct($nombre,$numerocreditos,$codigo){
            //el parent es como el super en java
            parent:: __construct($nombre,$numerocreditos);
            $this->codigo = $codigo;

        }
        

        function getCodigo(){
            return $this->codigo;
        }

        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }


        function __toString()
        {
            return "<br><b> Datos del modulo: </b><br>"
            . "<br>Nombre del modulo: " . $this->getNombre()
            . "<br> Numero de creditos: " . $this->getNumeroCreditos()
            . "<br> Codigo del modulo: " . $this->codigo;
        }
    }

