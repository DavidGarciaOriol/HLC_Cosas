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
        <form action="index.php" method="post">
            <input type="text" name="code"/>
            <input type="number" name="poblacion"/>
            <input type="submit" value="Enviar"/>
            <br><br>
        </form>
        
        <?php
            $dbname = "world";
            $dsn = "mysql:host=localhost;dbname=$dbname";
            $user = "root";
            $password = "";
            
            try {
                $pdo = new PDO($dsn, $user, $password);
                
                /*if(isset($_POST['code']) && isset($_POST['poblacion'])){
                    $code = $_POST['code'];
                    $population = $_POST['poblacion'];
                }*/
                
                $code = "AND";
                $population = "3000000";
                
                //$consulta = "SELECT * FROM city WHERE CountryCode=:code AND Population < :population";
                $consulta = "SELECT * FROM city WHERE CountryCode=:code AND Population >= :population";
                
                $resultado = $pdo->prepare($consulta);
                
                $resultado->bindValue(':code', $code);
                $resultado->bindVAlue(':population', $population);
                $resultado->execute();
                
                if (!$resultado){
                    print "ERROR EN LA CONSULTA";
                    
                } else {
                    print "<p>";
                    foreach ($resultado as $row) {
                        $fila = $resultado->fetch(PDO::FETCH_NUM);
                        print "<p>";
                        foreach ($fila as $value){
                            print "{$value} | ";
                        }
                        print "</p>";
                    }
                }
            } catch (Exception $ex) {
                echo "ERROR con la BD:" . $ex->getMessage();
            }
        ?>
    </body>
</html>
