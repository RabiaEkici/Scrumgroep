<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3>Voorbeeld van de foreach-lus</h3>
   <?php
   $kleuren["oranje"] = "orange";
   $kleuren["rood"]  =  "red";
   $kleuren["paars"] =  "violet";
   $kleuren["groen"] =  "green";
   $kleuren["blauw"] =  "blue";
   $kleuren1["geel"]  =  "yellow";
   foreach($kleuren as $kleur ){
       echo "<br><font color=$kleur>Deze tekst in $kleur";
   } foreach($kleuren1 as $kleur1 ){
    $kleur1 = "black";
    echo "<br><font color=$kleur1>Deze tekst in $kleur1";
}

   ?>
</body>
</html>