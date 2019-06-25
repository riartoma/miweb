<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
<br/><br/><br/><br/>
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
echo "este es el nombre que me llego: ".$nombre."<br/>";
echo "este es el apellido que me llego: ".$apellido."<br />";

$numero=$_GET["numero"];
$suma=$numero + 5;
$resta=$numero - 3;
$multiplicacion=$numero * 2;
$division = $numero/2;
echo "este es el numero que usted ingreso".$numero."<br/>";
echo "este es el resultado de la suma".$suma."<br/>";
echo "este es el resultado de la resta".$resta."<br/>";
echo "este es el resultado de la multiplicacion".$multiplicacion."<br/>";
echo "este es el resultado de la division".$division."<br/>";

?>
</body>
</html>
