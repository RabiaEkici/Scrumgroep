<?php
ob_start();
?>
<html lang="nl">
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <form name="login" action=" " method="post">
            Gebruikersnaam:<br>
            <input type="text" name="user"/> <br><br>
            <input type="submit" name="submit" value="inloggen"/>
        </form>
    </body>
</html>
<?php
    function welkom($user){
        $Username = $user;
        setcookie("Gebruiker",$user, time()+86400);
        if ($Username == $_COOKIE["Gebruiker"]){
            echo "Hallo $user, welkom terug.";
            echo "<br>";
            echo $user;
            echo "<br>";
            echo $_COOKIE["Gebruiker"];
        }
        elseif ($Username != $_COOKIE["Gebruiker"]){
            echo "Hallo ".$user.", U bent onze nieuwste gebruiken.";
            echo "<br>";
            echo $user;
            echo "<br>";
            echo $_COOKIE["Gebruiker"];
        }
    }
    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        $melding = welkom($user);
        echo "<br> $melding";
    }
ob_end_flush();
?>