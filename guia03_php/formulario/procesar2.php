<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar 2</title>
    <link rel="stylesheet" href="css/formulario02.css">
</head>
<body>
    <div class="info-container">
        <?php
            //Validación con operador ternario
            $nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"]:null;
            $email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"]:null;
            //Validación de NULO seguro
            $telefono = $_POST["txtTelefono"] ?? null;
            $password = $_POST["txtPassword"] ?? null;
            echo "<span> Nombre: <h2>$nombre</h2></span>";
            echo "<span> Email: <h2>$email</h2></span>";
            echo "<span> Telefono: <h2>$telefono</h2></span>";
            echo "<span> Contraseña: <h2>$password</h2></span>";
        ?>
    </div>
</body>
</html>