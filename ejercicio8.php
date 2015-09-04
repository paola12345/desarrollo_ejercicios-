<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio numero 8</title>
    </head>
    <body>
     
        
      <p>Solicitar al usuario el total de kilómetros que recorre su automóvil si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, redondear el resultado para que no muestre decimales.</p> <br />
           
          <form method="POST">
      <label>Ingrese la canitadad de Kilometros que recorre el automovil: </label><input id='txtKm' name='txtKm' onKeypress="if (event.keyCode <                45 || event.keyCode >57) event.returnValue = false;" maxlength="6"  required="required">
     <br />  
        
              
        <button id="enviar" name="enviar" value="enviar">Enviar datos</button>
     <br />   
       </form>
        

       <!--codigo php -->
        
        <?php
 
    if (isset($_POST['txtKm'])){
            $p=$_POST['txtKm'];
            $litrosg=16.4;
            $r=0;

            $r=$p/$litrosg;

        echo "El total de los litros que consume el automovil es: ".  round ($r) ." litro(s)";
 }


    ?>    
        
    </body>     
    </html>   