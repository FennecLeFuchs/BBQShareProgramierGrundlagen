<!DOCTYPE html>
<html>
<body>

<h1>Übung vergleichsoperatoren</h1>

<?php

$number = 333;
$floatnumber = 50.2;
$word = "Hallo";
$bulleontrue = true;

if ($number == $floatnumber){
    echo "<br><br>The number is equal to the floatnumber";
}
else {
    echo "<br><br>The number is not equal to the floatnumber";
}
if ($number === $word){
    echo "<br><br>The number is identical to the floatnumber";
}
else {
    echo "<br><br>The number is not identical to the floatnumber";
}
if ($number > 10 or $floatnumber > 10){
    if ($number > 10 and $floatnumber > 10){
        echo "<br>Both number and floatnumber are above than 10";
    }
    else {
        if ($number > 10){
            echo "<br>Number is above than 10";
        }
        else {
            echo "<br>Floatnumber is above than 10";
        }
    }
}
else {
    echo "<br><br>Neither number or floatnumber are not above than 10";
}
if (gettype($bulleontrue) == gettype($number) or gettype($bulleontrue) == gettype($floatnumber)){
    if (gettype($bulleontrue) == gettype($number) and gettype($bulleontrue) == gettype($floatnumber)){
        echo "<br>Both number and floatnumber are bulleons";
    }
    else {
        if (gettype($bulleontrue) == gettype($number)){
            echo "<br>Number is bulleon";
        }
        else {
            echo "<br>Floatnumber is bulleon";
        }
    }
}
else {
    echo "<br><br>Neitehr are bulleons";
}
if ($word == "Hallo World"){
    echo $word;
}
else {
    $word = "Hallo World";
    echo "<br><br>$word";
}

?> 

</body>
</html>