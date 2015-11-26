<?php
 if(isset($_GET['nombre'])){
     $nombre=$_GET['nombre'];
 }else{
     $nombre='No hay nombre definido';
 }
 
 if(isset($_GET['apellidos'])){
     $apellidos=$_GET['apellidos'];
 }else{
     $apellidos='No hay apellidos definidos';
 }
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
    </head>
    <body>
        <?php
            echo 'Nombre : '.$nombre."<br>";
            echo 'Nombre : '.$apellidos."<br>";
        ?>
    </body>
</html>