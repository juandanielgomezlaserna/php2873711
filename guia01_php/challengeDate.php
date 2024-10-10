<?php
    date_default_timezone_set("America/Bogota");
    $year = date("Y");
    setlocale(LC_TIME, 'Spanish_Spain.1252');
    $day = strftime("%A");
    $dayNumber = date("d");
    $month = strftime("%B");
    $year = date("Y");
    $meridiano = date("a");
    $time = date("h:i");
    echo <<<EOT
    Hola, hoy es $day $dayNumber de $month de <br>
    $year y son las $time $meridiano
    EOT;
?>