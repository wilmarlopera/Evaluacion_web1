<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobon</title>
</head>
<body>
    <form action="sueldo.php" method="post">
        <label for="horas">Ingrese la cantidad de horas laboradas: </label>
        <input type="number" name="horas"><br><br>
        <input type="submit" value="Calcular" name="enviar">
    </form>
</body>
</html>

<?php

    $horas = $_POST['horas'];

    if(isset($_POST['enviar']))
    {
        if($horas <= 40)
        {
            $totalSueldo = 20000 * $horas;
            echo ('Sueldo total: '.$totalSueldo.' $');
        }
        else if($horas > 40)
            {
                $totalSueldo = 20000 * 40;
                $totalSueldo = $totalSueldo + (25000 * ($horas - 40));
                echo ('Sueldo total: '.$totalSueldo.' $');
            }
    }

?>