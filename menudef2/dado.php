<div class="container">
	<div class="row">
		
		<?php
		//Guardamos los numeros en dos variables para poder trabajar mejor
			$valor1 = aleatorio(1,6);
			$valor2 = aleatorio(1,3);
		?>
		<div class="col-md-1"></div>
			<div class="col-md-2">
				<h5><strong>Dado Aleatorio :</strong></h5>
			</div>
  		</div>
		<div class="col-md-2">
			    <img class="dado" src="img/dado<?php echo $valor1;?>.png"/>
		</div>
		<div class="col-md-2 col-md-offset-1">
			<img class="dado" src="img/dado<?php echo $valor2;?>.png"/>
			<br></br>
		</div>
	
 		<div class="col-md-5 col-md-offset-1">
 				<!--Formulario que envia los datos a receptor.php para que los maneje!-->
			 <form class="form-horizontal" role="form" method="post" action="receptor.php">
   				 	<div class="form-group">
    						<label class="control-label" for="dado1">Dado1:</label>
     						<input type="number" name="valor1" class="form-control" id="dado1" placeholder="Introduce número">
     			<!--Input oculto que contiene el valor para poder hacer mejor las comparaciones despues!-->
     						<input type="hidden" value="<?php echo $valor1;?>" name="hidden"/>
   					</div>
    		 		<div class="form-group">
    						<label class="control-label" for="dado2">Dado2:</label>
    						<input type="number" name="valor2" class="form-control" id="dado2" placeholder="Introduce número">
    			<!--Input oculto que contiene el valor para poder hacer mejor las comparaciones despues!-->
    						<input type="hidden" value="<?php echo $valor2;?>" name="hidden2"/>
    		   		</div>
    		   		<div class="form-group"> 
     						<div class="radio">
        							<label><input type="radio" name="opciones" checked value="+">+</label>
         							<label><input type="radio" name="opciones" value="-">-</label>
   			  				</div>
    		  		</div>
  	 		 		<div class="form-group"> 
      						<button type="submit" class="btn btn-success" id="btn_comprobar">Comprobar</button>
  					</div>
	  		 </form>
		</div>
	
	
	<div class="row">
			<div class="col-md-2">
				<button class="btn btn-primary" onclick=''>Refrescar Dados</button>
			</div>
	</div>
	
</div>
