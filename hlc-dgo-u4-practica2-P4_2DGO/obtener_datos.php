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
function obtener_datos() {

    $dbname = "bdusuarios";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $user, $password);

        $id_query = "SELECT nick,clave FROM credenciales";

        try {
            $resultado = $pdo->prepare($id_query);
            $resultado->execute();

            if (!$resultado) {
                echo "ERROR EN LA CONSULTA";
                
            } else {
                echo "<p> ";
                foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    echo "<p> Usuario:<br>";
                    foreach ($row as $value) {
                        echo "{$value}<br>";
                    }
                    print "</p>";
                }
            }
        } catch (Exception $ex) {
            echo "ERROR con la BD:" . $ex->getMessage();
        }
    } catch (PDOException $ex) {
        echo "ERROR con la BD:" . $ex->getMessage();
    }
}
