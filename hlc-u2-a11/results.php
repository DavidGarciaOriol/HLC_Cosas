<?php


    if (isset($_POST['base']) and isset($_POST['altura'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
    }

    $area = ($base * $altura)/2;
    $hipotenusa = sqrt($base^2 + $altura^2);
    $perimetro = $base + $altura + $hipotenusa;
            
    echo "Área: ".$area."<br>".
        "Hipotenusa: ".$hipotenusa."<br>".
        "Perímetro: ".$perimetro;
    
?>