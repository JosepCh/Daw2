<!DOCTYPE html>
<html>
    <head>
        <title>Form_Get</title>
    </head>
    <body>
        <?php
        if(isset($_GET)){
            echo 'Nombre : '.$_GET['nombre']."<br>";
            echo 'Apellidos : '.$_GET['apellidos']."<br>";
             echo 'Sexo : '.$_GET['sex']."<br>";
        }
        ?>
    </body>
</html>