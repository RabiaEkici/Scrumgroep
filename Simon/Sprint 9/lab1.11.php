<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
.album{clear: left; width: 100%}
.omslag{float: left;}
.gegevens{float: left; padding-left: 20px;}
.korting{clear: left;}
.aantal{background-color: #f8ce6c;}
</style>
<title>Mijn winkelmandje </title>
</head>
<body style="font-family: Verdana; font-size: 9px;">
<h3>Mijn winkelmandje</h3>
<form name = "albums" action="" method="post">
<div class="album">
<div class="omslag">
<img src="img/cesaria.jpg" width="50px" alt="X"/>
</div>
<div class ="gegevens">
Cesaria Evora "Em Um Concerto" Prijs: $9

<input type="hidden" name="albumcode[0]" value="001">
<input type="hidden" name="artiest[0]" value="Cesaria Evora">
<input type="hidden" name="album[0]" value="Em Um Concerto">
<input type="hidden" name="prijs[0]" value="9">
<input type="hidden" name="genre[0]" value="World">

<br   />Aantal:
<input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">
 </div>
 </div>


 <div class="korting">
 <br><hr size="10">Korting:<br  />
 <input type="checkbox" name="korting[]" value="15" />Student: 15%<br />
    <input type="checkbox" name="korting[]" value="10" />Student: 10%<br />
 

 </div>
 <form name="order"
action= ""
method="post">
<p>Selecteer een betalingswijze:</p>
<select name="Betaling" value="true">
<option value=" "></option>
<option value="vi">Visa</option>
<option value="md">Mastercard</option>
<option value="pp">Paypal</option>
<option value="id">Ideal</option>
</select>
<input type="submit" name="submit"
value="Bestellen">
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
        foreach($_POST['korting'] as $selected) {
            echo "Korting is: $selected%<br>";
        }
        }
    }

    if(isset($_POST["submit"]))
{
    switch($_POST['Betaling'])
{

case "vi" :
    echo "<p>Betalingswijze:Visa</p";
break;
case "md" :
    echo "<p>Betalingswijze:MasterCard</p";
break;
case "pp" :
    echo "<p>Betalingswijze:payPal</p";
break;
case "id" :
    echo "Betalingswijze:Ideal</p";
break;
default:
echo "<p>U heeft geen betalingwijze gekozen</p>";
}
}

?>