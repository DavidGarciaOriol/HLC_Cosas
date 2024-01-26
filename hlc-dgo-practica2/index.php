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
        
        $edad = 11;
        $mayorDeEdad = false;
        
        $rangoEdad = "";
        $educacionCorrespondiente = "";
        
        if ($edad >= 0 && $edad < 5){ // Estructura de control if-else
            $rangoEdad = "infante";
        } else if ($edad >= 5 && $edad < 13){
            $rangoEdad = "niño";
        } else if ($edad >= 13 && $edad < 18){
            $rangoEdad = "adolescente";
        } else {
            $rangoEdad = "adulto";
            $mayorDeEdad = true;
        }
        
        switch ($rangoEdad){ // Estructura de control switch
            case "infante":
                $educacionCorrespondiente = "Clases de infantil";
                echo "Rango de edad: ".$rangoEdad."<br>Educación: ".$educacionCorrespondiente."<br>";
                break;
            case "niño":
                $educacionCorrespondiente = "Primaria";
                echo "Rango de edad: ".$rangoEdad."<br>Educación: ".$educacionCorrespondiente."<br>";
                break;
            case "adolescente":
                $educacionCorrespondiente = "Secundaria / Bachillerato / Formación Profesional";
                echo "Rango de edad: ".$rangoEdad."<br>Educación: ".$educacionCorrespondiente."<br>";
                break;
            case "adulto":
                $educacionCorrespondiente = "Universidad / Secundaria Adultos / Bachiller Adultos / Formación Profesional";
                echo "Rango de edad: ".$rangoEdad."<br>Educación: ".$educacionCorrespondiente."<br>";
                break;
        }
        
        echo $mayorDeEdad?"Mayor de edad":"Menor de edad"; // Operador ternario
        
        echo "<br><br>";

        function incrementarEdadHastaAdulto($edad){ // Parámetro por valor
            while ($edad < 18){ // Bucle indeterminado while
                echo "Aún es menor de edad (".$edad.")<br>";
                $edad++;
            }
        
            if ($edad === 18){
                echo "Ya es mayor de edad (".$edad.")";
            }
        }
        
        function devolverNumerosHastaEdad(&$edad){ // Parámetro por referencia
            $limite = $edad;
        
            $listaNumeros = array(); // Array de numeros

            for ($i = 0; $i < $limite; $i++){ // Bucle determinado que rellena el array de números
                array_push($listaNumeros, $i);
            }

            foreach ($listaNumeros as $key => $value) { // bucle que saca por pantalla los elementos recorridos en el array de números
                echo "Números actual:".$value."<br>Numeros hasta la edad:".$edad-$value."<br>-----------------<br>";
            }
        }
        
        devolverNumerosHastaEdad($edad);
        incrementarEdadHastaAdulto($edad);
        ?>
    </body>
</html>
