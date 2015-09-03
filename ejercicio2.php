<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<!-- A02: Calcular cuanta distancia en kilómetros recorre la velocidad de la luz en el espacio en 800 días. -->
	<!-- Velocidad de la luz 299792458 m/s; -->
	<!-- Kilometros por hora 8.765.812 * 24 -->
	<!-- Kilometros por dia 210379488 -->
	<!-- Total 210379488 * 800 -->
	<form action="desarrollo_02.php" method="POST">
		 Cantidad de Dias:<br>
  		<input type="text" name="dias" id="dias" value="0">
  		<input type="submit" value="Enviar">
	</form>
	<?php if(!empty($_GET['velocidad'])){
		echo  "La cantidad del recorrido es:".$_GET['velocidad'];		
	} 

    ?>

</body>
</html>