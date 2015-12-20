<?php   
class BaseDatos
{

    private $host = 'localhost';
    private $user = 'jchanza';
    private $pwd = '';
    private $bd_name = 'usuarios';
    private $conexion;
    
    function Conectar()
    {
        $this->conexion = new mysqli($this->host,$this->user,$this->pwd,$this->bd_name);
    }
    
    function  ComprobarBD()
    {
     if($this->conexion->connect_errno)
            {
                echo 'Fallo al conectar a la BD';
            }
    }
    
    function UserTest($email){
        $consulta = "SELECT * FROM jugador  WHERE email='$email'";
        $resultado = $this->conexion->query($consulta);
        $fila = $resultado->fetch_assoc();
        if($fila!=null){
            return $fila;
        }else{
            return false;
        }
    }
    
    function InsertarUser($nombre,$apellido,$edad,$email){
         $consulta2 ="INSERT INTO jugador(nombre, apellidos, edad, email) VALUES ('$nombre','$apellido','$edad','$email')";
         $resultado2 = $this->conexion->query($consulta2);
    }
    
    function UpdateUser($puntos,$email){
        $consulta3 ="UPDATE jugador SET puntos='$puntos' WHERE email='$email'";
        $resultado3 = $this->conexion->query($consulta3);
    }
        
}

?>