<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eredivisie1.php</title>
</head>
<body>
<?php
/*
arrays aanmaken,
gegevens
uitprinten*/
$teamHeracles = array
(
    array("Huidige positie",8),
    array("Naam club", 'Heracles'),
    array("Stad waar de club vandaan komt",'Almelo'),
    array("Aantal gespeelde wedstijden", 26),
    array("Aantal gespeelde gewonnnen", 3),
    array("Aantal gelijke spelen", 0),
    array("Aantal verloren wedstrijden", 2),
);

echo $teamHeracles[0][0] . ": " . $teamHeracles[0][1];
echo "<br>" . $teamHeracles[1][0] . ": " . $teamHeracles[1][1];
echo "<br>" . $teamHeracles[2][0] . ": " . $teamHeracles[2][1];
echo "<br>" . $teamHeracles[3][0] . ": " . $teamHeracles[3][1];
echo "<br>" . $teamHeracles[4][0] . ": " . $teamHeracles[4][1];
echo "<br>" . $teamHeracles[5][0] . ": " . $teamHeracles[5][1];
echo "<br>" . $teamHeracles[6][0] . ": " . $teamHeracles[6][1];
echo '<br> <img src="download.jfif" /> ';
?>
</body>
</html>