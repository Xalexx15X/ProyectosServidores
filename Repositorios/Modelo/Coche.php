<?php
class Coche{
    public $color;
    public $modelo;

    public function __construct($color,$modelo){
        $this->color = $color;
        $this->modelo = $modelo;
    }

    public function getColor() {
        return $this->Color;
    }

    public function getModelo(){
        return $this->modelo
    }
    
}