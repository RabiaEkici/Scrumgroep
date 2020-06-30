<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.07.php</title>
</head>
<body>
<?php
/*arrays aanmaken van titel auteur en genre en prijs*/
$boeken = array(
    array("titel"=>"Stoner","auteur"=>"John Williams","genre"=>"Fictie","Prijs"=> 19.99),
    array("titel"=>"De Cirkel","auteur"=>"Dave Eggers","genre"=>"Fictie","Prijs"=> 22.50),
    array("titel"=>"Rayuela","auteur"=>"Cortazar","genre"=>"Fictie","Prijs"=> 25.50)
);
/*een if-statement gebruiken*/
function prijsLijst($item,$key){
    if($key == "Prijs"){
        echo"<br>$key" . ": " . "<i> $item </i>";
    }
}
array_walk_recursive($boeken, 'prijsLijst');
?>
</body>
</html>
