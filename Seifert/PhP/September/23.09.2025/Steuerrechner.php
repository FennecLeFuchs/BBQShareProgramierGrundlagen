<!DOCTYPE html>
<html>
<body>

<h1>Willkomen zum Steuerrechner.</h1>

<?php
$brutto = (float)"100";
$krankenverischerung = (float)"10";
$zusatzbeitrag = (float)"10";
$pflegeversicherung = (float)"10";
$arbeitslosenversicherung = (float)"10";
$rentenversicherung = (float)"10";
$lohnsteuer = (float)"10";
$kirche = (string)"ja";

if ($kirche == "ja") { $kirchensteuer = (float)"9";} 
else {$kirchensteuer = (float)"0";}

$krankenversicherung= ($krankenverischerung /2 + $zusatzbeitrag) * $brutto /100;
$pflegeversicherung = $pflegeversicherung /2 * $brutto /100;
$arbeitslosenversicherung = $arbeitslosenversicherung /2 * $brutto /100;
$rentenversicherung = $rentenversicherung /2 * $brutto /100;
$lohnsteuer = $lohnsteuer * $brutto /100;
$kirchensteuer = $kirchensteuer * $lohnsteuer /100;
$netto = $brutto - ($krankenversicherung + $pflegeversicherung + $arbeitslosenversicherung + $rentenversicherung + $lohnsteuer + $kirchensteuer);

echo "Ihr Netto gehalt beträgt: $netto Euro<br>";
echo "Davon gehen ab:<br>";
echo "Krankenversicherung: $krankenversicherung Euro<br>";
echo "Pflegeversicherung: $pflegeversicherung Euro<br>";
echo "Arbeitslosenversicherung: $arbeitslosenversicherung Euro<br>";
echo "Rentenversicherung: $rentenversicherung Euro<br>";
echo "Lohnsteuer:  $lohnsteuer  Euro<br>";
echo "Kirchensteuer: $kirchensteuer Euro<br>";
echo "Vielen Dank das sie unseren Steuerrechner benutzt haben.";
?> 

</body>
</html>
