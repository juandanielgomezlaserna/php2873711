<?php
    $fechaActual = date("d-m-Y");
    echo "Fecha Actual> $fechaActual";
    echo "<br>";
    echo 'Fecha Actual> $fechaActual';
    echo "<br>";
    echo 'Fecha Actual> $fechaActual>'.$fechaActual;
    $dia = date("d");
    $mes = date("m");
    $year = date("Y");
    print("<br>Fecha: $dia");
    print("<br>Mes: $mes");
    print("<br>Año: $year<br>");

    $diaCant = date("z");
    print("<br>Cantidad de días que llevamos en el año: $diaCant");
    $mesStr = date("F");
    print("<br>Mes en el que estamos: $mesStr");

    if ($dia <= 10) {
        echo "<br>El sitio está disponible";
    }else{
        echo "<br>El sitio está fuera de servicio";
    }
?>