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
        
            $number_1 = 2; // variables simples, o globales externas
            $number_2 = 4;
            
            $text_1 = "Hoy es el día de la práctica de HLC.";
            $text_2 = "Hola";
            $text_3 = "mundo";
            
            $offset = 5;
            $lenght_substr = 15;
            
            function calcular($num1, $num2){
                return $num1 ** $num2;
            }
            
            function modificarTexto(){
                global $text_2, $text_3; // variable de ámbito global interna
                $text_2 = $text_2.": ".$text_3;
            }
            
            function incrementarLetra(){
                static $textoEstatico = "A"; // variable estática
                $textoEstatico++;
                return $textoEstatico;
            }
            
            function substraerTexto($texto, $offset, $limit){
                $out_texto = substr($texto, $offset, $limit); // variable local dentro de una función
                return $out_texto;
            }

            echo "Texto original: ".$text_1."<br>Texto sustraído: ".substraerTexto($text_1, $offset, $lenght_substr)."<br><br>";
            
            echo "Valor absoluto: ".abs(calcular($number_1, $number_2))."<br><br>";
            
            modificarTexto();
            echo "Texto modificado: \"".$text_2."\"<br><br>";
            
            echo "Letra 2 (B): ". incrementarLetra()."<br>";
            echo "Letra 3 (C): ". incrementarLetra()."<br>";
            echo "Letra 4 (D): ". incrementarLetra();

        ?>
    </body>
</html>
