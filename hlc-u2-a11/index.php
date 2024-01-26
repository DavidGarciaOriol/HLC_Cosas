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
        <form method="post" action="index.php">
            <label for="base"> Base: </label>
            <input name="base" id="base" type="number"/>
            <label for="altura"> Altura: </label>
            <input name="altura" id="altura" type="number"/>
            <input type="submit">
        </form>
        
        <?php
            if (isset($_POST['base']) and isset($_POST['altura'])){
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                
                $area = ($base * $altura)/2;
                $hipotenusa = sqrt($base^2 + $altura^2);
                $perimetro = $base + $altura + $hipotenusa;

                echo "<br> Área: ".$area."<br>".
                    "Hipotenusa: ".$hipotenusa."<br>".
                    "Perímetro: ".$perimetro;
                }

        ?>
    </body>
</html>
