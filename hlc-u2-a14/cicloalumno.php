<?php

if (isset($_POST['nombre']) and isset($_POST['ciclo'])){
        $nombre = $_POST['nombre'];
        $ciclo = $_POST['ciclo'];
        
        echo "Nombre: ".$nombre."<br>Curso: ";
        
        if ($ciclo === "ASIR"){
            echo "Administración de Sistemas y Redes";
        } else if ($ciclo === "DAM"){
            echo "Desarrollo de Aplicaciones Multiplataforma";
        } else if ($ciclo === "DAW"){
            echo "Desarrollo de Aplicaciones Web";
        }
    }
