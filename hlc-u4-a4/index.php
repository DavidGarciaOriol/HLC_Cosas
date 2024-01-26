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
                
                // Por alguna razíon no funciona si traigo las vartiables por post. He probado a copiar y pegar el código del formulario y post del compañero y tampoco me funciona, he creado un proyecto nuevo por si acaso y tampoco. PAra no perder más tiempo, se lo dejo así, comentado y con las variables ya instanciadas.
                
                /*if(isset($_POST['code']) && isset($_POST['poblacion'])){
                    $code = $_POST['code'];
                    $population = $_POST['poblacion'];
                }*/
                
                $code = "ESP";
                $population = "300000";
                
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
                    foreach ($resultado->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        print "<p>";
                        foreach ($row as $value){
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
