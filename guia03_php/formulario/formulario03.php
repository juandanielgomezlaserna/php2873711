<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario usuario</title>
    <link rel="stylesheet" href="css/formulario02.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar3.php" method="post">
            <h2>Crear Usuario</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="txtEmail">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="tel" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad">
                    <option value="Ciudad">Elija una ciudad</option>
                    <option value="Manizales">Manizales</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Chinchiná">Chinchiná</option>
                    <option value="Medellín">Medellín</option>
                    <option value="Obando">Obando</option>
                    <option value="Palestina">Palestina</option>
                    <option value="Belén de Umbría">Belén de Umbría</option>
                    <option value="Neira">Neira</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Cartagena">Cartagena</option>
                </select>
            </div>
            <div class="form-group">
                <label for="txtDate">Edad</label>
                <input type="date" name="txtDate" id="txtDate">
            </div>
            <div class="form-group">
                <button type="submit">Crear</button>
            </div>
        </form>
    </div>
</body>
</html>