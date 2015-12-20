<?php
/*Creamos un archivo que se encargue de controlar los usuarios(si existen o no en la base de datos)y gestionar los datos del
jugador*/
include('cabecera.php');
include('conf.php');
include('bd.php');
require_once('Jugador.php');
require_once('Juego.php');

session_start();

$bd = new BaseDatos();
$bd->Conectar();
$bd->ComprobarBD();


if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0)
{ 
   
        $_SESSION['Jugador'] = new Jugador();
        $_SESSION['Juego'] = new Juego();
        //Comprobamos si el jugador ya existe en la base de datos mediante el email
        if($bd_jugador=$bd->UserTest($_POST['email']))
        //Si existe el jugador recojemos los datos que tenemos en la base de datos y se los ponemos al jugador.
    {
        if(isset($_POST['opciones_juego']))
        {
            $_SESSION['Jugador']->setNombre($bd_jugador['nombre']);
            $_SESSION['Jugador']->setApellidos($bd_jugador['apellidos']);
            $_SESSION['Jugador']->setEdad($bd_jugador['edad']);
            $_SESSION['Jugador']->setEmail($_POST['email']);
            $_SESSION['Jugador']->setPuntos($bd_jugador['puntos']);
            $_SESSION['Juego']->setTipo($_POST['opciones_juego']);
            if(isset($_POST['opciones_idioma']))
            {
                $_SESSION['Juego']->setIdioma($_POST['opciones_idioma']);
            }else
            {
                $_SESSION['Juego']->setIdioma('es');
                            
            }
        }
        
        
    }else{
        //Por el contrario, si no existe crearemos un nuevo jugador en la base de datos con los datos nuevos.
        $bd->InsertarUser($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['email']);
            $_SESSION['Jugador'] = new Jugador();
            $_SESSION['Juego'] = new Juego();
            $_SESSION['Jugador']->setNombre($_POST['nombre']);
            $_SESSION['Jugador']->setApellidos($_POST['apellidos']);
            $_SESSION['Jugador']->setEdad($_POST['edad']);
            $_SESSION['Jugador']->setEmail($_POST['email']);
            $_SESSION['Juego']->setTipo($_POST['opciones_juego']);
            if(isset($_POST['opciones_idioma']))
            {
                $_SESSION['Juego']->setIdioma($_POST['opciones_idioma']);
            }else
            {
                $_SESSION['Juego']->setIdioma('es');
                            
            }
    }
}
?>