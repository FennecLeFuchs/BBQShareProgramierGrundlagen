<!DOCTYPE html>
<html>
<body>

<h1>Willkommen bei der Ermittlung Ihrer Kapitalertragsteuer!</h1>

<?php 
$Kapital=(float)"1000000";
$Zinsatz=(float)"10";
$Kirche="y";
$Single="y";

$Zinsen=$Kapital*$Zinsatz/100;
if ($Zinsen<=1000 or ($Single!="y" and $Zinsen<=2000)) {
    $Kapitalertragsteuer=0;
    $Kirchensteuer=0;
    $Gesamtsteuer=0;
    $Ertrag=$Zinsen;
}
elseif ($Single=="y") {
    if ($Kirche=="y") {
        $Kapitalertragsteuer=($Zinsen-1000)*0.2445;
        $Kirchensteuer=$Kapitalertragsteuer*0.09;
        $Gesamtsteuer=$Kapitalertragsteuer+$Kirchensteuer;
    }
    else {
        $Kapitalertragsteuer=($Zinsen-1000)*0.25;
        $Kirchensteuer=0;
        $Gesamtsteuer=$Kapitalertragsteuer;
    }
    $Ertrag=$Zinsen-$Gesamtsteuer;
}
else {
    if ($Kirche=="y") {
        $Kapitalertragsteuer=($Zinsen-2000)*0.2445;
        $Kirchensteuer=$Kapitalertragsteuer*0.09;
        $Gesamtsteuer=$Kapitalertragsteuer+$Kirchensteuer;
    }
    else {
        $Kapitalertragsteuer=($Zinsen-2000)*0.25;
        $Kirchensteuer=0;
        $Gesamtsteuer=$Kapitalertragsteuer;
    }
    $Ertrag=$Zinsen-$Gesamtsteuer;
}

echo "<br><br>Ihre Zinsen betragen: $Zinsen Euro";
echo "<br>Ihre Gesamtsteuer beträgt: $Gesamtsteuer Euro";
echo "<br>Ihre Kapitalertragsteuer beträgt: $Kapitalertragsteuer Euro";
echo "<br>Ihre Kirchensteuer beträgt: $Kirchensteuer Euro";
echo "<br><br>Ihr Ertrag nach Steuern beträgt: $Ertrag Euro";
echo "<br><br>Vielen Dank für die Nutzung dieses Programms!";
?> 

</body>
</html>