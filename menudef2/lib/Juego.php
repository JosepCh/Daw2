<?php
/*Creamos la clase Juego que es la que gestiona todo lo que ocurre mientras estamos jugando(pintar dados,dados aleatorios,comprobaciones) 
Tiene getters y setters para poder modificar y acceder a los datos del juego facilmente
*/
class Juego{
    function Juego(){}
    
    public function getIdioma(){
        return $this->idioma;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
   
   public function setIdioma($idioma){
       $this->idioma = $idioma;
   }
   public function setTipo($tipo){
       $this->tipo = $tipo;
   }
}

  function aleatorio($min,$max){
    $numero=rand($min,$max);
    return $numero;
}
  
  function pintarDados($tipo){
      ?>
    <div class="container">
		<div class="row">
		
			<?php
				//Guardamos los numeros en dos variables para poder trabajar mejor
				$valor1 = aleatorio(1,6);
				$valor2 = aleatorio(1,6);
				$valor3 = aleatorio(1,6);
				$valor4 = aleatorio(1,3);
				$valor5 = aleatorio(1,3);
				$valor6 = aleatorio(1,12);
				$objetivo = 5;
				/* Le asignamos una tirada al jugador que su valor lo recibe de logica.js y le envia un numero*/
				$_SESSION['Jugador']->setTirada($_POST['hidden']);
				/* Cogemos los puntos del jugador y si se cumple que su tirada es correcta le sumaremos 1 punto a su puntuacion*/
				$puntuacion=$_SESSION['Jugador']->getPuntos();	
					if($_POST['hidden']!=0)
					{
						if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca'])
						{
							$puntuacion++;
							$_SESSION['Jugador']->setPuntos($puntuacion);	
						}	
					}
		if($_SESSION['Jugador']->getPuntos()==$objetivo)
		{
			header('Location:resultado.php');
		}
		?>
		
		<div class="col-md-1"></div>
			<div class="col-md-2">
				<h4 class="titulo"><strong>Tu Tirada <?php echo $_SESSION['Jugador']->getNombre();?> : </strong></h4>
			</div>
  		</div>
		<div class="col-md-2">
			    <img class="dado" id="dado1" onclick="numero(<?php echo $valor1?>)" src="img/dado<?php echo $valor1;?>.png"/>
		</div>
			<div class="col-md-2">
			    <img class="dado" id="dado2" onclick="numero2(<?php echo $valor2?>)" src="img/dado<?php echo $valor2;?>.png"/>
			</div>
			<div class="col-md-2">
			    <img class="dado" id="dado3" onclick="numero3(<?php echo $valor3?>)" src="img/dado<?php echo $valor3;?>.png"/>
			</div>
			<div class="col-md-2">
			    <img class="dado" id="dado4" onclick="numero4(<?php echo $valor4?>)" src="img/dado<?php echo $valor4;?>.png"/>
			</div>
			<div class="col-md-2">
				<img class="dado" id="dado5" onclick="numero5(<?php echo $valor5?>)" src="img/dado<?php echo $valor5;?>.png"/>
				<br></br>
			</div>
	
 				<div class="col-md-5">
    		   		<div class="col-md-4 col-md-offset-1" id="resultados">
						<label>Usuario: <?=$_SESSION['Jugador']->getNombre()." ".$_SESSION['Jugador']->getApellidos()."<br>Edad: ".$_SESSION['Jugador']->getEdad()?></label>
						<table class="table">
							<tr class="info">
								<td><strong>Dodecaedro:</strong></td>
								<td></td>
								<td><strong><?=$valor6?></strong></td>
						    </tr>
							<tr class="danger">
								<td><strong>Puntuacion :</strong></td>
								<td></td>
								<td><strong><?=$_SESSION['Jugador']->getPuntos()?></strong></td>
							</tr>
							<tr class="warning">
								<td><strong>Objetivo:</strong></td>
								<td></td>
								<td><strong><?=$objetivo?></strong></td>
							</tr>
			
						</table>
					</div>
					<!--Dependiendo del tipo de juego que recibamos de dado.php pintaremos unos operadores u otros!-->
    		   			<div class="col-md-1 col-md-offset-1 form-group"> 
     							<?php 
     								if($tipo==1){?>
     									<div class="col-md-2">
    		   								<img src="img/suma.png"  onclick="operador('+')"></img>
    		   								<img src="img/multi.png" onclick="operador('*')"></img>
    		   								<img src="img/resta.png" onclick="operador('-')"></img>
    		   								<img id="img" src="img/division.png" onclick="operador('/')"></img>
    		   							</div>
         					
         						<?php
    		   					}
    		   					?>
    		   					<?php 
    		   						if($tipo==2){
    		   					?>
    		   							<div class="col-md-2">
    		   								<img src="img/suma.png" onclick="operador('+')"></img>
    		   								<img src="img/resta.png" onclick="operador('-')"></img>
    		   							</div>
    		   					<?php
    		   					} 
    		   					?>
    		   			</div>
   			  		</div>
   			  		<!-- Formulario oculto que posee el valor del dodecaedro para compararlo luego con el recibido de logica.js !-->
   			  			<div class="col-md-3">
   			  				<form role="form" action="dado.php" method="post">
   			  					<img src="img/dode<?php echo $valor6;?>.png"></img>
   			  					<input type="form-control" name="resultado" id="resultado" value="" readonly/>
   			  					<input type="hidden" name="hidden" id="hidden"/>
								<input type="hidden" name="dodeca" id="dodeca" value="<?=$valor6?>"/>
								<input type="submit" value="Comprobar" class="btn btn-success" id="btn_comprobar" onclick="igualar()"/>
   			  					<br></br>
   			  				</form>
   			  			</div>
    		  	
    		  			<!--Vemos si los parametros recibidos por $_POST son iguales que el dodecaedro o no!-->
    		  			<div class="col-md-4" >
							<?php
			    				if($_POST['hidden']!=0)
			    				{
			    					if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca'])
			    					{
			    						echo "<div class='alert alert-success'><h2>Esa es! Acertaste con tus calculos</h2><br>";
			    					}else
			    					{
			    						echo "<div class='alert alert-danger'><h2>Fallastes! Repasa tus calculos</h2><br>";
			    					}
			    				}
    						?>
						</div>
		</div>
	</div>
<?php
 }
?>