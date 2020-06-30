<!DOCTYPE html>
<html lang="nl">
<head>
    <title>foreach-lus</title>
</head>
<body>
<h3>Voorbeeld van de foreach-lus</h3>
<?php
//ik maak hier variabelen kleuren aan
$kleuren["oranje"] = "orange";
$kleuren["rood"] = "red";
$kleuren["paars"] = "purple";
$kleuren["groen"] = "green";
$kleuren["blauw"] = "blue";
$kleuren["geel"] = "yellow";
//in de opdracht moet ik als yellow wordt gewijzigd naar black, dan maakt hij gebruik van de foreach lus
//hij runt als het ware alles wat hij tegenkomt, dat doet een foreach-loop
foreach ($kleuren as $kleur ) {
    if ($kleur == "yellow") {
        $kleur = "black";
    }
    echo "<br><font color=$kleur>Deze tekst in $kleur";
}
?>
</body>
</html>
<?php
