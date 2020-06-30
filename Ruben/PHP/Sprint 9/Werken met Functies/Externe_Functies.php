<?php
function korting(){
    $korting = 0;
    if (isset($_POST['student'])) $korting = $korting + 15;
    if (isset($_POST['klant'])) $korting = $korting + 10;
    return($korting);
}

function Servicekosten($betalingswijze){
    $Servicekosten = 0;
    switch($betalingswijze)
        {
            case "visa" : 
                echo "<br>Betalingswijze: Visa";
                $Servicekosten = 2;
                return $Servicekosten;
            break;
            case "mc" : 
                echo "<br>Betalingswijze: MasterCard";
                $Servicekosten = 2.5;
                return $Servicekosten;
            break;
            case "paypal" : 
                echo "<br>Betalingswijze: PayPal";
                $Servicekosten = 1.5;
                return $Servicekosten;
            break;
            case "ideal" : 
                echo "<br>Betalingswijze: Ideal";
                $Servicekosten = 1;
                return $Servicekosten;
            break;
            default:
                echo "<br>U heeft geen Betalingswijze gekozen!";

        }
}

function Facturing(){
    for($x=0; $x <sizeof($_POST["albumcode"]); $x++){
        
    }
}








?>