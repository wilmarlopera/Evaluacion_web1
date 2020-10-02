<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Step</title>
</head>
<body>
    <form action="zapateria.php" method="post">
        <h3>Bienvenido a Spring Step, recuerde que el costo de cada par de zapatos es de 80.000$</h3>
        <label for="cantZap">Ingrese la cantidad total de zapatos: </label>
        <input type="number" name="cantZap">
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php
    $cantidadZapatos = $_POST['cantZap'];
    $valorZapatos = 80000;

    if(isset($_POST['enviar']))
    {
        if($cantidadZapatos == 3)
        {
            $totalCompra = $valorZapatos * $cantidadZapatos;
            $totalCompra = $totalCompra - ($totalCompra * 0.10);
            echo ('El valor de tu compra es: '.$totalCompra);
        }
        else if($cantidadZapatos > 3 && $cantidadZapatos <= 8)
            {
                $totalCompra = $valorZapatos * $cantidadZapatos;
                $totalCompra = $totalCompra - ($totalCompra * 0.20);
                echo ('El valor de tu compra es: '.$totalCompra);
            }
            else if($cantidadZapatos > 8)
                {
                    $totalCompra = $valorZapatos * $cantidadZapatos;
                    $totalCompra = $totalCompra - ($totalCompra * 0.50);
                    echo ('El valor de tu compra es: '.$totalCompra);
                }
    }
    
?>