<?php

class Personas{


    //Atributos
    public $nombre;
    public $apellido;


    //Constructor
    public function __construct() {

        $this->nombre="Hola";

    }

    //Metodos

    public function saludar($nombre){

        echo " Rico HP!!!!!! " . $nombre;
    }
}


?>