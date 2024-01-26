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
        $genshinCharacters = array("Yoimiya", "Ganyu", "Hu Tao", "Kokomi", "Diona", "Mona");
        $cosasRandom = array("elemento"=>"hydro", "tipoArma"=>"catalizador", "rol"=>"healer", "rareza"=>"5", "genero"=>"mujer");
        
        foreach ($genshinCharacters as $key => $character) {
            print_r($key." => ".$character."<br>");
        }
        
        echo "<br><br><br>";
        
        while ($key = current($cosasRandom)){
            print_r(key($cosasRandom)." => ".$key."<br>");
            next($cosasRandom);
        }
        
        reset($cosasRandom);
        
        echo "<br><br><br>";
        
        unset($genshinCharacters[2]);

        foreach ($genshinCharacters as $key => $character) {
            print_r($key."=>".$character."<br>");
        }
        
        echo "<br><br><br>";
        
        $genshinCharacters = array_values($genshinCharacters);
        
        foreach ($genshinCharacters as $key => $character) {
            print_r($key."=>".$character."<br>");
        }


        ?>
    </body>
</html>
