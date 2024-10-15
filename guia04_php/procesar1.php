<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/checkBox1.css">
</head>
<body>
    <div class="info-container">
        <?php
        $numero1 = $_POST["txtNumero1"] ?? null;
        $numero2 = isset($_POST["txtNumero2"]) ? $_POST['txtNumero2'] : null;

        $numero1 = $numero1 == null ? 0:$numero1;
        $numero2 = $numero2 == null ? 0:$numero2;

        print("<h5>Número 1: $numero1</h5>");
        print("<h5>Número 2: $numero2</h5>");

        if(isset($_POST['operacion1']) && $_POST['operacion1'] == "sumar" && ($_POST['operacion1'] != null)){
            $suma = $numero1 + $numero2;
            print("<label> La suma es: $suma</label>");
        }
        if(isset($_POST['operacion2']) && $_POST['operacion2'] == "restar" && ($_POST['operacion2'] != null)){
            $resta = $numero1 - $numero2;
            print("<label> La resta es: $resta</label>");
        }
        if(isset($_POST['operacion3']) && $_POST['operacion3'] == "multiplicar" && ($_POST['operacion3'] != null)){
            $multiplicar = $numero1 * $numero2;
            print("<label> La multiplicación es: $multiplicar</label>");
        }
        if(isset($_POST['operacion4']) && $_POST['operacion4'] == "dividir" && ($_POST['operacion4'] != null)){
            if ($numero2 != 0) {
                $division = $numero1 / $numero2;
            }else{
                $division = "nula";
            }
            print("<label> La division es: $division</label>");
        }

        ?>
    </div>
</body>
</html>