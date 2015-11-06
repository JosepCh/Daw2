<!DOCTYPE html>
<html>
    <title>MathDice</title>
    
    <body style="background-color:blue">
    <div class="col-md-3 registro">
         <img src="./img/logo.png"></img>
        <form role="form" action="Jugador.php" method="post">
            <fieldset class="schedule-border">
            <legend class="scehdule-border titulo_reg">Introduzca sus datos</legend>
          <div class="form-group">
               <label for="nombre" class="nombre">Nombre:</label>
               <input type="text" class="form-control" id="nombre">
          </div>
          
          <div class="form-group">
                <label for="apellidos" class="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos">
          </div>
          <div class="form-group">
                <label for="edad" class="edad">Edad:</label>
                <input type="number" class="form-control" id="edad">
          </div>
          
          <button type="submit" class="btn btn-default">Jugar</button>
            </fieldset>
        </form>
    </div>
    </body>
</html>