<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="res/style/catalogo_style.css"/>
    </head>
    <body>

        <div class="form_card">
            <form action="catalogo.php" method="post">

            </form>
        </div>

    </body>
</html>

<?php
if (isset($_POST['usuario']) && isset($_POST['password'])) {

    $usuario = $_POST['usuario'];
    $password_user = $_POST['password'];

    $dbname = "tienda_online";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $user, $password);

        $consulta = "SELECT * FROM usuario WHERE name=:name AND password=:password";
        $resultado = $pdo->prepare($consulta);

        $resultado->bindValue(':name', $usuario);
        $resultado->bindVAlue(':password', $password_user);
        $resultado->execute();

        if ($resultado->fetchAll() == null) {
            print "El nombre de usuario o la contraseña no son correctos.";
        } else {
            session_start();
            if (!isset($_SESSION["user"]) || $_SESSION["user"] != $usuario) {
                $_SESSION["user"] = $usuario;
            }
            
            $consulta2 = "SELECT * FROM articulo";
            $resultado2 = $pdo->prepare($consulta2);
            $resultado2->execute();

            if (!$resultado2->fetchAll() == null) {
                print "Error al obtener los artículos de la base de datos";
            } else {
                foreach ($resultado2 as $row) {
                    $fila = $resultado2->fetch(PDO::FETCH_NUM);
                    foreach ($fila as $value){
                        print '<div class="product_card>"'
                            . '<form action="compra.php" method="post">'
                            . '<img src=""/> <br>'
                            . "<label> {$value[2]} </label> <br>"
                            . '<label> 19.99€ </label> <br>'
                            . '<input type="submit" value="Comprar"/>'
                            . '</form>'
                            . '</div>';
                    }
                }
            }
        }
    } catch (Exception $ex) {
        echo "ERROR con la BD:" . $ex->getMessage();
    }
}
?>
