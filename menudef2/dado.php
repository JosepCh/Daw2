<?php
	require('cabecera.php');
	require('conf.php');
	require('lib/Jugador.php');
	require('lib/Juego.php');
	//Archivo que recoge el tipo de juego que hemos seleccionado en el inicio y depende de cual hemos elegido nos pintara una cosa o otra
	session_start();
	menu($_SESSION['Juego']->getIdioma());
	$tipo_juego = $_SESSION['Juego']->getTipo();
	
?>
<?php
//Cogem
if($tipo_juego=='Junior'){
	pintarDados(2);
}else if($tipo_juego=='Junior +'){
	pintarDados(1);
}

