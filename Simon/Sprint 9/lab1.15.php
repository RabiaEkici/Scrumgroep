
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
        .album {clear: left; width: 100%;}
        .omslag {float: left;}
        .gegevens {float: left; padding-left: 20px;}
        .korting {clear: left;}
        .aantal {background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="font-family: Verdana; font-size: 9px">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
        <img src="img/cesaria.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora " Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]" value="001">
            <input type="hidden" name="artiest[0]" value="Cesaria Evora">
            <input type="hidden" name="album[0]" value="Em Um Concerto">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br />Aantal:
            <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">

        </div>
        <br>
<div class="album">
<div class="omslag">
<img src="img/manuchao.jpg" width="55px" alt="X"/>
</div>

<div class ="gegevens">
<br>
Manu Chao "Clandestino"  Prijs: $5

<input type="hidden" name="albumcode[1]" value="002">
<input type="hidden" name="artiest[1]" value="Manu Chao">
<input type="hidden" name="album[1]" value="Clandestino">
<input type="hidden" name="prijs[1]" value="5">
<input type="hidden" name="genre[1]" value="World">

<br   />Aantal:
<input type="text" size=2 maxlength=3 class="aantal" name="aantal[1]" value="0">
<br>
</div>

<div class="album">
<div class="omslag">
<img src="img/muslum.jpg" width="55px" alt="X"/>
</div>

<div class ="gegevens">
<br>
MÜSLÜM BABA "MUTLU OL YETER"  Prijs: $15

<input type="hidden" name="albumcode[2]" value="003">
<input type="hidden" name="artiest[2]" value="Muslum Gurses">
<input type="hidden" name="album[2]" value="MUTLU OL YETER">
<input type="hidden" name="prijs[2]" value="15">
<input type="hidden" name="genre[2]" value="World">

<br   />Aantal:
<input type="text" size=2 maxlength=3 class="aantal" name="aantal[2]" value="0">
<br>
</div>
    </div>
    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="korting[]" value="15" />Student: 15%<br />
        <input type="checkbox" name="korting[]" value="10" />Klant: 10%<br />
        <p>Selecteer een betalingswijze:</p>
        <select name="betaling" value="true">
            <option value=" "></option>
            <option value="v">Visa</option>
            <option value="m">MasterCard</option>
            <option value="p">PayPal</option>
            <option value="i">Ideal</option>
        </select>
        <input type="submit" width="300px" name="verzenden" value=" Bestellen " />
    </div>
</form>
</body>
</html>
<?php
if(isset($_POST["aantal"][0]) && isset($_POST["korting"]) ) {
    if(empty($_POST["aantal"]) ){
        echo "aantal niet ingevuld";
    } else {
        foreach($_POST['aantal'] as $key => $value) {
            echo "<br>Besteld albums: $value<br>";
        }
        
        }
        foreach($_POST['korting'] as $selected) {
            echo "Korting is: $selected%<br>";
        }
    }

if (isset($_POST["verzenden"]))
{
    switch ($_POST['betaling'])
    {
        case "v" :
            echo "<p>betalingswijze: Visa</p>";
            break;
        case "m" :
            echo "<p>betalingswijze: MasterCard</p>";
            break;
        case "p" :
            echo "<p>betalingswijze: PayPal</p>";
            break;
        case "i" :
            echo "<p>betalingswijze: Ideal</p>";
            break;
        default:
            echo "<p>U heeft geen betalingswijze gekozen</p>";
    }
    include_once("externe_functions.php");
    $betalingswijze = $_POST['betaling'];
    $serviceKosten = serviceKosten($betalingswijze);
    echo "Servicekosten zijn: " . $serviceKosten;
}
facturering();

?>