<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="Content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
</head>
<body>
    <form action="verwerken.php" method="post">
    Uw naam:
    <input type="text" name="naam">
    <input type="hidden" name="taal" value="false">
    <br>Kies een taal:
    <input type="radio" name="taal" value="N">Nederland
    <input type="radio" name="taal" value="E">Engels
    <input type="radio" name="taal" value="S">Spaans
    <br>
    <input type="submit" name="submit" value="Versturen">
    </form>
</body>
</html>