<?php
include('Jugador.php');
include('Juego.php');

session_start();

/*Encargado de coger los datos del usuario y crear el Objeto Jugador y sino encuentra los datos obligatorios te redirige
a la pagina principal hasta que no se rellene correctamente*/

function inicio(){
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
                            header('Location:dado.php');
                }else
                {
                    ?>
                        <script type="text/javascript">
                            alert('Falta el tipo de juego');
                         </script>
<?php
                }
            }
?>
<div class="col-md-3 registro">
    <img src="./img/logo.png"></img>
        <form role="form" action="index.php" method="post">
            <fieldset class="schedule-border">
            <legend class="scehdule-border titulo">Introduzca sus datos</legend>
            <h6>* : Campos Obligatorios</h6>
          <div class="form-group">
               <label for="nombre" class="nombre">* Nombre:</label>
               <input type="text" name="nombre" class="form-control" id="nombre">
          </div>
          
          <div class="form-group">
                <label for="apellidos" class="apellidos">Apellidos:</label>
                <input type="text" name ="apellidos" class="form-control" id="apellidos">
          </div>
          <div class="form-group">
                <label for="edad" class="edad">Edad:</label>
                <input type="number" name="edad" class="form-control" id="edad">
          </div>
          <div class ="form-group">
             <h5 class="titulo2"><strong>* Tipos de Juego :</strong></h5>
          <label class="radio-inline lab_opc">
              <input type="radio" id="Junior" value="Junior" name="opciones_juego">Junior
          </label>
          <label class="radio-inline lab_opc">
              <input type="radio" id="Junior+" value="Junior +" name="opciones_juego">Junior +
          </label>
          </div>
          <div class ="form-group">
              <h5 class="titulo2"><strong> * Idiomas :</strong></h5>
               <label class="radio-inline lab_opc">
                  <input type="radio" id="Junior" value="es" name="opciones_idioma">Español
              </label>
              <label class="radio-inline lab_opc">
                  <input type="radio" id="Junior" value="en" name="opciones_idioma">Inglés
              </label>
          </div>
          <button type="submit" class="btn btn-default boton" name="submit">Jugar</button>
            </fieldset>
        </form>
</div>
<?php
}
?>
