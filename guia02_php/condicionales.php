<?php
$aleatorio = rand(1, 999);
echo "Número elegido: $aleatorio<br>";
if($aleatorio >= 50){
    echo "El número es mayor a 50";
}else{
    echo "El número es menor a 50";
}
/*Generar un valor aleatorio entre 1 y 100.
Luego mostrar. Si tiene 1,2 o 3 dígitos*/
echo "<br>";
if($aleatorio < 10){
    echo "El número tiene 1 dígito";
}elseif($aleatorio < 100){
    echo "El número tiene 2 dígitos";
}else{
    echo "El número tiene 3 dígitos";
}