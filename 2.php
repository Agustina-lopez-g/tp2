<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5, rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a 3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente.
    </p>
    <form method="post">
        <label for="">Carrera</label> 
        <select name="carrera" id="carrera">
            <option <?php echo (!$_POST) ? 'selected' : ""; ?>>-</option>    
            <option  <?php echo (@$_POST['carrera'] == "vespertina") ? 'selected' : ""; ?>>Vespertina </option>
            <option  <?php echo (@$_POST['carrera'] == "diurna") ? 'selected' : ""; ?>>Diurna</option>
        </select>
        <label for="">Nota</label>
        <input type="number" name="nota" value='<?php echo ($_POST) ? $_POST['nota'] : ""; ?>'> 
        <input type="submit" name="submit">
    </form>
    
    <?php 
    /*  Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5, rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a 3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente.
    */
    /* vespertina
    >=6 exime
    >=3.5 rinde examen
    < 3.5 reprueba
    diurna
    <=3.5 rinde examen
    > 3.5 reprueba
    */
    $carrera = "";
    $nota = "";
    $resultado = "";
    if ($_POST){
        $carrera = $_POST['carrera'];
        $nota = $_POST['nota']; 
        if ($carrera == "vespertina") {
            if ($nota>=6) {
                $resultado .= "exime ";
            }elseif ($nota>= 3.5) {
                $resultado .= "rinde examen "; 
            }else {
                $resultado .= "reprueba ";
            }
        }
        elseif ($carrera == "diurna") {
            if ($nota>=3.5) {
                $resultado .= "rinde examen ";
            }else {
                $resultado .= "reprueba ";
            }
        }
    }
    
?>

<p>Resultado</p>
<p>Carrera: <?php echo $carrera;?></p>
<p>Nota: <?php echo $nota;?></p>
<p><?php echo $resultado;?></p>
</body>
</html>