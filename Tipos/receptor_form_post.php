<!DOCTYPE html>
<html>
    <head>
        <title>Form_Post</title>
    </head>
    <body>
        <?php
        if(!sizeof($_POST)==0){
            echo 'Nombre : '.$_POST['nombre']."<br>";
            echo 'Apellidos : '.$_POST['apellidos']."<br>";
             echo 'Sexo : '.$_POST['sex']."<br>";
        }
        ?>
    </body>
</html>