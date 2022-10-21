<?php
/*En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor
de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de
color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es
amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el
cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados.
*/

// bolita blanca = 0%
// bolita verde = 10%
// bolita amarilla = 25%
// bolita azul = 50%
// bolita anaranjada = 100%

$resultado = "";

if ($_POST) {
    $bolita =$_POST["bolita"];
    $importe =$_POST["importe"];
    switch ($bolita) {
        case 0:
            $resultado = $importe;
        break;
        case 10:
            $resultado = $importe*(100-$bolita)/100;
            break;
        case 25:
            $resultado = $importe*(100-$bolita)/100;
        break;
        case 50:
            $resultado = $importe*(100-$bolita)/100;
        break;
        case 100:
            $resultado = 0;
        break;           
    }
    //$resultado = $importe * (100-$bolita)/100 . ' el desento es '.$bolita.'%';

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
</div class = "container">
        <p>En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor
de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de
color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es
amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el
cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados.</p>
        <form method="post">
                <label for="bolita">Bolitas</label>
                <!--<input type="text" name="enfermedad" value='<?php //echo ($_POST) ? $_POST['enfermedad'] : ""; ?>' id="">-->
                <select name="bolita" id="bolita">
                    <option <?php echo (!$_POST) ? 'selected' : ""; ?>>-</option>    
                    <option value="0" <?php echo (@$_POST['bolita'] == 0) ? 'selected' : ""; ?>>blanca </option>
                    <option value="10" <?php echo (@$_POST['bolita'] == 10) ? 'selected' : ""; ?>>verde</option>
                    <option value="25" <?php echo (@$_POST['bolita'] == 25) ? 'selected' : ""; ?>>amarilla</option>
                    <option value="50" <?php echo (@$_POST['bolita'] == 50) ? 'selected' : ""; ?>>azul</option>
                    <option value="100" <?php echo (@$_POST['bolita'] == 100) ? 'selected' : ""; ?>>anaranjada</option>
                </select>
                <label for="">Importe</label>
                <input type="text" name="importe" value='<?php echo ($_POST) ? $_POST['importe'] : ""; ?>' id="">
                <input type="submit" value='Enviar'>
        </form>
    </div>
    <div class="conainer">
        <p>Importe final: <?php echo $resultado;?></p>
    </div>  
</body>
</html>