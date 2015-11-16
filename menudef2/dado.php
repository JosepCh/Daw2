<?php
	require('cabecera.php');
	require('conf.php');
	require('Jugador.php');
	require('Juego.php');
	session_start();
		menu($_SESSION['Juego']->getIdioma());
	$tipo_juego = $_SESSION['Juego']->getTipo();
	
?>
<?php
if($tipo_juego=='Junior'){
	pintarDados(2);
}else if($tipo_juego=='Junior +'){
	pintarDados(1);
}

