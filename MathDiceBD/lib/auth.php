<?php

include('cabecera.php');
include('conf.php');
require_once('Jugador.php');
require_once('Juego.php');

session_start();


if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){ 
     $_SESSION['Jugador'] = new Jugador();
        $_SESSION['Juego'] = new Juego();
            if(strlen($_POST['nombre'])!=0)
            {
                 if(isset($_POST['opciones_juego']))
                {
                    $_SESSION['Jugador']->setNombre($_POST['nombre']);
                    $_SESSION['Jugador']->setApellidos($_POST['apellidos']);
                    $_SESSION['Jugador']->setEdad($_POST['edad']);
                    $_SESSION['Juego']->setTipo($_POST['opciones_juego']);
                        if(isset($_POST['opciones_idioma']))
                        {
                            $_SESSION['Juego']->setIdioma($_POST['opciones_idioma']);
                        }else
                        {
                            $_SESSION['Juego']->setIdioma('es');
                            
                        }
                }else
                {
                    ?>
                        <script type="text/javascript">
                            alert('Falta el tipo de juego');
                         </script>
<?php
                }
            }
}
?>