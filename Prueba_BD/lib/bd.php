<?php   
class BaseDatos
{

    private $host = 'localhost';
    private $user = 'jchanza';
    private $pwd = '';
    private $bd_name = 'usuarios';
    private $conexion;
    
    function BaseDatos()
    {
        $this->conexion = new mysqli($this->host,$this->user,$this->pwd,$this->bd_name);
    }
    
    function  comprobarBD()
    {
     if($this->conexion->connect_errno)
            {
                echo 'Fallo al conectar a la BD';
            }
            {
                echo 'Conexion OK';
                
            }    
    }
        
}

?>