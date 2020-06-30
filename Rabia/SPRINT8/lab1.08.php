<!DOCTYPE PUBLIC html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
/*
form aanmaken
alle benodigdheden
*/
<form name = "form" action="lab08verwerken.php" method="post">
    <input required type="text" name="voornaam" placeholder="Voornaam" /><br>
    <input required type="text" name="achternaam" placeholder="Achternaam" /><br>
    <input required type="text" name="postcode" placeholder="Postcode" /><br>
    <input required type="text" name="straat" placeholder="Straat" /><br>
    <input required type="text" name="plaats" placeholder="Plaats" /><br>
    <input required type="email" name="e-mail" placeholder="E-mailadres" /><br><br>
    <br>Kies een opleiding:
    <input type="radio" name="opleiding" value="ICT">ICT
    <input type="radio" name="opleiding" value="Engels">Engels
    <input type="radio" name="opleiding" value="Techniek">Techniek
    <input type="radio" name="opleiding" value="Nederlands">Nederlands
    <input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
