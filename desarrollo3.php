<?php



   if (isset($_POST['area'])){
       
              $tipo = $_POST['area'];
         if ($tipo == "Circulo"){
                $valor = $_REQUEST['valor'];
                $valor1 = $valor * $valor;                        
                $b= 3.1416 * $valor1; 
                echo "el area del circulo es:".$b;
                
        }elseif ($tipo = "Circunferencia") {
                $valor = $_POST['valor'];
                $valor1 = $valor + $valor;                        
                $a= 3.1416 * $valor1;
                
                echo "la longitu de la circuferencia es:".$a;
            }    
        }


?>
