<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/checkBox1.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar2.php" method="post">
            <h2>Deportes que practica</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <fieldset>
                    <legend>Seleccione los deportes</legend>
                    <label><input type="checkbox" name="deportes[]" value="futbol">Futbol</label>
                    <label><input type="checkbox" name="deportes[]" value="baloncesto">Baloncesto</label>
                    <label><input type="checkbox" name="deportes[]" value="voleibol">Voleibol</label>
                    <label><input type="checkbox" name="deportes[]" value="natacion">Natacion</label>
                    <label><input type="checkbox" name="deportes[]" value="ajedrez">Ajedréz</label>
                    <label><input type="checkbox" name="deportes[]" value="tenis de mesa">Tenis de mesa</label>
                    <label><input type="checkbox" name="deportes[]" value="tenis">Tenis</label>
                    <label><input type="checkbox" name="deportes[]" value="baseball">Baseball</label>
                </fieldset>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>