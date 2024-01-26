<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require 'Menu.php';
        require 'MenuInfantil.php';
        
        $menuInfantil_1 = new MenuInfantil("Infantil Mediano", 20, ["Hamburguesa", "Patatas", "Bebida"], "mediano");
        $menuInfantil_2 = new MenuInfantil("Infantil Pequeño", 15, ["Hamburguesa", "Patatas", "Bebida"], "pequeño");

        echo $menuInfantil_1;
        $menuInfantil_1->esInfantil();
        
        $menuInfantil_1->establecerOfertaComplemento("Bebida Extra");
        
        echo $menuInfantil_1;
        $menuInfantil_1->esInfantil();

        echo $menuInfantil_2;
        $menuInfantil_2->esInfantil();
        
        $menuInfantil_1->establecerOfertaPrecio(50);
        
        echo $menuInfantil_2;
        $menuInfantil_2->esInfantil();

        
        // RESPUESTA: Sí, puedo instanciar un objeto de la clase base sin problemas independientemente de la clase hijo.
        // La clase base es una clase que funciona por cuenta propia y no depende del hijo.
        ?>
    </body>
</html>
