<?php

function calculadora($num1, $num2, $operation){
                
                $out = 0;
                                
                if ($operation == "sum"){
                    $out = $num1 + $num2;
                }
                
                if ($operation == "res"){
                    $out = $num1 - $num2;
                }
                
                if ($operation == "mul"){
                    $out = $num1*$num2;
                }
                
                if ($operation == "div"){
                    $out = $num1/$num2;
                }
                
                if ($operation == "pow"){
                    $out = pow($num1, $num2);
                }
                
                echo("Valores: ".$num1." & ".$num2
                        ."<br>"."Operación: ".$operation
                        ."<br>"."Resultado: ".$out);
                
            }
    