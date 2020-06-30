<?php
$teller = 0;
$getal1 = 0;
$getal2 = 1;
$getal3 = 0;
do{
    $teller++;
    echo $getal1.";";
    $getal3 = $getal1 + $getal2;
    $getal1 = $getal2;
    $getal2 = $getal3;
}   
while($teller < 20)
?>