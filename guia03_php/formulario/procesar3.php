<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar 3</title>
    <link rel="stylesheet" href="css/formulario02.css">
</head>
<body>
    <div class="info-container">
        <?php
            $nombre = ($_POST["txtNombre"]) ?? null;
            $email = ($_POST["txtEmail"]) ?? null;
            $telefono = $_POST["txtTelefono"] ?? null;
            $ciudad = $_POST["txtCiudad"] ?? null;
            $ciudad = $ciudad == "Ciudad" ? "":$ciudad;
            $fecha = $_POST["txtDate"] ?? null;
            
            // Calcular edad
            if ($fecha != null) {
                $fechaNacimiento = new DateTime($fecha);
                $hoy = new DateTime();
                $edad = $hoy->diff($fechaNacimiento)->y;
            } else {
                $edad = "";
            }
            
            echo "<span> Nombre: <h2>$nombre</h2></span>";
            echo "<span> Email: <h2>$email</h2></span>";
            echo "<span> Telefono: <h2>$telefono</h2></span>";
            echo "<span> Ciudad: <h2>$ciudad</h2></span>";
            echo "<span> Fecha de nacimiento: <h2>$fecha</h2></span>";
            echo "<span> Edad: <h2>$edad</h2></span>";
            if ($edad >= 18) {
                echo "<span>Es <h2>mayor</h2> de edad</span>";
            }elseif($edad < 18 && $edad != null){
                echo "<span>No es <h2>mayor</h2> de edad</span>";
            }
        ?>
    </div>
</body>
</html>