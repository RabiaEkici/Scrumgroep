<?php
    $naam = 'Carl';
    $straat = 'Kruislaan 111';
    $woonplaats = 'Utrecht';

    $naw = $naam . " " . $straat . " " . $woonplaats;
    echo "Gegevens: $naw";
    echo <<<TEKST
    <br>SalarisSpecificatie van $naam: 2000 Euro
    <br>Maand: November
    <br>Jaar: 2020
    TEKST;

    $dollar = 999.99;
    $koers = 1.2;
    $euros =round($dollar * $koers,2);
    echo "<BR>Bedrag in Euro's is: $euros"
?>