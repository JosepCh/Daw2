<?php
	include('lib/auth.php');
	menu($_SESSION['Juego']->getIdioma());
	$tipo_juego = $_SESSION['Juego']->getTipo();
	var_dump($_SESSION['Jugador']);

	
?>
<?php
//Cogemos el tipo de juego
if($tipo_juego=='Junior'){
	pintarDados(2);
}else if($tipo_juego=='Junior +'){
	pintarDados(1);
}

