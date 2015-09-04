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
  
      
    
 </body>
</html>