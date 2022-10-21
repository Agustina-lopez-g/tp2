<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.</p>
<form method="post">
        <label for="">Numero</label>
            <input type="text" name="numero" value='<?php echo ($_POST) ? $_POST['numero'] : ""; ?>' id="">
    <input type="submit" name="submit">
</form>
<?php

$resultado = " ";
$numero = " ";

if($_POST){
    
    $numero = $_POST["numero"];
    if ($numero == 0) {
        $resultado = "el numero es cero";
    }elseif ($numero < 0) {
        $resultado  ="es negativo"; 
        $resultado .=($numero %2 == 0) ? " el numero es par" : " el numero es impar";
    }elseif ($numero > 0) {
        $resultado ="es positivo";
        $resultado .=($numero %2 == 0) ? " el numero es par" : " el numero es impar";    
    }
    
    
}
?>
<div class="conainer">
        <p>Numero: <?php echo $resultado;?></p>
    </div>  

</body>
</html>
