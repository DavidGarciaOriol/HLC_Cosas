<?php

class Fruta{
    
    private $color;
    private $temporada;
    
    public function __construct($color, $temporada) {
        $this->color = $color;
        $this->temporada = $temporada;
    }
    
    private function reset_color(){
        $this->volor = "";
    }
    
    private static function reset_temporada(){
        $this->temporada = "";
    }
    
    public function __get($propiedad) {
        if (property_exists($this, $propiedad)){
            return $propiedad;
        } else {
            return "No existe esa propiedad";
        }
    }
    
    public function __set($propiedad, $valor) {
        if (property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        } else {
            return "No existe esa propiedad";
        }
    }
    
    public function __call($metodo, $argumentos) {
        if (method_exists($this, $metodo)){
            $this->reset_color();
        }
    }
    
    public static function __callStatic($metodo, $argumentos) {
        if (method_exists($this, $metodo)){
            $this->reset_temporada();
        }
    }
    
    public function __toString() {
        $out = "<br>Color: ".$this->color.
                ".<br>Temporada: ".$this> $this->temporada.".<br>";
        return $out;
    }
}