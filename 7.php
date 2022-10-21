<?php   
/*un hospital se ha hecho un estudio sobre los pacientes registrados durante los últimos 10 años, con el objeto de hacer una aproximación de los costos de internación por paciente. Se obtuvo un costo promedio diario según el tipo de enfermedad que aqueja al paciente. La siguiente tabla expresa los costos diarios, según el tipo de enfermedad. Construya un algoritmo que calcule e imprima el costo total que representa un paciente.
Tipo de Enfermedad-----Costo/Paciente/Día
1----------------------------125
2----------------------------116
3----------------------------120
4----------------------------132
5----------------------------138
*/

$resultado = "";

if ($_POST) {
    $enfermedad =$_POST["enfermedad"];
    $dia =$_POST["dias"];
    
    if ($enfermedad > 0 && $enfermedad < 6) {
        switch ($enfermedad) {
            case 1:
                if ($enfermedad = 1) {
                    $promedio = (125*$dia);
                }
            break;
            case 2 : 
                if ($enfermedad = 2) {
                    $promedio = (116*$dia);
                }
            break;
            case 3 : 
                if ($enfermedad = 3) {
                    $promedio = (120*$dia);
                }
            break;
            case 4 : 
                if ($enfermedad = 4) {
                    $promedio = (132*$dia);
                }
            break; 
            case 5 : 
                if ($enfermedad = 5) {
                    $promedio = (138*$dia);
                }
            break;                    
        }
        $resultado = $promedio;
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
        <p>Un hospital se ha hecho un estudio sobre los pacientes registrados durante los últimos 10 años, con el objeto de hacer una aproximación de los costos de internación por paciente. Se obtuvo un costo promedio diario según el tipo de enfermedad que aqueja al paciente. La siguiente tabla expresa los costos diarios, según el tipo de enfermedad. Construya un algoritmo que calcule e imprima el costo total que representa un paciente.</BR>
Tipo de Enfermedad-----Costo/Paciente/Día <BR></BR>
1----------------------------125</BR>
2----------------------------116</BR>
3----------------------------120</BR>
4----------------------------132</BR>
5----------------------------138</p>
        <form method="post">
                <label for="">Enfermedad</label>
                <!--<input type="text" name="enfermedad" value='<?php //echo ($_POST) ? $_POST['enfermedad'] : ""; ?>' id="">-->
                <select name="enfermedad" id="">
                    <option <?php echo (!$_POST) ? 'selected' : ""; ?>>-</option>    
                    <option value="1" <?php echo (@$_POST['enfermedad'] == 1) ? 'selected' : ""; ?>>1 enfermedad</option>
                    <option value="2" <?php echo (@$_POST['enfermedad'] == 2) ? 'selected' : ""; ?>>2</option>
                    <option value="3" <?php echo (@$_POST['enfermedad'] == 3) ? 'selected' : ""; ?>>3</option>
                    <option value="4" <?php echo (@$_POST['enfermedad'] == 4) ? 'selected' : ""; ?>>4</option>
                    <option value="5" <?php echo (@$_POST['enfermedad'] == 5) ? 'selected' : ""; ?>>5</option>
                </select>
                <label for="">dias</label>
                <input type="text" name="dias" value='<?php echo ($_POST) ? $_POST['dias'] : ""; ?>' id="">
                <input type="submit" value='Enviar'>
        </form>
    </div>
    <div class="conainer">
        <p>Promedio por paciente: <?php echo $resultado;?></p>
    </div>  
</body>
</html>