<?php
include('lib/Jugador.php');
include('lib/Juego.php');
include('cabecera.php');

session_start();

/*Encargado de coger los datos del usuario y crear el Objeto Jugador y sino encuentra los datos obligatorios te redirige
a la pagina principal hasta que no se rellene correctamente*/
if(strlen($_POST['nombre'])!=0){
                    $_SESSION['Jugador']->setNombre($_POST['nombre']);
    if(strlen($_POST['apellidos'])!=0){
             $_SESSION['Jugador']->setApellidos($_POST['apellidos']);
    } 
    if(strlen($_POST['edad'])!=0){
        $_SESSION['Jugador']->setEdad($_POST['edad']);
    } 
    header('Location:dado.php');
}else{
}

if($_SESSION['Jugador']==null){
    header('Location:index.php');
}
?>
<div class="col-md-3 registro">
    <img src="./img/logo.png"></img>
        <form role="form" action="perfil.php" method="post">
            <fieldset class="schedule-border">
            <legend class="scehdule-border titulo">Introduzca sus nuevos datos</legend>
            <h6>* : Campos Obligatorios</h6>
          <div class="form-group">
               <label for="nombre" class="nombre">* Nombre:</label>
               <input type="text" name="nombre" class="form-control" id="nombre" value=<?= $_SESSION['Jugador']->getNombre()?> >
          </div>
          
          <div class="form-group">
                <label for="apellidos" class="apellidos">Apellidos:</label>
                <input type="text" name ="apellidos" class="form-control" id="apellidos" value=<?= $_SESSION['Jugador']->getApellidos()?>>
          </div>
          <div class="form-group">
                <label for="edad" class="edad">Edad:</label>
                <input type="number" name="edad" class="form-control" id="edad" value=<?= $_SESSION['Jugador']->getEdad()?>>
          </div>
          <button type="submit" class="btn btn-default boton" name="submit">Guardar Cambios</button>
            </fieldset>
        </form>
</div>