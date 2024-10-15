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
            $nombre = $_POST["txtNombre"] ?? null;
            $cedula = $_POST["txtCedula"] ?? null;
            $telefono = $_POST["txtTelefono"] ?? null;
            $correo = $_POST["txtCorreo"] ?? null;
            $option = $_POST["estudio"] ?? null;
            
            echo "<span> Nombre: <h2>$nombre</h2></span>";
            echo "<span> Cédula: <h2>$cedula</h2></span>";
            echo "<span> Telefono: <h2>$telefono</h2></span>";
            echo "<span> correo: <h2>$correo</h2></span>";
            if ($option == "estudio1") {
                echo "<span>No tiene estudios</span>";
            }elseif($option == "estudio2"){;
                echo "<span>Tiene estudios primarios</span>";
            }elseif($option == "estudio3"){;
                echo "<span>Tiene estudios secundarios</span>";
            }else{
                echo "<span>No se sabe cuales son sus estudios</span>";
            }
        ?>
    </div>
</body>
</html>