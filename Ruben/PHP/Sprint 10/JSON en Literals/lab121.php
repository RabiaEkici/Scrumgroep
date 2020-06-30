<html>
<head>
    <meta charset="UTF-8">
    <title>lab1.21</title>
</head>
<body>
    <form id="input" method="POST">
        <input type="text" id="Voornaam" name="voornaam" placeholder="voornaam" ><br>
        <input type="text" id="Naam" name="naam" placeholder="naam"><br>
        <input type="text" id="Geboortedatum" name="geboortedatum" placeholder="geboortedatum"><br>
        <input type="text" id="Straat" name="straat" placeholder="straat"><br>
        <input type="text" id="Postcode" name="postcode" placeholder="postcode"><br>
        <input type="text" id="Plaats" name="plaats" placeholder="plaats"><br>
        <input type="text" id="Email" name="email" placeholder="e-mail"><br>
        <input type="text" id="Wachtwoord" name="wachtwoord" placeholder="wachtwoord"><br><br>
        Minderjarig:
        <label for="JA">JA</label>
        <input type="radio" id="JA" name="Minderjarig" value="ja">
        <label for="NEE">NEE</label>
        <input type="radio" id="NEE" name="Minderjarig" value="NEE">
        <br><br>
        <input type="submit" name="Registreren" id="Registreren">
        <input type="submit" name="Resetten" id="Resetten">
    </form> 
</body>
</html>
<?php
    if(isset($_POST["Registreren"])){
        $gebruiker = array("Voornaam"=>$_POST["voornaam"], "Naam"=>$_POST["naam"],
                            "Geboortedatum"=>$_POST["geboortedatum"],"Straat"=>$_POST["straat"],
                            "Postcode"=>$_POST["postcode"],"Plaats"=>$_POST["plaats"],
                            "Email"=>$_POST["email"],"Wachtwoord"=>$_POST["wachtwoord"],
                            "Minderjarig"=>$_POST["Minderjarig"]);
        print_r($gebruiker);
        $gebruikerJsonString = json_encode($gebruiker);
        echo $gebruikerJsonString;
    }
?>