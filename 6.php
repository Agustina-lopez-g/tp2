<?php
/*Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo
zodiacal.*/
$resultado = "";

if ($_POST) {
    $dia =$_POST["dia"];
    $mes =$_POST["mes"];
        
    if ($dia >= 1 && $dia <= 31) {
        switch ($mes) {
            case 1: 
                if ($dia <= 20) {
                    $signo = "Capricornio";
                } else {
                    $signo = "Acuario";
                }
            break;
            case 2:
                if ($dia <= 18) {
                    $signo = "Acuario";
                } else {
                    $signo = "Piscis";
                }
            break;
            case 3: 
                if ($dia <= 20) {
                    $signo = "Piscis";
                } else {
                    $signo = "Aries";
                }
            break;
            case 4:
                if ($dia <= 20) {
                    $signo = "Aries";
                } else {
                    $signo = "Tauro";
                }
            break;
            case 5: 
                if ($dia <= 21) {
                    $signo = "Tauro";
                } else {
                    $signo = "Geminis";
                }
            break;
            case 6:
                if ($dia <= 22) {
                    $signo = "Geminis";
                } else {
                    $signo = "Cancer";
                }
            break;
            case 7: 
                if ($dia <= 23) {
                    $signo = "Cancer";
                } else {
                    $signo = "Leo";
                }
            break;
            case 8:
                if ($dia <= 24) {
                    $signo = "Leo";
                } else {
                    $signo = "Virgo";
                }
            break;
            case 9: 
                if ($dia <= 24) {
                    $signo = "Virgo";
                } else {
                    $signo = "Libra";
                }
            break;
            case 10:
                if ($dia <= 24) {
                    $signo = "Libra";
                } else {
                    $signo = "Escorpio";
                }
            break;
            case 11: 
                if ($dia <= 23) {
                    $signo = "Escorpio";
                } else {
                    $signo = "Sagitario";
                }
            break;
            case 12:
                if ($dia <= 22) {
                    $signo = "Sagitario";
                } else {
                    $signo = "Capricornio";
                }
            break;
        }
    }
    $resultado = $signo;
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
        <p>Escribir un algoritmo que permita dada la fecha de nacimiento de una persona saber cuál es su signo zodiacal.</p>
        <form method="post">
                <label for="">Dia</label>
                <input type="text" name="dia" value='<?php echo ($_POST) ? $_POST['dia'] : ""; ?>' id="">
                <label for="">Mes</label>
                <input type="text" name="mes" value='<?php echo ($_POST) ? $_POST['mes'] : ""; ?>' id="">
                <input type="submit" value='Enviar'>
        </form>
    </div>
    <div class="conainer">
        <p>Signo: <?php echo $resultado;?></p>
    </div>  
</body>
</html>