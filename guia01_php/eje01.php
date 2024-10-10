<html>
    <head>
        <title>Ejemplo usando PHP</title>
        <style type="text/css">
            p {color:white;}
            #contenedor{background-color: green; width: 300px; text-align: center;margin: auto;padding: 15px;}
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <?php
            echo "<div id='contenedor'>";
            echo "<p>INFORMACIÓN</p>";
            echo "</div>";
        ?>
        <div  style="align-items: center; justify-content: center; display: flex; flex-direction: column">
            <p style="color: black; font-size: 40px">Alerta, esto es una línea</p>
            <div style="background-color:black; height: 2px; width: 200px;"></div>
            <p style="color: black; font-size: 40px">Esfera</p>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/012/658/418/small_2x/blue-metal-sphere-png.png" alt="">
        </div>
        <div style="display: flex; align-items: center; justify-content: center">
            <?php
                echo "<h2 class='text-[25px] font-bold'> Nos fusionamos </h2>"
            ?>
        </div>
        <div class="w-[500px] h-[500px] bg-[#333] mx-auto flex flex-col items-center p-5 my-5 gap-5">
            <h2 class="text-white text-[25px] font-bold border-b-[2px] border-white">Heredoc</h2>
            <?php
                echo <<<EOT
                <p style="font-size: 20px"> Hola, yo soy Juan Daniel. Tengo 18 años
                y esto es un ejemplo de cómo hacer un heredoc.
                Esto debería mostrar una 'A' mayúscula: \x41</p>
                <h2 style="color: white; font-size: 25px"> Imagen </h2>
                <img src="https://codersfree.nyc3.cdn.digitaloceanspaces.com/posts/que-es-php-en-programacion-descubre-5-ventajas-de-usarlo.jpg" alt="">
                EOT;
            ?>
        </div>
        
    </body>
</html>