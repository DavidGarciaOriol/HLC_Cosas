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
        
        $x = 4;
        $z = 6;
        
        incrementar($x, $z);   
        echo "X: $x Z: $z";
        
        function incrementar(&$x, &$z){
            $x++;
            $z++;
        }
        ?>
        
    </body>
</html>
