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
        require 'fruta.php';
        
        $melocoton = new Fruta("anaranjado", "verano");
        
        echo $melocoton;
        
        echo $melocoton->color;
        echo $melocoton->temporada;
        
        $melocoton->reset_color();
        $melocoton->reset_temporada();
        
        echo $melocoton;
        
        echo $melocoton->color;
        echo $melocoton->temporada;
        
        ?>
    </body>
</html>
