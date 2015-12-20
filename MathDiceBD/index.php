<!DOCTYPE html>
<html>
    <!--Es el encargado de pintar el formulario inicial!-->
    <?php
        session_start();
        session_destroy();
        require('lib/inicio.php');
        
     ?>
    <body>
        <?php inicio();?>
    </body>
</html>
