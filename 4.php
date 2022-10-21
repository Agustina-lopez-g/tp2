<?php

/*Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si
es isoceles, escaleno o equilatero.
isoceles = dos iguales
escaleno = 3 distintos
equilatero = 3 iguales
*/

$resultado = "";

if ($_POST) {
    $a =$_POST["a"];
    $b =$_POST["b"];
    $c =$_POST["c"];
    
    if($a == $b && $c == $a){
        $resultado = "Equilatero";
    }elseif ( $a == $b || $b == $c || $a == $c) {
        $resultado = "Isoceles";
    }else {
        $resultado = "Escaleno";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarea 4</title>
</head>
<body>
    <div class="container">
        <p>
            Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si
            es isoceles, escaleno o equilatero. <br><br>
            isoceles = dos iguales
            escaleno = 3 distintos
            equilatero = 3 iguales
        </p>
        <form method="post">
            <label for="">Lado A</label>
            <input type="text" name="a" id="">
            <label for="">Lado B</label>
            <input type="text" name="b" id="">
            <label for="">Lado C</label>
            <input type="text" name="c" id="">
            <input type="submit" value='Enviar'>
        </form>
    </div>  
    <div class="conainer">
        <p>Resultado: <?php echo $resultado;?></p>
    </div>  
</body>
</html>