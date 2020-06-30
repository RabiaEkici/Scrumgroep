<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwerken.php</title>
</head>
<body>
<form name = "form" action="" method="post">
    <input required type="text" name="naam" placeholder="Naam" /><br>
    <input required type="text" name="postcode" placeholder="Postcode" /><br>
    <input required type="text" name="straat" placeholder="Straat" /><br>
    <input required type="text" name="plaats" placeholder="Plaats" /><br>
    <input required type="email" name="e-mail" placeholder="E-mailadres" /><br><br>
    <textarea name="commentaar" placeholder="Typ je commentaar in ..." rows=4></textarea><br>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST["submit"]) ){
    if(empty($_POST["naam"]) ){
        echo "Naam is niet ingevuld";
    }
    else{
        $naam = $_POST["naam"];
        $taal = $_POST["taal"];
        if($taal == "N") {
            echo "Goedendag " . $naam;
        }
        if($taal == "E") {
            echo "Good morning " . $naam;
        }
        if($taal == "S") {
            echo "Buenos dias " . $naam;
        }
        else {
            echo "Taal niet ingevuld";
        }
    }
}

?>
</body>
</html>