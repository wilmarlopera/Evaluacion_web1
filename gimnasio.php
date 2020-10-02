<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio Bodytech</title>
</head>
<body>
    <form action="gimnasio.php" method="POST">
        <label for="peso">Ingrese su peso: </label>
        <input type="text" name="peso"><br><br>
        <label for="altura">Ingrese su altura: </label>
        <input type="text" name="altura"><br><br>
        <input type="submit" value="Calular" name="enviar">
    </form>
</body>
</html>

<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

if(isset($_POST['enviar']))
{
    $IMC = $peso / $altura * $altura;
    echo('Tienes un indice de masa corporal de: '.$IMC);
    echo('<br>');
    if($IMC < 18.5)
    {
        echo ('Peso insuficiente.');
    }
    else if($IMC >= 18.5 && $IMC <= 24.9)
        {
            echo ('Normopeso. ');
        }
        else if($IMC >= 25 && $IMC <= 26.9)
            {
                echo ('Sobrepeso grado I. ');
            }
            else if($IMC >= 27 && $IMC <= 29.9)
                {
                    echo ('Sobrepeso grado II (preobesidad). ');
                }
                else if($IMC >= 30 && $IMC <= 34.9)
                    {
                        echo('Obesidad de tipo I. ');
                    }
                    else if($IMC >= 35 && $IMC <= 39.9)
                        {
                            echo('Obesidad de tipo II. ');
                        }
                        else if($IMC >= 40 && $IMC <= 49.9)
                            {
                                echo('Obesidad de tipo III (mórbida). ');
                            }
                            else if($IMC > 50)
                                {
                                    echo('Obesidad de tipo IV (extrema) ');
                                }
}
else
{
    echo('Los datos ingresados no son validos.');
}



?>