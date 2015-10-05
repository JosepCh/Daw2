<?php
	//----------------------------
	//FUNCION QUE HAY QUE MODIFICAR PARA QUE FUNCIONE CORRECTAMENTE
	//----------------------------
	function avatarCode($entrada)
	{
		$valor_salida=$entrada;
		$valor_salida=$valor_salida+5;
		return ++$valor_salida;
	}
?>
<html>
	<head>
		<title>CODE 02</title>
		<style>
		body{
			background-color: #D7CCC8;
		}
		.OK {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #00E676;
		}
		.KO {
			width:50%;
			border: 1px solid #000000;
			margin:auto;
		    background-color: #FF3D00;
		}
		h1.spacing {
		  text-align: center;
		  font-family: Tahoma;
		  font-size: 1.8em;
		  text-transform: uppercase;
		  letter-spacing: 0.08em;
		  word-spacing: 0.1em;
		  color: #ffffff;
		}
		</style>
	</head>
	<body>
		<div id="spacing">
		  <h1 class="spacing">CODE 02</h1>
		</div>
		<?php
			//COMPROBAMOS PARA EL VALOR 0. DEBERIAMOS OBTENER UN 6
			echo "<div class=".(avatarCode(0)==6?"OK":"KO").">";
			echo "Valor de entrada=0"."</br>"."valor esperado en la salida=6"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(0)."</br>";
			echo "</div>";
			echo "</br>";
			//COMPROBAMOS PARA EL VALOR 5. DEBERIAMOS OBTENER UN 11
			echo "<div class=".(avatarCode(5)==11?"OK":"KO").">";
			echo "Valor de entrada=5"."</br>"." valor esperado en la salida=11"."</br>";
			echo "--------------------------------"."</br>";
			echo "Valor de salida=".avatarCode(5)."</br>";
			echo "</div>";
		?>
	</body>
</html>