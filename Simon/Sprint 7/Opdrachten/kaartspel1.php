<?php
//Maak een PHP script (kaartspel1.php) waarmee een speelkaart op een webpagina getoond kan worden. 
//Gebruik daarbij een tweetal arrays:  
//Eén array voor de kleuren (ruiten, harten, klaveren, schoppen)  
//Eén array voor de waarden (Boer, Vrouw, Koning, 2, 3, 4 … 10)  
//De speelkaart moet als afbeelding getoond worden.

$aantal = 1;
$kleuren = array("ruiten","harten","klaveren","schoppen");
$waardes = array("boer","vrouw","koning","2","3","4","5","6","7","8","9","10");
$kleur = array_rand($kleuren, 1);
$waarde = array_rand($waardes, 1);
echo $kleur." ".$waarde;

switch ($kleur) {
    case 0:
        $kleurResultaat = "ruiten";
        break;
    case 1:
        $kleurResultaat = "harten";
        break;
    case 2:
        $kleurResultaat = "klaveren";
        break;
    case 3:
        $kleurResultaat = "schoppen";
        break;    
}
switch ($waarde) {
    case 0:
        $waardeResultaat = "boer";
        break;
    case 1:
        $waardeResultaat = "vrouw";
        break;
    case 2:
        $waardeResultaat = "koning";
        break;
    case 3:
        $waardeResultaat = "1";
        break;  
    case 4:
        $waardeResultaat = "2";
        break; 
    case 5:
        $waardeResultaat = "3";
        break;   
    case 6:
        $waardeResultaat = "4";
        break;  
    case 7:
        $waardeResultaat = "5";
        break;  
    case 8:
        $waardeResultaat = "6";
        break; 
    case 9:
        $waardeResultaat = "7";
        break; 
    case 10:
        $waardeResultaat = "8";
        break; 
    case 11:
        $waardeResultaat = "9";
        break; 
    case 12:
        $waardeResultaat = "10";
        break;     
}
echo "<br>";
$resultaat = $kleurResultaat."_".$waardeResultaat.".svg";
echo $resultaat;
$zip = "kaarten.zip";

//echo '<img src="xampp/htdocs/PHP/Arrays/OneNote/kaarten/'.$resultaat.'.svg">'; 


//$im_string = $zip->getFromName ($resultaat,$length = 0,$flags);
//    $im = imagecreatefromstring($im_string);
//    imagepng($im, 'b.png');

?>
<html>
<img src="C:\xampp\htdocs\PHP\Arrays\OneNote\kaarten\<?php echo $resultaat; ?>">
</html>