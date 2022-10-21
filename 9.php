<?php

/* Ingresar el nombre del estudiante y la nota del examen final (Nota de tipo entero). Asignar la
calificación de acuerdo a las notas de la tabla, hacer el algoritmo y ejecutar las pruebas como se nota
en la figura:

sobresaliente = 10
distinguido = 8 - 9
bueno = 6-7
suficiente = 4-5
insufieciente = 1 - 2 - 3
reprobado = 0
*/
$resultado = "";

if ($_POST) {
    $nombre =$_POST["nombre"];
    $nota =$_POST["nota"];
    
    switch ($nota) {
        case 0:
            $resultado = "Reprobado";
            break;
        case 1:
        case 2:
        case 3:
            $resultado = "Insuficiente";
            break;
        case 4:
        case 5:
            $resultado = "Suficiente";
            break;
        case 6:
        case 7:
            $resultado = "Bueno";
            break;
        case 8:
        case 9:
            $resultado = "Distinguido";
            break;
        case 10:
            $resultado = "Sobresaliente";
            break;
        default:
            $resultado = "Ud no se presento";
            break;
    }
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
        <p>Ingresar el nombre del estudiante y la nota del examen final (Nota de tipo entero). Asignar la
        calificación de acuerdo a las notas de la tabla, hacer el algoritmo y ejecutar las pruebas como se nota
        en la figura: <br><br>

            Sobresaliente = 10 <br>
            Distinguido = 8 - 9 <br>
            Bueno = 6-7 <br>
            Suficiente = 4-5 <br>
            Insufieciente = 1 - 2 - 3 <br>   
            Reprobado = 0
        </p>
        <form method="post">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value='<?php echo ($_POST) ? $_POST['nombre'] : ""; ?>' id="">
            <label for="">Nota</label>
            <input type="text" name="nota" value='<?php echo ($_POST) ? $_POST['nota'] : ""; ?>' id="">
            <input type="submit" value='Enviar'>
        </form>
    </div>
    <div class="conainer">
        <p>Calificacion: <?php echo $resultado;?></p>
    </div>  
</body>
</html>