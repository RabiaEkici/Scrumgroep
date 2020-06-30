<?php

/*
 groepsleden arrays maken
 arrays uitprinten
*/
$Groepsleden = array(
     array("StudentNummer"=>"?", "Voornaam"=>"Ruben","Achternaam"=>"Heerink","Woonplaats"=>"?","Leeftijd"=>"?"),
     array("StudentNummer"=>"?", "Voornaam"=>"Justin","Achternaam"=>"Veldkamp","Woonplaats"=>"?","Leeftijd"=>"?"),
     array("StudentNummer"=>"?", "Voornaam"=>"Tristan","Achternaam"=>"Jurjens","Woonplaats"=>"?","Leeftijd"=>"?"),
     array("StudentNummer"=>"0314032", "Voornaam"=>"Rabia","Achternaam"=>"Ekici","Woonplaats"=>"Enschede","Leeftijd"=>"24"),
     array("StudentNummer"=>"?", "Voornaam"=>"Simon","Achternaam"=>"Ypkemeule","Woonplaats"=>"?","Leeftijd"=>"?")
 );
 function printArray($item, $key){
    echo "<br>$key" . " : " . "<i> $item </i>";   
}
$random = array_rand($Groepsleden);
array_walk_recursive($Groepsleden[$random],'printArray');
 ?>