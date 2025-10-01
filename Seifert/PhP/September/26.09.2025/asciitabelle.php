<!DOCTYPE html>
<html>
<body>

<h1>willkommen zu meiner ASCII-Tabelle</h1>

<?php

function dezimaltobinary($number){
    if ($number == 0){
        return "0";
    }
    $binary = "";
    while ($number > 0){
        $binary = (string)($number%2) . $binary;
        $number = (int)($number / 2);
    }
    return $binary;
}
function dezimaltohex($number){
    $hexchars = "0123456789ABCDEF";
    if ($number == 0){
        return "0";
    }
    $hex = "";
    while ($number > 0){
        $hex = $hexchars[$number % 16] . $hex;
        $number = (int)($number / 16);
    }
    return $hex;
}
function tabconstructor($position, $count){
    echo $position, " - ", dezimaltobinary($position), " - ", dezimaltohex($position), " - ", chr($position), " | ";
    $count += 1;
    if ($count % 4 == 0){
        echo"<br>";
    }
    return $count;
}

echo "Nur Ascii mit defenierten in python angezeigt<br>";
echo "Dezimal = Binär = Hexadezimal = Zeichen<br>";
$count=0; 
for ($position = 33; $position<127; $position++){
    $count=tabconstructor($position, $count);
}
for ($position=161; $position<173; $position++){
    $count=tabconstructor($position, $count);
}
for ($position=174; $position<256; $position++){
    $count=tabconstructor($position, $count);
}
?> 

</body>
</html>