<?php

$gewerkteuren = 45;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;
$belasting = 0.40*$bruto;
$netto = $bruto-$belasting;

if($gewerkteuren <= 40){
    echo "Uw basissalaris is: € ".$bruto;
    echo "<br>Uw balasting is: € ".$belasting;
    echo "<br>Uw nettobedrag is: € ".$netto;
    echo $BelastingsTest = ($gewerkteuren <= 40 ? "<br>Belasting is 40%" : "<br>Belasting is 45%");
}
elseif($gewerkteuren > 40){
    echo "Uw basissalaris is: € ".$bruto;
    $bruto = $bruto + $bonus;
    $belasting = 0.45*$bruto;
    $netto = $bruto-$belasting;
    echo "<br>Uw basissalaris met bonus  is: € ".$bruto;
    echo "<br>Uw balasting is: € ".$belasting;
    echo "<br>Uw nettobedrag is: € ".$netto;
    echo $BelastingsTest = ($gewerkteuren <= 40 ? "<br>Belasting is 40%" : "<br>Belasting is 45%");
}

?>