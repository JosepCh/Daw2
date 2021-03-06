<?php 
require('funciones.php');
$lang = "es";
$menu = array(
	"titulo"=>array(
		"es"=>"MathDice",
		"en"=>"MathDice"
		),
		"inicio"=>array(
		  "es"=>"Inicio",
		  "en"=>"Home"
		  ),
	"juego"=>array(
		"es"=>"Juego",
		"en" =>"Game",
		"submenu"=>array(
				"op1"=>array(
					"en"=>"Low Difficulty",
					"es"=>"Dificultad Baja"
					),
				"op2"=>array(
					"en"=>"Medium Difficulty",
					"es"=>"Dificultad Media"
					),
				"op3"=>array(
					"en"=>"High Difficulty",
					"es"=>"Dificultad Alta"
					),
				
			)
		),
	"instrucciones"=>array(
		"en"=>"Instructions",
		"es"=>"Instrucciones"
		)
	);

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    	<?php 
    	//Por cada elemento que halla en el array menu lo metemos dentro de la variable $valor
    	foreach($menu as $key=>$valor){
    		//Vemos si entre esos valores esta el valor 'submenu' y si existe lo recorremos y lo guardamos en $opt
    		if(isset($valor['submenu'])){
    			foreach($valor as $key=>$opt){
    					
    			};
    		};
    	};
    	?>
      <a class="navbar-brand" href="#"><?php print_r($menu['titulo'][$lang]) ?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php print_r($menu['inicio'][$lang]) ?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu['juego'][$lang]) ?> <span class="caret"></span></a>
   
          <ul class="dropdown-menu">
            <li><a href="#"><?php print_r($opt['op1'][$lang]) ?></a></li>
            <li><a href="#"><?php print_r($opt['op2'][$lang]) ?></a></li>
            <li><a href="#"><?php print_r($opt['op3'][$lang]) ?></a></li>
          </ul>
        </li>
        <li><a href="#"><?php print_r($menu['instrucciones'][$lang]) ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<!--Ponemos un contenedor en el cual ponemos los 6 dados y los dados aleatorios-->
<class="container-field">
<!--Ponemos en cada fila una imagen de un dado dependiendo del valor de i-->
	<div class="row">
	<?php
	for($i=1;$i<=6;$i++){?>
	<div class="col-md-2"><img src="img/dado<?php echo $i ?>.png"/></div>
	<?php
	}
	?>
</div>
<br>
<h5><strong>Dados Aleatorios :</strong></h5>
<!--Llamamos a la funcion aleatorio que se encuentra en el fichero funciones.php y le pasamos los parametros que queramos-->
<img src="img/dado<?php echo aleatorio(1,6);?>.png"/><!--Pintara un dado que vaya desde el 1 al 6-->
<img src="img/dado<?php echo aleatorio(1,3);?>.png"/><!--Pintara un dado que vaya desde el 1 al 3-->
