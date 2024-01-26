<?php

    $listaMatriculas;

    function crea_tabla(){
        global $listaMatriculas;
        
        $listaMatriculas = array(
            "asd1234" => "1234ASD",
            "fgh5678" => "5678FGH",
            "jkl9090" => "JKL9090"
        );
    }

    $matricula;
    $password;
    
    function comprobarDatos($fecha, $clave, $valor, $lista){
        
        global $listaMatriculas;
        
        foreach ($lista as $key => $value) {
            if ($clave === $key && $valor === $value){
                echo "Cita reservada para vehículo ".$value."el día: ".$fecha.".<br><br>";
                break;
            } else if ($clave === $key && $valor != $value){
                echo "No se ha podido acceder a la matrícula. Contraseña incorrecta.";
                break;
            } else {
                $listaMatriculas[$clave] = $valor;
                echo "Se ha dado de alta la matrícula ".$valor.".<br><br>";
                break;
            }
        }
    }
    
    if (isset($_POST['matricula']) && isset($_POST['passw']) && isset($_POST['fecha'])){
        $matricula = $_POST['matricula'];
        $password = $_POST['passw'];
        $fecha = $_POST['fecha'];
        $listaMatriculas[$password] = $matricula;
        
        crea_tabla();
        comprobarDatos($fecha, $password, $matricula, $listaMatriculas);
        
        foreach ($listaMatriculas as $key => $value) {
            echo "Matrícula: ".$value."<br>Contraseña: ".$key."<br><br>";
            
        }

    }
        
        
        
    