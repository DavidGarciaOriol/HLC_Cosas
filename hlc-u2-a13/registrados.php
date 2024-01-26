<?php

if (isset($_POST['nombre']) and isset($_POST['ciclo'])){
        $nombre = $_POST['nombre'];
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
    }
