<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 5</title>
    <link rel="stylesheet" href="css/formulario02.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="form-container w-auto h-auto">
        <form action="procesar5.php" method="post">
            <h2 class="text-[25px] font-bold">Datos personales</h2>
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="form-group">
                <label for="txtCedula">Cédula</label>
                <input type="number" name="txtCedula" id="txtCedula">
            </div>
            <div class="form-group">
                <label for="txtTelefono">Teléfono</label>
                <input type="number" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="form-group">
                <label for="txtCorreo">Correo electrónico</label>
                <input type="email" name="txtCorreo" id="txtCorreo">
            </div>
            <div class="form-group flex flex-col">
                <h3 class="font-bold flex flex-col self-center my-[10px]">Estudios</h3>
                <div class="flex h-[30px] w-[100%] items-center justify-center">
                    <input class="w-[13px] h-[13px] radio" type="radio" name="estudio" id="estudio1" value="estudio1">
                    <label class="text-[15px] w-[100%]" for="">No tiene estudio</label>
                </div>
                <div class="flex h-[30px] w-[100%] items-center justify-center">
                    <input class="w-[13px] h-[13px] radio" type="radio" name="estudio" id="estudio2" value="estudio2">
                    <label class="text-[15px] w-[100%]" for="">Estudios primarios</label>
                </div>
                <div class="flex h-[30px] w-[100%] items-center justify-center">
                    <input class="w-[13px] h-[13px] radio" type="radio" name="estudio" id="estudio3" value="estudio3">
                    <label class="text-[15px] w-[100%]" for="">Estudios secundarios</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>