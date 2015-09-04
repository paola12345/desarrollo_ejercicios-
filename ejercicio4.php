<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio numero 4 </title>
    </head>
    <body>
       
        
        <form method='POST'>
        
            <p> Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés.</p> <br/>
            
         por favor Ingrese un numero :
            
        <input name = 'numero' type='number' min='0' max ='9999' > 
        
        <br> <input type='submit' value='Enviar numero'/>
        
         </form>
        
        
        
        
        
        <!-- CODIGO PHP -->
        
        
        
        
        <?php 
          
          
        if(isset($_REQUEST['numero'])){
         $p =  $_POST['numero'];
        
        
      
           
        echo "el  numero que usted a ingresado al reves es: ".strrev($p);
        }
        
        ?>
    </body>
</html>