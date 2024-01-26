<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of MenuInfantil
 *
 * @author usuario
 */

require_once 'iOferta.php';
require_once 'Menu.php';

class MenuInfantil extends Menu implements iOferta {

    private $precio;
    private $articulos = array();
    
    public function __construct($nombre, $precio, $articulos, $size) {
        parent::__construct($nombre, $precio, $articulos, $size);
    }

    public function esInfantil() {
        echo "Juguete: juguete menú infantil.<br><br>";
    }
    
    public function establecerOfertaComplemento($complemento) {
        array_push($this->articulos, $complemento);
    }

    public function establecerOfertaPrecio($oferta) {
        $this->precio = (($this->precio * $oferta) / 100);
    }
}
