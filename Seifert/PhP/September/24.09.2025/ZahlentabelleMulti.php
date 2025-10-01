<!DOCTYPE html>
<html>
<body>

<h1>Willkomen zur Zahlentabelle Kleines 1x1 bis 10.</h1>

<?php

$ymax=15;
$xmax=10;

for ($line=$ymax*-1; $line<0; $line++) {
    for ($collum=1; $collum<=$xmax; $collum++) {
        echo $collum*$line*-1 . " ";
    }
    echo "<br>";
}

?> 

</body>
</html>