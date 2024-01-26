<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="res/style/style.css" />
    </head>
    <body>
        
        <div class="form_container">
            <form action="catalogo.php" method="post">
                <label for="usuario" class="user_label"> Usuario: </label>
                <input name="usuario" type="text" required/>

                <label for="password" class="password_label"> Password: </label>
                <input name="password" type="password" required/>
                
                <input class="submit_btn" type="submit" value="Entrar"/>
                
            </form>
        </div>
        
    </body>
</html>

<?php

?>

