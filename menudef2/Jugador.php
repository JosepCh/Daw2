<?php
class Jugador
{
    function Jugador($nombre,$apellidos,$edad)
    {
       $this->nombre = nombre;
       $this->apellidos = apellidos;
       $this->edad = edad;
       
    }
    function getInfo(){
        echo $this.nombre +"".$this.apellidos+"".$this.edad;
    }
}

if(isset($_POST))
{
    $player = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad']);
    $this.getInfo();
}
?>
