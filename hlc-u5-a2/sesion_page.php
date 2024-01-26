<?php

$usuario = "";

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];

    session_start();
    if (!isset($_SESSION["user"]) || $_SESSION["user"] != $usuario) {
        print "Bienvenido $usuario, me alegro de conocerte.";
        $_SESSION["user"] = $usuario;
    } else {
        print "Bienvenido {$_SESSION["user"]}, me alegro de volver a verte.";
    }
} else {
    print "El usuario no puede estar vacío";
}
?>
<form action="sesion_cerrada.php" method="POST">
    <input type="submit" value="Cerrar Sesión"/>
</form>