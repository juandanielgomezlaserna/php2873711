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
        $nombre = $_POST["txtNombre"] ?? "";
        $deportes = $_POST["deportes"] ?? null;
        $cantidadDeportes = count($deportes);
        $htmlDeportes = "";
        foreach($deportes as $item){
            $htmlDeportes .= "<label>$item</label>";
            //echo "<label> $item </label>";
        }
        $output = <<<OUT
            <label>Nombre: $nombre</label>
            <label>cantidad Deportes: $cantidadDeportes</label>
            <label>Deportes seleccionados: </label>
            $htmlDeportes
        OUT;
        echo $output;
        ?>
    </div>
</body>
</html>