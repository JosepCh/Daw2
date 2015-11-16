<?php
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
		?>
		
		<div class="col-md-1"></div>
			<div class="col-md-2">
				<h4 class="titulo"><strong>Tu Tirada <?php echo $_SESSION['Jugador']->getNombre();?> : </strong></h4>
			</div>
  		</div>
		<div class="col-md-2">
			    <img class="dado" src="img/dado<?php echo $valor1;?>.png"/>
		</div>
			<div class="col-md-2">
			    <img class="dado" src="img/dado<?php echo $valor2;?>.png"/>
		</div>
			<div class="col-md-2">
			    <img class="dado" src="img/dado<?php echo $valor3;?>.png"/>
		</div>
			<div class="col-md-2">
			    <img class="dado" src="img/dado<?php echo $valor4;?>.png"/>
		</div>
			<div class="col-md-2">
			<img class="dado" src="img/dado<?php echo $valor5;?>.png"/>
			<br></br>
		</div>
	
 		<div class="col-md-5 col-md-offset-1">
 				<!--Formulario que envia los datos a receptor.php para que los maneje!-->
			 <form class="form-horizontal" role="form" method="post" action="receptor.php">
   				 	<div class="form-group">
    						<label class="control-label titulo" for="dado1">Dado1:</label>
     						<input type="number" name="valor1" class="form-control" id="dado1" placeholder="Introduce número">
     			<!--Input oculto que contiene el valor para poder hacer mejor las comparaciones despues!-->
     						<input type="hidden" value="<?php echo $valor1;?>" name="hidden"/>
   					</div>
    		 		<div class="form-group">
    						<label class="control-label titulo" for="dado2">Dado2:</label>
    						<input type="number" name="valor2" class="form-control" id="dado2" placeholder="Introduce número">
    			<!--Input oculto que contiene el valor para poder hacer mejor las comparaciones despues!-->
    						<input type="hidden" value="<?php echo $valor2;?>" name="hidden2"/>
    		   		</div>
    		   		<div class="form-group"> 
    		   			
     						<div class="radio">
     						<?php 
     						if($tipo==1){?>
        							<label class="titulo"><input type="radio" name="opciones" checked value="+">+</label>
         							<label class="titulo"><input type="radio" name="opciones" value="-">-</label>
         							<label class="titulo"><input type="radio" name="opciones" value="*">*</label>
         							<label class="titulo"><input type="radio" name="opciones" value="/">/</label>
         					<?php
    		   				}
    		   				?>
    		   				<?php 
    		   				if($tipo==2){
    		   					?>
    		   						<label class="titulo"><input type="radio" name="opciones" checked value="+">+</label>
         							<label class="titulo"><input type="radio" name="opciones" value="-">-</label>
         						
    		   					<?php
    		   				} 
    		   				?>
   			  				</div>
    		   				
    		  		</div>
  	 		 		<div class="form-group"> 
      						<button type="submit" class="btn btn-success" id="btn_comprobar">Comprobar</button>
  					</div>
	  		 </form>
		</div>

		<div class="col-md-2 col-md-offset-1">
	  		 	<img src="img/dode<?php echo $valor6;?>.png"></img>
	  	 </div>	
</div>
<?php
  }
?>