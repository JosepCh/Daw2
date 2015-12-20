<?php
	include('lib/auth.php');
	
	if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){ 
		header('Location:index.php');
	}
	
	menu($_SESSION['Juego']->getIdioma());
	$tipo_juego = $_SESSION['Juego']->getTipo();
	$objetivo=5;
	
			/* Le asignamos una tirada al jugador que su valor lo recibe de logica.js y le envia un numero*/
		   $_SESSION['Jugador']->setTirada($_POST['hidden']);
		/* Cogemos los puntos del jugador y si se cumple que su tirada es correcta le sumaremos 1 punto a su puntuacion*/
				$puntuacion=$_SESSION['Jugador']->getPuntos();	
					if($_POST['hidden']!=0)
					{
						if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca'])
						{
							$puntuacion++;
							$_SESSION['Jugador']->setPuntos($puntuacion);
							$bd->UpdateUser($_SESSION['Jugador']->getPuntos(),$_SESSION['Jugador']->getEmail());
						}	
					}
					if($_SESSION['Jugador']->getPuntos()==$objetivo)
					{
						header('Location:resultado.php');
						$bd->UpdateUser($_SESSION['Jugador']->setPuntos(0),$_SESSION['Jugador']->getEmail());
					}
	
?>
<?php
//Cogemos el tipo de juego
if($tipo_juego=='Junior'){
	pintarDados(2);
}else if($tipo_juego=='Junior +'){
	pintarDados(1);
}

