<!DOCTYPE html>
<html>
<body>

<h1>ArraArra(y) stellen cutten/löschen</h1>

<?php

function arraycut($array, $indexes) {
    foreach ($indexes as $key) {
    unset($array[$key-1]);
    }
    $array = array_values($array);
    return $array;
}

function specificoutput($array, $indexes) {
    foreach ($indexes as $key) {
        echo "<br>".(string)$key ." : ".$array[$key-1];
    }
}

$long = 20;
$testarray = [];
for ($continue=0; $continue <= $long-1; $continue++) { 
    array_push($testarray, "Name ".(string)($continue+1));
}

echo implode(" - ",$testarray);
echo "<br><br>";

echo "simulierte eingabe Lösche den 12. und 13. Seperate (oder jede andere nummer) <br><br>";
$siminputs = [12 , 13, 5 , 7];
echo implode(" - ",arraycut($testarray, $siminputs));

echo "<br><br> simulierte eingabe ausgabe 12 und 13 via loop (oder jede andere nummer) <br>";
$siminputs = [12 , 15 , 19 , 7];
specificoutput($testarray, $siminputs);

?> 

</body>
</html>