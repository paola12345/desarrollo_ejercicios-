<html>

    <head>
        <title>ejercicio numero 5 </title>
        
        <p>Leer un número hasta que este sea diferente de 0 (cero), y desplegar continuamente su
suma y el número de datos solicitados.</p>
    </head>
    

<body>

  <form method="POST">
     <form action="desarrollo_02.php" method="POST">
		 Ingrese un numero:<br>
  		<input type="text" name="numero" id="numero" value="0">
              
        <button id="enviar" name="enviar" value="enviar">Enviar datos</button>
     <br />   
       </form>  
    
     <?php
        

 if(isset($_POST['numero'])){
	
	$num=$_POST['numero'];
	$j=0;
    
    
 while($num!=0){
		$num++;
		$n=$num+$j;
		
	}
	echo" el resultado es ".$n;
}
?>
    
    
    </body>
</html>