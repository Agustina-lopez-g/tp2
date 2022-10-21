<?php

/*Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo
nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000.*/


$resultado = "";

if ($_POST) {
    $dia =$_POST["dia"];
    $mes =$_POST["mes"];
    $anio =$_POST["anio"];
    if($dia <= 0 || $dia > 31){
        $resultado .= " Dia invalido, ingresar un numero entre 1 y 31 <br>"; 
    }
    if ($mes <=0 || $mes > 12){
        $resultado .= " Mes invalido, ingresar un numero entre 1 y 12 <br>";
    }
    if ($anio <=2000){
        $resultado .= " El a&ntildeo debe ser mayor a 2000";    
    }

    switch ($mes) {
        case 1: 
            $mesNombre = "Enero";
        break;
        case 2:
            $mesNombre = "Febrero";
        break;
        case 3: 
            $mesNombre = "Marzo";
        break;
        case 4:
            $mesNombre = "Abril";
        break;
        case 5: 
            $mesNombre = "Mayo";
        break;
        case 6:
            $mesNombre = "Junio";
        break;
        case 7: 
            $mesNombre = "Julio";
        break;
        case 8:
            $mesNombre = "Agosto";
        break;
        case 9: 
            $mesNombre = "Septiembre";
        break;
        case 10:
            $mesNombre = "Octubre";
        break;
        case 11: 
            $mesNombre = "Noviembre";
        break;
        case 12:
            $mesNombre = "Diciembre";
        break;
        }
    $resultado = $dia ."-".$mesNombre."-".$anio;
 
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
    <div class="container">
        <p>
        Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo
        nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un
        mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000.
        </p>
        <form method="post">
            <label for="">Dia</label>
            <input type="text" name="dia" value='<?php echo ($_POST) ? $_POST['dia'] : ""; ?>' id="">
            <label for="">Mes</label>
            <input type="text" name="mes" value='<?php echo ($_POST) ? $_POST['mes'] : ""; ?>' id="">
            <label for="">A&ntildeo</label>
            <input type="text" name="anio" value='<?php echo ($_POST) ? $_POST['anio'] : ""; ?>' id="">
            <input type="submit" value='Enviar'>
        </form>
    </div>  
    <div class="conainer">
        <p>Fecha: <?php echo $resultado;?></p>
    </div>  
    
    
</body>
</html>