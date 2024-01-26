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
            <label for="pais">País</label>
            <input name="pais" type="text"/>
            <br>
            
            <label for="idioma">Idioma</label>
            <input name="idioma" type="text"/>
            <br>
            
            <label for="hablantes">% Habitantes</label>
            <input name="hablantes" type="number" step="any"/>
            <br>
            
            <input type="submit" value="Transacción"/>
            <br>
        </form>
        
        <?php
            include 'funciones_world.php';
            
            $pais = $_POST['pais'];
            $idioma = $_POST['idioma'];
            $hablantes = $_POST['hablantes'];
            
            insertar($pais, $idioma, $hablantes);

        ?>
    </body>
</html>
