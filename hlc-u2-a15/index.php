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
        
        <form method="post" action="registrados.php">
            <label for="nombre"> Nombre: </label>
            <input name="nombre" id="nombre" type="text"/><br>
            <label for="ciclo"> Ciclo: </label> <br> <br>
            <input name="ciclo[]" id="ciclo" type="checkbox" value="ASIR"/>Administración de Sistemas y Redes.<br>
            <input name="ciclo[]" id="ciclo" type="checkbox" value="DAM"/>Desarrollo de Aplicaciones Multiplataforma.<br>
            <input name="ciclo[]" id="ciclo" type="checkbox" value="DAW"/>Desarrollo de Aplicaciones Web.<br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
