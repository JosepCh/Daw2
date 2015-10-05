<!DOCTYPE html>
<html>
<head>
	<title>Menú</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$lang = "en";
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
			"opciones"=>array(
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
    	foreach($menu as $valor=>$key){
    	}
    	?>
      <a class="navbar-brand" href="#"><?php print_r($menu['titulo'][$lang]) ?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php print_r($menu['inicio'][$lang]) ?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu['juego'][$lang]) ?> <span class="caret"></span></a>
        <?php
    					if(isset($menu['juego']['submenu'])!=null){
    						foreach($menu['juego']['submenu'] as $opt=>$key2){
    					}
    					}
    						?>
    				  
          <ul class="dropdown-menu">
            <li><a href="#"><?php print_r($opt) ?></a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#"><?php print_r($menu['instrucciones'][$lang]) ?></a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>