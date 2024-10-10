<?php
$numMax = 10;
$numMult = 2;
$num = 1;

for ($i=0; $i < $numMax; $i++) { 
    echo "<br>".($i+1)." X ".$numMult." = ".(($i + 1)*$numMult);
}

echo "<hr>";
while ($num <= $numMax) {
    echo "<br>".($num)." X ".$numMult." = ".(($num)*$numMult);
    $num++;
}
$num = 1;

echo "<hr>";
do{
    echo "<br>".($num)." X ".$numMult." = ".(($num)*$numMult);
    $num++;
}while($num <= $numMax);