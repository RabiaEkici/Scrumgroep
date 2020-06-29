<?php
$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
$test = $bruto - 240;
$extra = $bruto + $bonus;
$belasting = $extra * 0.45;
$netto = $extra * 0.55;

if($gewerkteuren <= 40){
    echo "Uw basissalaris is: € ".$bruto;
    echo "<br>Uw belasting is: € ". 0.40*$bruto;
    echo "<br>Uw nettobedrag is: € ".$test;
}

if($gewerkteuren > 40){
    echo "Uw basissalaris is: €". $bruto;
    echo "<br>Uw basissalaris plus bonus is: €". $extra;
    echo "<br>Uw belasting is: €". $belasting;
    echo "<br>Uw nettobedrag is: €". $netto;
}

print $voorwaarde = ($gewerkteuren < 40 ? "<br>Belasting is 40%!" : "<br>Belasting is 45%!");
?>