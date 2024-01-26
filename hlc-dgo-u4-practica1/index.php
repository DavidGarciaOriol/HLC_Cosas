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
        <h2>FORMULARIO USUARIOS</h2>
        <form action="index.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required/>
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" required/>
            
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required/>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required/>
            
            <input type="submit" value="Insertar"/>
            <br><br>
        </form>

        <?php
            
            include 'funciones_database.php';
        
            $nombre = "";
            $apellidos = "";
            $usuario = "";
            $userpassword = "";
            
            // ASOCIAMOS VARIABLES OBTENIDAS POR POST
            
            if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['usuario']) && isset($_POST['password'])){
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $usuario = $_POST['usuario'];
                $userpassword = $_POST['password'];
                
                // LLAMAMOS AL MÉTODO DE INSERCIÓN EN LA BASE DE DATOS
                
                insertar($nombre, $apellidos, $usuario, $userpassword);
            } else {
                echo "No se han cumplimentado correctamente los campos requeridos o no se ha podido acceder a ellos.";
            }
        ?>
    </body>
</html>
