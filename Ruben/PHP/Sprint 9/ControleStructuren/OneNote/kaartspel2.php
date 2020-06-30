<?php
$kleuren = array("ruiten","harten","klaveren","schoppen");
$waardes = array("Aas","boer","vrouw","koning","2","3","4","5","6","7","8","9","10");
$AantalKaarten = 0;
for($AantalKaarten = 0; $AantalKaarten < 5; $AantalKaarten++){
    echo "<br>".$kleuren[array_rand($kleuren, 1)];
    echo " ".$waardes[array_rand($waardes, 1)];
}
?>