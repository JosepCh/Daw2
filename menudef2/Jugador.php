<?php
class Jugador
{
    function Jugador(){}
    
    
   public function getNombre(){
       return $this->nombre;
   }
   public function getApellidos(){
       return $this->apellidos;
   }
   public function getEdad(){
       return $this->edad;
   }
   
   public function setNombre($nombre){
       $this->nombre = $nombre;
   }
   public function setApellidos($apellidos){
       $this->apellidos = $apellidos;
   }
   
   public function setEdad($edad){
        $this->edad = $edad;
   }
   
   public function getPuntos(){
       return $this->puntos;
   }
   
   public function setPuntos($puntos){
       $this->puntos = $puntos;
   }
}
?>
