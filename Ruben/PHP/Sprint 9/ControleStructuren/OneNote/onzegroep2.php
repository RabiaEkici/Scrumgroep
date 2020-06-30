<?php
$Groepsleden = array(
    array("StudentNummer"=>"0312384", "Voornaam"=>"Ruben Heerink","Woonplaats"=>"Oldenzaal","Leeftijd"=>"18"),
    array("StudentNummer"=>"??", "Voornaam"=>"Justin Veldkamp","Woonplaats"=>"??","Leeftijd"=>"??"),
    array("StudentNummer"=>"??", "Voornaam"=>"Tristan Jurjens","Woonplaats"=>"??","Leeftijd"=>"??"), 
    array("StudentNummer"=>"??", "Voornaam"=>"Rabia Ekici","Woonplaats"=>"??","Leeftijd"=>"??"),
    array("StudentNummer"=>"??", "Voornaam"=>"Simon Ypkemeule","Woonplaats"=>"??","Leeftijd"=>"??")
);
function printArray($item, $key){
    echo "<br>$key" . " : " . "<i> $item </i>";   
}
$i = array_rand($Groepsleden);
foreach ($Groepsleden[$i] as $key => $value){
    if ($key == "StudentNummer"){
        echo "<table><h4>StudentNummer is: $value</h4></table>";
    }
    if ($key == "Voornaam"){
       echo "<table><h2>Naam is: $value</h2></table>";
    }
    if ($key == "Woonplaats"){
        echo "<table><i>Woonplaats is: $value</i></table>";
    }
    if ($key == "Leeftijd"){
        echo "<table><i>Leeftijd is: $value</i></table>";
    }
}
?>