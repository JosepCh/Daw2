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
					"en"=>"Junior",
					"es"=>"Junior"
					),
				"op2"=>array(
					"en"=>"Junior +",
					"es"=>"Junior +"
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
   <!-- Redirecciona a index.php!-->
      <a class="navbar-brand" href="index.php"><?php print_r($menu['titulo'][$lang]) ?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
   <!-- Redirecciona a index.php!-->
        <li class="active"><a href="index.php"><?php print_r($menu['inicio'][$lang]) ?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu['juego'][$lang]) ?> <span class="caret"></span></a>
   
          <ul class="dropdown-menu">
            <li><a href="#"><?php print_r($opt['op1'][$lang]) ?></a></li>
            <li><a href="#"><?php print_r($opt['op2'][$lang]) ?></a></li>
          </ul>
        </li>
        <li><a href="instrucciones.php"><?php print_r($menu['instrucciones'][$lang]) ?></a></li>
      </ul>
    </div>
  </div>
</nav>

