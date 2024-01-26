<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
    </head>
    <body style="text-align: center;">
        
        <h2>FORMULARIO LOGIN</h2>
        
        <div style="padding-left: 35%; text-align: start">
            <form action="funciones_cita.php" method="post">
                <label for="matricula">Matrícula</label>
                <input id="matricula" name="matricula" type="text" required>

                <br><br>

                <label for="fecha">Fecha</label>
                <input id="fecha" name="fecha" type="date">
                
                <br><br>
                
                <label for="passw">Contraseña</label>
                <input id="passw" name="passw" type="password" required>
                
                <br><br>
                
                <input type="submit" value="Comprobar">
            </form>
        </div>
        
        <?php
            
        ?>
    </body>
</html>
