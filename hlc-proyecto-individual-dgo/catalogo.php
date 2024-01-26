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

    if (isset($_POST['usuario']) && isset($_POST['password'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        for ($i = 0;$i<10;$i++){
            print '<div class="product_card>"'
                    . '<form action="compra.php" method="post">'
                        .'<img src=""/> <br>'
                        .'<label> Producto </label> <br>'
                        . $i+1
                        . '<label> 19.99€ </label> <br>'
                        . '<input type="submit" value="Comprar"/>'
                    . '</form>'
                . '</div>';
        }
        
    }
?>
