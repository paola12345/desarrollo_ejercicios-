<html>

    <head>
        <title>ejercicio numero 11 </title>
        
        <p>Solicitar calificaciones desde 1 a 10 hasta que se ingrese como calificación 0 (cero) y
desplegar como resultado las materias cursadas, las aprobadas y las reprobadas.</p>
    </head>
    

<body>
<form method="POST">
<p>Ingrese por favor la calificacion: 
  
    <input name="calificacion" id="calificacion" type="text" value="0"/> <br/>

    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
    
    </p>

    </form>
    
    <?php
       
if(!isset($_SESSION['sumaCalificaciones'])){
	$_SESSION['sumaCalificaciones'] = 0;
	$_SESSION['numematerias'] = 0;
	$_SESSION['aprobadas'] = 0;
	$_SESSION['reprobadas'] = 0;
}

    if (isset($_POST['calificacion'])) {
	       $califiacion = $_POST['calificacion'];
	if ($califiacion <= 10 && $califiacion >= 0 && $califiacion != 0){
		
			$_SESSION['sumaCalificaciones'] = $_SESSION['sumaCalificaciones'] + $califiacion;
			$_SESSION['numematerias'] = $_SESSION['numematerias'] + 1;
    }
    if ($califiacion > 6){
				$_SESSION['aprobadas'] = $_SESSION['aprobadas'] + 1;
    }else{
				$_SESSION['reprobadas'] = $_SESSION['reprobadas'] + 1;
			}
			
		
			echo "El promedio de las materias es: ".($_SESSION['sumaCalificaciones'] / $_SESSION['numematerias'])."</br>";
			echo "El numero de materias es: ".$_SESSION['numematerias']."</br>";
			echo "Las materias aprobadas son: ".$_SESSION['aprobadas']."</br>";
			echo "Las materias reprobadas son: ".$_SESSION['reprobadas']."</br>";
			

		}
	

    
?>
    
</body>
</html>