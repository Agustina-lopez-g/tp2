<?php   
//Ordenar en forma creciente tres valores diferentes A, B, C.
$numeros = "";
$resultado = "";

if ($_POST) {
    $a =$_POST["a"];
    $b =$_POST["b"];
    $c =$_POST["c"];

    if ($a > $b) {
        if ($a > $c ) {
            
            if ($b>$c) {
                $mayor = $a;
                $medio=$b;
                $menor =$c;
            }else{
                $mayor = $a;
                $medio=$c;
                $menor =$b;
            } 
        }else{
            $mayor=$c;
            $medio=$a;
            $menor=$b;
        }
    }elseif ($a>$c) {
        
        $mayor=$b;
        $medio=$a;
        $menor=$c;
    }elseif ($b>$c) {
        $mayor=$b;
        $medio=$c;
        $menor=$a;
    }else{
        $mayor=$c;
        $medio=$b;
        $menor=$a;
    }

    $resultado = $menor." ".$medio." ".$mayor;
    $numeros = $a." ".$b." ".$c;
}

?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ordenar en forma creciente tres valores diferentes A, B, C.</p>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div class="conainer">
        <p>Numeros : <?php echo $numeros;?></p>
        <p>Resultado: <?php echo $resultado;?></p>
    </div>    
</body>
</html>