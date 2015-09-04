<h4>Digite porfavor un numero para saber si el numero es capicuo</h4>



<form method='POST'>

    <p>Pedir un número entre 0 y 9.999, decir si es capicúa.</p> <br>
    
    Ingrese el numero: <input name = 'numero' type='number' min='0' max ='9999' >  <br>
    
<input type='number' name='capicuo' required/>
<br>
<input name='suma' type='submit' value='Enviar el Numero' />
<br>
    
    <!-- codigo php-->
    
    
  <?php
   if(isset($_REQUEST['suma'] )){
    
       $numero = $_POST['capicuo'];
    
        $capicuo = strrev($numero);
    
   
    
    if($numero == $capicuo) 
           echo "El numero $numero si es  capicuo";
          
           else echo "El numero $numero no es capicuo";
    
}
?>