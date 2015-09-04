  
<html>

    <head>
        <title>ejercicio numero 7 </title>
    </head>
    

<body>

<p>Pedir al usuario cuántas millas desea convertir en milímetros, centímetros, metros, kilómetros, yardas, pies y pulgas. Desplegar en todas estas conversiones.
o 1 km equivale a 0,6214 millas.
o 1 millas equivale a 1760 yardas.
o 1 yarda equivale a 3ft.
o 1 yarda equivale a 36 pulgadas.</p> <br/>
    
    
<form method='POST' > 
        
                 Ingrese por favor las millas a convertir  : <input name = 'numero' type='text'/> 
                 
                 <input name='enviar' type='submit' value='Enviar Numero' />
                 
                 
                 </form>

<?php
function convertir($numero){      
    $numero2 = number_format($numero, 3,'');   
    return $numero2;
}
if(isset($_POST['enviar'])){
    
    $millas = $_POST['numero'];
    
    $km =  $millas / 0.6214 ;
    $metros = $km * 1000;
    $cm = $metros * 100;
    $mm = $cm * 10;
    $yarda = $millas / 1760;
    $pulgada = $yarda * 36;
    $pie = $yarda * 3;
    
    
         $km2 = convertir($km);
         $metros2 = convertir($metros);
         $cm2 = convertir($cm);
         $mm2 = convertir($mm);
         $yarda2 = convertir($yarda);
         $pulgada2 = convertir($pulgada);
         $pie2 = convertir($pie);
    
    
    
    echo "se tiene en millas $millas millas: <br>
    <br>";
    
    echo "Kilometros ". $km2.  
         "<br>Metros ".$metros2  .
         "<br>Centimetros ".$cm2 .
         "<br>Milimetros ".$mm2 .
         "<br>Yardas ".$yarda2.
         "<br>Pulgadas ".$pulgada2.
         "<br>Pies ".$pie2
            
            ;
   
}


?>
</body>
    
</html>