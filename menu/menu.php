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
$lang = "es";
$menu = array(
	"titulo"=>array(
		"es"=>"MathDice",
		"eng"=>"MathDice"
		),
		"inicio"=>array(
		  "es"=>"Inicio",
		  "eng"=>"Home"
		  ),
	"juego"=>array(
		"es"=>"Juego",
		"eng" =>"Game",
		"submenu"=>array(
			"opciones"=>array(
				"eng"=>"Options",
				"es"=>"Opciones",
				"op1"=>"Dificultad Baja",
				"op2"=>"Dificultad Media",
				"op3"=>"Dificultad Alta"
				)
			)
		),
	"instrucciones"=>array(
		"eng"=>"Instructions",
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
      <a class="navbar-brand" href="#"><?php $menu?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>