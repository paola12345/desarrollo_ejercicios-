<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio numero 10</title>
    </head>
    <body>
        
    <form  method="POST">
    <p>Pedir el día, mes y año de una fecha e indicar si la fecha es correcta. Con meses de 28,
30 y 31 días. Sin años bisiestos.</p> <br/> 

echo "<h3>Digite por favor el Dia, el Mes, el Año </h3>
<table border= 3px >
<tr>
<td>Dia</td>
<td>Mes</td> 
<td>Año</td>
</tr>
";     
  echo "<form method='POST'>";
        tabla('dia','mes','ano');
        
        
    function tabla($dia , $mes , $ano){
        
        echo "   
        <tr>
        <td><input type='number' name='$dia' required/></td>
        <td><input type='number' name='$mes' required/></td>
        <td><input type='text' name='$ano' required/></td>
        </tr>
          ";
      
 
}
    echo "</table>
        <br>
        <input name='fecha' type='submit' value='Enviar los Datos' />
        <br><br>"; 

 
</form>
  
 <?php
 
    
$auxi = 0;
if(isset($_REQUEST['enviar'])){
	
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$anio = $_POST['ano'];
	
    
    if($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){
		  if($dia <= 31){
			 $auxi++;
		}
	}
	if( $mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){
		  if($dia <= 30){
			$auxi++;
		}
	}
   if( $mes == 2){
		if($dia <= 28){
			$auxi++;
		}
	}
	if($auxi == 1){
		echo  "La fecha ".$dia. "" . $mes. "-".$anio ."es correcta" ;
	}else{
		echo  "La fecha ".$dia. "-" . $mes. "-".$anio ."es incorrecta" ;
	}
}
?> 
    
 </body>
</html>