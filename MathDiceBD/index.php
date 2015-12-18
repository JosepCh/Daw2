<!DOCTYPE html>
<html>
    <!--Es el encargado de pintar el formulario inicial y de cargar la cabecera!-->
    <?php
        session_start();
        session_destroy();
        require('lib/inicio.php');
        var_dump($_SESSION['Jugador']);
        
     ?>
    <body>
        <?php inicio();?>
    </body>
</html>
