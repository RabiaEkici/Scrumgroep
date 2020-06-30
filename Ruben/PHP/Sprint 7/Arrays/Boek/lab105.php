<?php
$array = [];
$array[0] = "een";
$array[1] = "twee";
$array[2] = "3";
$array[3] = "vier";
array_push($array,5);
echo "stap 3: ".$array[0].",".$array[1].",".$array[2].",".$array[3].",".$array[4];
echo "<br>Stap 4: Datatype is: ".gettype($array[4]);
$laatsteElement = array_pop($array);
echo "<br>Stap5: ".$laatsteElement . " is verwijderd: ";
echo "<br>stap 6: ".$array[0].",".$array[1].",".$array[2].",".$array[3];
array_unshift($array,"nul");
echo "<br>stap 8: ".$array[0].",".$array[1].",".$array[2].",".$array[3].",".$array[4];
echo "<br>Stap 10: Datatype[0] is: ".gettype($array[0]);
unset($array[0]);
echo "<br>stap 12: ".$array[1].",".$array[2].",".$array[3].",".$array[4];
unset($array[2]);
echo "<br>stap 14: ".$array[1].",".$array[3].",".$array[4];
unset($array[4]);
echo "<br>stap 16: ".$array[1].",".$array[3];
?>