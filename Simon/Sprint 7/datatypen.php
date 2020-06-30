<?php
$naam = "Carl";
$straat = "Kruislaan 111";
$woonplaats = "Utrecht";

$naw = $naam . " " . $straat . " " . $woonplaats;
echo "Gegevens: $naw";

echo <<<TEKST
    <br>Salarisspecificatie van $naam: 2000 Euro
    <br>Maand: November
    <br>Jaar: 2020
    TEKST;

$dollars = 999.99;
$koers = 1.2;
$euros = $dollars * $koers;
$eind = round($euros, 2);

echo "<br>Bedrag in euro's is: $eind"
?>
