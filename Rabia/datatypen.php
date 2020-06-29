<?php
$naam = "Carl";
$straat = "Kruislaan 111";
$woonplaats = "Utrecht";

$nav = $naam . " " . $straat . " " . $woonplaats;
echo "Gegevens: $nav";

echo <<<TEKST
<br>Salarisspecificatie van $naam: 2000 euro
<br>Maand: November
<br>Jaar: 2020
TEKST;


$dollars = 999.99;
$koers = 1.2;
$euros = round( $dollars * $koers, 2);
echo "<br>$euros";
?>