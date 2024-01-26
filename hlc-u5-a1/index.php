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

        <form action="" method="POST">

            <label for="usuario"> Usuario: </label>
            <input name="usuario" type="text" required/>

            <input type="submit" value="Enviar"/>
        </form>

        <?php
        $usuario = "";

        if (isset($_POST['usuario'])) {
            $usuario = $_POST['usuario'];

            if (!isset($_COOKIE["$usuario"])) {
                setcookie("$usuario", $usuario, time() + 2700);
                print "Bienvenido $usuario, me alegro de conocerte.";
            } else {
                print "Bienvenido $usuario. Me alegro de volver a verte";
            }
        } else {
            print "El usuario no puede estar vacío";
        }
        ?>
    </body>
</html>
