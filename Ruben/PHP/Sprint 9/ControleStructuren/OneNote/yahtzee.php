<?php
$Gooi = 0 ;
$TotaleWaarde = 0;
$Gemiddeld = 0;
do{
    $Getallen[1] = rand(1,6);
    $Getallen[2] = rand(1,6); 
    $Getallen[3] = rand(1,6); 
    $Getallen[4] = rand(1,6);
    $Getallen[5] = rand(1,6);
    $Gooi++;


    $WaardeWorp = $Getallen[1] + $Getallen[2] + $Getallen[3] + $Getallen[4] + $Getallen[5];
    $TotaleWaarde = $TotaleWaarde + $WaardeWorp;
    if ($Getallen[1]==$Getallen[2] && $Getallen[1]==$Getallen[3] && $Getallen[1]==$Getallen[4] && $Getallen[1]==$Getallen[5]){
        echo "<br>Aantal worpen: ".$Gooi;
        $Gemiddeld = $TotaleWaarde/$Gooi;
        echo "<br>Het Gemiddelde per worp: ".$Gemiddeld;
        echo "<br>Deze Yahtzee is gegooid: ".$Getallen[1].$Getallen[2].$Getallen[3].$Getallen[4].$Getallen[5];
        break;
    }
}
while ($Getallen != 0);
?>