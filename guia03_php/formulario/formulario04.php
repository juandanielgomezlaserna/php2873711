<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 4</title>
    <link rel="stylesheet" href="css/formulario02.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar4.php" method="post">
            <h2>Control Radio</h2>
            <div class="form-group">
                <label for="txtNumero1">Número 1</label>
                <input type="number" name="txtNumero1" id="txtNumero1">
            </div>
            <div class="form-group">
                <label for="txtNumero2">Número 2</label>
                <input type="number" name="txtNumero2" id="txtNumero2">
            </div>
            <div class="form-group">
                <label for="">Sumar</label>
                <input type="radio" name="operacion" id="txtSumar" value="sumar">
                <label for="">Restar</label>
                <input type="radio" name="operacion" id="txtRestar" value="restar">
            </div>
            <div class="form-group">
                <button type="submit">Operar</button>
            </div>
        </form>
    </div>
</body>
</html>