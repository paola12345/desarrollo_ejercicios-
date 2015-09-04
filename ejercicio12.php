
<html>

    <head>
        <title>ejercicio numero 12 </title>
        
        <p>Realizar un juego para adivinar un número. Para ello pedir un número N, y luego ir
pidiendo números indicando “mayor” o “menor” según sea mayor o menor con respecto a N.
El proceso termina cuando el usuario acierta.</p>
    </head>

<body>
    <form method='POST' > 
        
    Ingrese un numero : <input name = 'num' type='text'/> 
                 
    <input name='numero' type='submit' value='Enviar Numero' />
                 
                 
 </form>

   <?php
		
		 if (isset($_POST['numero'])&& (isset($_POST['numero2']))){
			$num=$_POST['numero'];
			$num2=$_POST['numero2'];
			$numeros=rand(3,3);
			echo $numeros;
             
			if($_POST['numero'] == $numeros){
			
            
           echo"Felicitaciones adivinaste el numero";
            echo $num;
                
            }elseif($num2 > $numero){
                echo "El numero es menor que $num";
        
          }elseif($num2 < $numero){ 
                echo "El numero es mayor que $num";
            
            }
           
                
         }
?>  
    
 </body>
    
</html>
    
    
    
