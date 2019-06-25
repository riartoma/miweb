<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br/><br/><br/><br/>
<?php

$numero=$_GET["numero"];

	if(isset($_GET["sumar"])){
		echo "el numero enviado es: ".$numero."<br/>";
		$sumado=$numero+$numero;
		echo "el numero enviado se sumo con si mismo y el resultado es: ".$sumado;
	}
	else {
		if(isset($_GET["restar"])){
			echo "el numero enviado es: ".$numero."<br/>";
			$restado=$numero-$numero;
			echo "el numero enviado se resto con si mismo y el resultado siempre debe ser cero: ".$restado;
		}
		else{
			if(isset($_GET["multiplicar"])){
				echo "el numero enviado es: ".$numero."<br/>";
				$multiplicado=$numero*$numero;
		echo "el numero enviado se multiplico con si mismo y el resultado es: ".$multiplicado;
			}
			else{
				if (isset($_GET["dividir"])) {
					echo "el numero enviado es: ".$numero."<br/>";
					$dividido=$numero/$numero;
		echo "el numero enviado se dividio con si mismo y el resultado es: ".$dividido;
				}
				else{
					echo "no utilizo ningun boton";
				}
			}
		}
	}

?>
</body>
</html>
