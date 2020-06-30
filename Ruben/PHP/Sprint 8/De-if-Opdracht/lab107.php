<?php
$boeken = array(
     array("titel"=>"Stoner", "auteur"=>"John Williams","genre"=>"Fictie","prijs" => 19.99),
     array("titel"=>"De cirkel", "auteur"=>"Dave Eggers","genre"=>"Fictie","prijs" => 22.50),
     array("titel"=>"Rayuela", "auteur"=>"Julio Cortazar","genre"=>"Fictie","prijs" => 22.50)
 );
function prijslijst($item,$key){
    if ($key == "prijs"){
        print_r("Prijs: " .$key["prijs"]);

    }
}
array_walk($boeken,"prijslijst");
?>