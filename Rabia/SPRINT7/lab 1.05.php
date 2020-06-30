<?php
/*1. codeer array een twee drie vier
voeg vijfde element met de waarde 5 eraan toe
toon de array
    toon het datatype van het vijfde element
verwijder het vijfde element
toon de array
    voeg aan het begin een element in met de waarde nul
toon de array
    delete index[0]
toon het  datatype van index[0]
verwijder het eerste element
toon de array
    verwijder het tweede element
toon de array
    als index[2] bestaat: verwijder deze
toon de array
*/

$getallen = array("een", "twee", 3, "vier");
array_push($getallen, 5);

//----Stap 3
//toon array
echo 'Stap 3. ';
for ($i = 0; $i < count($getallen); $i++){
    echo $getallen[$i].  ", ";
}
echo "<br>";

//----Stap 4
echo "Stap 4. Datatype is: ".gettype($getallen[4]);
echo "<br>";

//----Stap 5
unset($getallen[4]);

//toon array
for ($i = 0; $i < count($getallen); $i++){
    echo $getallen[$i].  ", ";
}

echo "<br>";
array_unshift($getallen, "nul");

//toon array

for ($i = 0; $i < count($getallen); $i++){
    echo $getallen[$i].  ", ";
}

echo "<br>";
$eersteGetal = array_shift($getallen);
var_dump($eersteGetal);
echo "<br>";

//ik denk dat ik hier de element hetzelfde is als index (dus verwijderen)
unset($getallen[0]);
$i0 = array_search(0, $getallen);
echo gettype($i0);
echo "<br>";

unset($getallen[1]);

//toon array
print_r($getallen);

echo "<br>";
if (array_key_exists(2, $getallen)) {
    unset($getallen[2]);
}
print_r($getallen);
