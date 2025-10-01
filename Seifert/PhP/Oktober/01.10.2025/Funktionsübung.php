<!DOCTYPE html>
<html>
<body>

<h1>Funktionen</h1>

<?php

function printrepeat(){
    $phrase = "Hello World!";
    return $phrase;
}
echo printrepeat()."<br>";
echo printrepeat()."My name is Sam.<br>";
echo printrepeat()."I like Programming.<br>";
echo printrepeat()."This BBQ-School is awesome.<br>";
echo printrepeat()."<br>". printrepeat() ."<br>". printrepeat() ."<br>". printrepeat() ."<br>". printrepeat();
echo "<br><br>";

$vornamen = "Max";
$nachnamen = "Mustermann";

function greatingconcatination($text1, $text2){
    return "Hallo". $text1 . " " . $text2 ."!"; 
}
echo greatingconcatination($vornamen, $nachnamen);

?> 

</body>
</html>