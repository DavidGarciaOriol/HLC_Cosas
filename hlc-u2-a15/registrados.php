<?php

if (isset($_POST['nombre']) and isset($_POST['ciclo'])){
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        $ciclo = $_POST['ciclo'];
        
        echo "Alumno: ".$nombre."<br>Títulos: <br>";
        
        foreach ($ciclo as $value) {
            if ($value === "ASIR"){
                echo " - Administración de Sistemas y Redes<br>";
            }
            if ($value === "DAM"){
                echo " - Desarrollo de Aplicaciones Multiplataforma<br>";
            }
            if ($value === "DAW"){
                echo " - Desarrollo de Aplicaciones Web";
            }
        }
    } else {
        echo "Debes rellenar los campos <br> <a href='index.php'> Volver </a>";
    }
