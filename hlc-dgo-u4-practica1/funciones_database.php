<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of funciones_database
 *
 * @author usuario
 */
function insertar($nombre, $apellidos, $usuario, $userpassword) {

    $dbname = "bdusuarios";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $user, $password);
        
        $id_query = "SELECT MAX(id) FROM usuarios";

        $insert = "INSERT INTO usuarios (id, nombre, apellidos)"
                . " VALUES (:id, :nombre, :apellidos)";

        $insert_2 = "INSERT INTO credenciales (credencial_id, usuario_id, nick, clave)"
                . " VALUES (:credencial_id, :usuario_id, :usuario, :userpassword)";

        try {
            $pdo->beginTransaction();
            
            // OBTENEMOS ID MÁS ALTO
            
            $resultado_query_id = $pdo->query($id_query);
            $highest_id_result = $resultado_query_id->fetch();

            // USUARIOS BINDINGS

            $resultado = $pdo->prepare($insert);
            
            $resultado->bindValue(":id", $highest_id_result[0]+1);
            $resultado->bindVAlue(":nombre", $nombre);
            $resultado->bindValue(":apellidos", $apellidos);

            $resultado->execute();

            // CREDENCIALES BINDINGS

            $resultado_2 = $pdo->prepare($insert_2);

            $resultado_2->bindValue(":credencial_id", $highest_id_result[0]+1);
            $resultado_2->bindValue(":usuario_id", $highest_id_result[0]+1);
            $resultado_2->bindVAlue(":usuario", $usuario);
            $resultado_2->bindValue(":userpassword", $userpassword);

            $resultado_2->execute();

            if ($resultado_query_id > 0 && $resultado > 0 && $resultado_2 > 0) {
                
                $nuevo_id = $highest_id_result[0]+1;

                echo "El usuario {$usuario} ha sido registrado con ID: {$nuevo_id}";

                $pdo->commit();
            } else {
                echo "ERROR EN LA BD: Error en la ejecución.";
                $pdo->rollBack();
            }
        } catch (Exception $ex) {
            echo "ERROR con la BD:" . $ex->getMessage();
            $pdo->rollBack();
        }
    } catch (PDOException $ex) {
        echo "ERROR con la BD:" . $ex->getMessage();
    }
}
