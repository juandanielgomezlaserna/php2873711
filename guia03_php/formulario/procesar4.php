<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/formulario02.css">
</head>
<body>
    <div class="info-container">
        <?php
            $number1 = $_POST["txtNumero1"] ?? null;
            $number2 = $_POST["txtNumero2"] ?? null;
            $operacion = $_POST["operacion"] ?? null;
            $resultado = null;
            if ($operacion == "sumar" && $number1 != null && $number2 != null) {
                $resultado = $number1 + $number2;
                echo "<span>El resultado de $operacion: $number1 y $number2 es: <h2>$resultado</h2></span>";
            }elseif($operacion == "restar" && $number1 != null && $number2 != null){
                $resultado = $number1 - $number2;
                echo "<span>El resultado de $operacion: $number1 y $number2 es: <h2>$resultado</h2></span>";
            }else{
                echo "<span>No hay operación</span>";
            }
        ?>
    </div>
</body>
</html>