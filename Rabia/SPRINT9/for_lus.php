<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>for-lus</title>
</head>
<body>
<h3>Voorbeeld van de for-lus</h3>
<?php
//met echo printen we de teksten uit
echo "We willen de for-lus 8 rondjes laten lopen<br />";
echo "Klaar voor de START...<br />";
//ik maak hier een voor loop aan met variabele teller die 5 is. de variabel is kleinter dan 13. met ++ telt hij steeds verder
for ($teller = 5; $teller < 13; $teller++) {
    echo "Dit is rondje $teller <br>";
}
echo "FINISH..."
?>
</body>
</html>