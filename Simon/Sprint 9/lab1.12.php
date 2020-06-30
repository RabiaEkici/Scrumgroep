<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.12</title>
</head>
<body>
<div style = "position:left;">
             <h1> <b>reiskosten </b> </h1>
      </div>

<form name="order"
action= ""
method="post">

<select name="Rijzen" value="true">
<option value=" "></option>
<option value="am">Amsterdam</option>
<option value="ut">Utrecht</option>
<option value="dh">Denhaag</option>
<option value="rt">Rotterdam</option>
</select>
<select name="Rijzen" value="true">
<option value=" "></option>
<option value="am">Amsterdam</option>
<option value="ut">Utrecht</option>
<option value="dh">Denhaag</option>
<option value="rt">Rotterdam</option>

<input type="submit" name="submit"
value="Berekenen">
</form>


<?php
function reiskosten($vertrek, $bestemming){
    $reiskoten = array();
    $reiskoten[1] = array();
    $reiskoten[2] = array();
    $reiskoten[3] = array();
    $reiskoten[4] = array();
    $reiskoten[1][1] = 0;
    $reiskoten[1][2] = 30;
    $reiskoten[1][3] = 60;
    $reiskoten[1][4] = 90;
    return($reiskoten[$vertrek][$bestemming]);
}
?>
</body>
</html>

