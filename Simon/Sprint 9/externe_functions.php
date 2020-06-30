<?php
function korting(){
    $korting = 0;
    if( isset($_POST['student'])) $korting = $korting + 15;
    if( isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}
function serviceKosten($betalingswijze) {
    switch ($_POST['betaling'])
    {
        case "v" :
            $servicekosten = 2;
            break;
        case "m" :
            $servicekosten = 2.5;
            break;
        case "p" :
            $servicekosten = 1.5;
            break;
        case "i" :
            $servicekosten = 1;
            break;
        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    }
    return $servicekosten;
}
function facturering(){
    for($x=0; $x < sizeof($_POST["albumcode"]); $x++){
        echo " <br> Facatuur" .$x;
     }
    
}
function premium(){
        foreach($_POST['aantal'] as $aantal){
    
        }if($aantal > 5){
            echo"<br>Word lid van onze premium club";
        }
        
    }



?>


