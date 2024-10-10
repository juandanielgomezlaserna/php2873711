<?php
$nombre = "Juan"; //String
$edad = 25; //int
$estado = true; //bool
$peso = 65.5; //double

// Operador ternario
$estadoTxt = $estado ? "Activo":"Inactivo";

$optput = <<<OUT
    Nombre: $nombre.<br>
    Edad: $edad.<br>
    Estado: $estadoTxt.<br>
    Peso: $peso.
OUT;

echo $optput;

$estaLloviendo = true;
$clima = ($estaLloviendo)?"Está lloviendo":"Hace sol";
//$clima = (!$estaLloviendo)?"Hace sol":"Está lloviendo";

echo "<br><br>Clima: $clima";

//Arrays (listas)
echo "<br><hr>";
//Array escalar (indices numéricos desde cero)
$arrayFrutas = ["Mango", "Pera", "Piña", "Kiwi"];
echo $arrayFrutas[0];

//Array asociativo (índices con cadenas)
$arrayUsuario =
["nombre" => "Juan", "email"=> "j@gmail.com","edad"=>20,"estado"=>true];
echo "<br>Edad > ".$arrayUsuario["edad"];

$arrayMultiple =
["nombre" => "Ana", "email"=> "j@gmail.com","edad"=>20,"estado"=>true, 365, "SENA", $arrayUsuario, "frutas"=>$arrayFrutas, 9];

echo "<br><hr>";

echo "<br>Nombre de array Usuario> ".$arrayMultiple[2]["nombre"];
echo "<br>Nombre> ".$arrayMultiple["nombre"];
echo "<br>edad> ".$arrayMultiple["edad"];
echo "<br>estado> ".$arrayMultiple["estado"];
echo "<br>Días del año> ".$arrayMultiple[0];
echo "<br>Mejor institución Colombiana: ".$arrayMultiple[1];
echo "<br>Fruta> ".$arrayMultiple["frutas"][1];
echo "<br>Hoy es> ".$arrayMultiple[3];