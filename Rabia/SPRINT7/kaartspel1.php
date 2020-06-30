<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kaartspel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
/*//arrays aanmaken
//kaarten laten zien
//wat voor soort kaarten het zijn
//een source voor kaarten plaatsen met img*/
$a = rand(0 ,3);
$suits = array('ruiten', 'harten', 'klaveren', 'schoppen');
$suit = $suits[$a];
$b = rand(0 ,12);
$v = array('1', '2', '3', '4', '5', '6', '7', '8', '9','10','boer', 'vrouw', 'heer');
$value = $v[$b];
$file_path = "kaarten" . "\\" . $suit . "_" . $value . ".svg";
?>
<img src="<?php echo $file_path; ?>" alt="">
</body>
</html>