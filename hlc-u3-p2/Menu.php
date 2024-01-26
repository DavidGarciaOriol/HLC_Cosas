<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/**
 * Description of Menu
 *
 * @author usuario
 */
abstract class Menu{
    
    private $nombre;
    private $precio;
    private $articulos = array();
    private $size;
    private $infantil = false;
    
    public function __construct($nombre, $precio, $articulos, $size) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->articulos = $articulos;
        $this->size = $size;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    abstract public function esInfantil();
    
    public function __toString() {
        $out = "";
        $out = $out."<br>Nombre: ".$this->nombre.".<br>Artículos: <br>";
        
        foreach ($this->articulos as $key => $value) {
            $out = $out."  ".$key." - ".$value.".<br>";
        }
        
        $out = $out."Tamaño: ".$this->size.".<br>";
        
        if ($this->infantil){
            $out = $out."Juguete: Juguete Menú Infantil.<br>";
        }
        
        $out  = $out."Precio: ".$this->precio." €<br>";

        return $out;
    }
}