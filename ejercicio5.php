<html>

    <head>
        <title>ejercicio numero 5 </title>
        
        <p>Dadas las edades y alturas de 5 alumnos, mostrar la edad y la estatura media, la
cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que miden más de 1.75.</p>
    </head>
    

<body>



<?php
echo "<h3>Digite por favor la edad y la altura de los 5 alumnos</h3>
<table border= 3px >
<tr>
<td>Nombre</td>
<td>Edad</td>
<td>Altura</td>
</tr>
";
echo "<form method='POST'>";
        tabla('Primer', 'edad1','altu1');
        tabla('Segundo', 'edad2','altun2');
        tabla('Tercero', 'edad3','altu3');
        tabla('Cuarto', 'edad4','altu4');
        tabla('Quinto', 'edad5','altu5');
    function tabla($nombre , $id1 , $id2){
        
        echo "   
        <tr>
        <td>$nombre Alumno</td>
        <td><input type='number' name='$id1' required/></td>
        <td><input type='text' name='$id2' required/></td>
        </tr>
          ";
      
 
}
    echo "</table>
        <br>
        <input name='suma' type='submit' value='Enviar los Datos' />
        <br><br>";
?>

</form>


<!--codigo PHP-->
<?php
    function suma($a,$b,$c,$d,$e){
    
        $suma = $_POST[$a];
        $suma += $_POST[$b];
        $suma += $_POST[$c];
        $suma += $_POST[$d];
        $suma += $_POST[$e];
    
        return $suma;
        }
     function sifuncion($a,$op,$c,$d,$e, $con){
    
            $b= 0;
    
            if($_POST[$a] >= $con)$b++;
            if($_POST[$op] >= $con)$b++;
            if($_POST[$c] >= $con)$b++;
            if($_POST[$d] >= $con)$b++;
            if($_POST[$e] >= $con)$b++;
    
    return $b;
}
    if(isset($_POST['suma'] )){
            $a = suma('edad1','edad2','edad3','edad4','edad5');
            $d = suma('altu1','altu2','altu3','altu4','altu5');
            $b = 0;
            $c = 0;
            $b = sifuncion('edad1','edad2','edad3','edad4','edad5',18);   
            $c = sifuncion('altu1','altu2','altu3','altu4','altu5',1.75);
    echo" 
            La media de las edades digitadas es: ". $a/5 ." <br>
            La media de las alturas digitadas es: ". $d/5 ." <br>
            Hay $b alumnos mayores de 18 años <br>
            Hay $c que miden mas de 1.75
";
    }
    ?>

    
    </body>
    
    </html>