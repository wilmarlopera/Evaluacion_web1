<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Punto</title>
</head>
<body>
    <form action="calculadora.php" method="POST">
        <label for="num1">Número uno: </label>
        <input type="text" name="num1">
        <label for="num2">Número dos: </label>
        <input type="text" name="num2">
        <br><br>
        <select name="opt">
            <option value="0">Seleccionar</option>
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular" name="enviar">
    </form>
</body>
</html>

<?php

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $opcion = $_POST['opt'];

    if(isset($_POST["enviar"]))
    {
        if($opcion == 0)
        {
            echo ('La opción indicada no es valida.');
        }
        else if($opcion == 1)
            {
                $total = $numero1 + $numero2;
                echo ('El resultado de la suma es: '.$total);
            }
            else if($opcion == 2)
                {
                    $total = $numero1 - $numero2;
                    echo ('El resultado de la resta es: '.$total);
                }
                else if($opcion == 3)
                    {
                        $total = $numero1 * $numero2;
                        echo ('El resultado de la multiplicación es: '.$total);
                    }
    }
?>