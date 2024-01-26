<?php

function insertar($pais, $idioma, $hablantes) {
    
    $dbname = "world";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $user, $password);
        $insert = "INSERT INTO country ("
                . "Code,"
                . "Code2,"
                . "GovernmentForm,"
                . "LocalName,"
                . "Name,"
                . "Region"
                . ") VALUES ("
                . ":Code,"
                . ":Code2,"
                . ":GoverForm,"
                . ":LocalName,"
                . ":Name,"
                . ":Region"
                . ")";

        $insert_2 = "INSERT INTO countrylanguage VALUES ("
                . ":CountryCode,"
                . ":isOfficial,"
                . ":Language,"
                . ":Percentage"
                . ")";

        try {
            $pdo->beginTransaction();

            // COUNTRY

            $resultado = $pdo->prepare($insert);

            $resultado->bindVAlue(":Code", substr($pais, 0, 3));
            $resultado->bindValue(":Code2", substr($pais, 0, 2));
            $resultado->bindValue(":GoverForm", $pais);
            $resultado->bindValue(":LocalName", $pais);
            $resultado->bindValue(":Pais", $pais);
            $resultado->bindValue(":Region", $pais);

            $resultado->execute();

            //COUNTRYLANGUAJE BINDINGS

            $resultado_2 = $pdo->prepare($insert_2);

            $resultado_2->bindValue(":CountryCode", substr($pais, 0, 3));
            $resultado_2->bindValue(":isOfficial", "T");
            $resultado_2->bindValue(":Language", $idioma);
            $resultado_2->bindValue(":Percentage", $hablantes);

            $resultado_2->execute();

            if ($resultado > 0 && $resultado_2 > 0) {

                $query = "SELECT count(*) FROM country";
                $queryOut = $pdo->query($query);

                echo "Número de países registrados: {$queryOut->fetchColumn()}";

                $pdo->commit();
            }
        } catch (Exception $ex) {
            echo "ERROR con la BD:" . $ex->getMessage();
            $pdo->rollBack();
        }
    } catch (PDOException $ex) {
        echo "ERROR con la BD:" . $ex->getMessage();
    }
}
