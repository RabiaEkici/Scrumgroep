<html lang="en">
<head>
  <meta charset="utf-8">

</head>
<body>
<form action="Verwerken.php" method="post">
    Uw naam : 
    <input type="text" name="naam">
    <input type="hidden" name="taal" value="false">
    <br>Kies een taal:
    <input type="radio" name="taal" value="N"> Nederlands
    <input type="radio" name="taal" value="E"> Engels
    <input type="radio" name="taal" value="S"> Spaans
    <br>
    <input type="submit" name="submit" value="Versturen">
</body>
</html>