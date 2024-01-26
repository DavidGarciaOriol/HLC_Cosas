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
        function imprimirTabla($tabla, $suma, $iteraciones = 2){
            
            echo "SUMA 1er + 2do PARAM: ";
            echo $tabla + $suma;
            echo "<br><br>";
            
            for ($i = 0; $i < $iteraciones; $i++){
                
                echo "----- TABLA ${$i+1} -----<br><br>";
                
                for ($j = 0; $j < 10; $j++){
                    $num = $tabla * ($j+1);
                    echo $tabla * ($j+1);
                    echo "<br>";
                }
                echo "<br>";
                
            }
        }
        
        imprimirTabla(4,7);
        ?>
    </body>
</html>
