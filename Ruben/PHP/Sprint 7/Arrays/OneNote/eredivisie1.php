<?php
$Teams = array(
    array("Positie"=>"1", "Club"=>"Ajax","Herkomst"=>"Amsterdam","Gespeeld"=>"25","Gewonnen"=>"18","Gelijk"=>"2","Verloren"=>"5"),
    array("Positie"=>"2", "Club"=>"AZ","Herkomst"=>"Alkmaar","Gespeeld"=>"25","Gewonnen"=>"18","Gelijk"=>"2","Verloren"=>"5"),
    array("Positie"=>"3", "Club"=>"Feyenoord","Herkomst"=>"Rotterdam","Gespeeld"=>"25","Gewonnen"=>"14","Gelijk"=>"8","Verloren"=>"3"),
    array("Positie"=>"4", "Club"=>"PSV","Herkomst"=>"Eindhoven","Gespeeld"=>"26","Gewonnen"=>"14","Gelijk"=>"7","Verloren"=>"5"),
    array("Positie"=>"5", "Club"=>"Willem II","Herkomst"=>"Tilburg","Gespeeld"=>"26","Gewonnen"=>"13","Gelijk"=>"5","Verloren"=>"8"),
    array("Positie"=>"6", "Club"=>"Utrecht","Herkomst"=>"Utrecht","Gespeeld"=>"25","Gewonnen"=>"12","Gelijk"=>"5","Verloren"=>"8"),
    array("Positie"=>"7", "Club"=>"Vitesse","Herkomst"=>"Arnhem","Gespeeld"=>"26","Gewonnen"=>"12","Gelijk"=>"5","Verloren"=>"9"),
    array("Positie"=>"8", "Club"=>"Heracles","Herkomst"=>"Almelo","Gespeeld"=>"26","Gewonnen"=>"10","Gelijk"=>"6","Verloren"=>"10"),
    array("Positie"=>"9", "Club"=>"Groningen","Herkomst"=>"Groningen","Gespeeld"=>"26","Gewonnen"=>"10","Gelijk"=>"5","Verloren"=>"11"),
    array("Positie"=>"10", "Club"=>"Heerenveen","Herkomst"=>"Heerenveen","Gespeeld"=>"26","Gewonnen"=>"8","Gelijk"=>"9","Verloren"=>"9"),
    array("Positie"=>"11", "Club"=>"Sparta","Herkomst"=>"Rotterdam","Gespeeld"=>"26","Gewonnen"=>"9","Gelijk"=>"6","Verloren"=>"11"),
    array("Positie"=>"12", "Club"=>"Emmen","Herkomst"=>"Emmen","Gespeeld"=>"26","Gewonnen"=>"9","Gelijk"=>"5","Verloren"=>"12"),
    array("Positie"=>"13", "Club"=>"VVV","Herkomst"=>"Venlo","Gespeeld"=>"26","Gewonnen"=>"8","Gelijk"=>"4","Verloren"=>"14"),
    array("Positie"=>"14", "Club"=>"Twente","Herkomst"=>"Enschede","Gespeeld"=>"26","Gewonnen"=>"7","Gelijk"=>"6","Verloren"=>"13"),
    array("Positie"=>"15", "Club"=>"PEC","Herkomst"=>"Zwolle","Gespeeld"=>"26","Gewonnen"=>"7","Gelijk"=>"5","Verloren"=>"14"),
    array("Positie"=>"16", "Club"=>"Fortuna","Herkomst"=>"Sittart","Gespeeld"=>"26","Gewonnen"=>"6","Gelijk"=>"8","Verloren"=>"12"),
    array("Positie"=>"17", "Club"=>"ADO","Herkomst"=>"Den Haag","Gespeeld"=>"26","Gewonnen"=>"4","Gelijk"=>"7","Verloren"=>"15"),
    array("Positie"=>"18", "Club"=>"RKC","Herkomst"=>"Waalwijk","Gespeeld"=>"26","Gewonnen"=>"4","Gelijk"=>"3","Verloren"=>"19")
);
function printArray($item, $key){
    echo "<br>$key" . " : " . "<i> $item </i>";   
}
array_walk_recursive($Teams[7],'printArray');
echo "<br>";
array_walk_recursive($Teams[13],'printArray');
?>