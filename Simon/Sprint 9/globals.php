<?php
$GLOBALS['url'] ="www.mijndomeinnaam.nl";
global $email;
$email = "webmaster@mijndomeinnaam.nl";
define("BIJDRAGE",0.10);
function doneren($bedrag)
{
$melding = "GIRO 555";
echo "<br>" . $melding;
echo "<br>URL: " . $GLOBALS['url'];
echo "<br>Bedrag: " . $bedrag;
global $email;
echo "<br>E-mail:" . $email;
$bijdrage = $bedrag * BIJDRAGE;
$donatie = $bedrag + $bijdrage;
echo "<br>Inclusief bijdrage: $donatie";
static $pot;
$pot = $pot + $donatie;
echo"<br><span style='background-color: yellow'> Totaal bedrag in pot $pot</span><br>";
}
doneren(100);
doneren(1000);
doneren(33333);

?>