<?php


$Groepsleden = array(
     array("StudentNummer"=>"0312384", "Voornaam"=>"Ruben","Achternaam"=>"Heerink","Woonplaats"=>"Oldenzaal","Leeftijd"=>"18"),
     array("StudentNummer"=>"1234567", "Voornaam"=>"Justin","Achternaam"=>"Veldkamp","Woonplaats"=>"??","Leeftijd"=>"??"),
     array("StudentNummer"=>"1234567", "Voornaam"=>"Tristan","Achternaam"=>"Jurjens","Woonplaats"=>"??","Leeftijd"=>"??"), 
     array("StudentNummer"=>"1234567", "Voornaam"=>"Rabia","Achternaam"=>"Ekici","Woonplaats"=>"??","Leeftijd"=>"??"),
     array("StudentNummer"=>"1234567", "Voornaam"=>"Simon","Achternaam"=>"Ypkemeule","Woonplaats"=>"Enschede","Leeftijd"=>"20")
 );
 function printArray($item, $key){
    echo "<br>$key" . " : " . "<i> $item </i>";   
}
$random = array_rand($Groepsleden);
array_walk_recursive($Groepsleden[$random],'printArray');
 ?>