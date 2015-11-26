<?php
	//Cuando se cumple el objetivo mostrara este php con un super premio
	    require('cabecera.php');
		require('conf.php');
		require('lib/Juego.php');
		require('lib/Jugador.php');
		
		session_start();
		
		menu($_SESSION['Juego']->getIdioma());
		
		echo "<h2>Enhorabuena ".$_SESSION['Jugador']->getNombre()." : Aqui tienes tu premio : </h2><br>";
		
	
?>
        <a href="index.php"><img class='img_trof' src='img/campeon.png'/></a>
		
		
	