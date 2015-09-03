<?php
	if(!empty($_POST['dias'])){
		$nDias = $_POST['dias'];
		$kmPorDia = 8765812 * 24;
		$total = $nDias * $kmPorDia;
		header("Location: Ejercicio_01.php?velocidad=".$total);
	}
 ?>