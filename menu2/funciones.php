
<!--Creamos una función que le pasamos dos parametros-->
<?php
function aleatorio($min,$max){
//Cogemos los numeros que nos pasan y hacemos un random entre esos dos rangos que es el que luego usaremos en conf.php
$numero=rand($min,$max);
return $numero;
}

?>


