<?php
    if(isset($_POST["submit"]) ){
        echo "<strong>Uw gegevens zijn</strong>:";
        echo "<br>";
        echo "<br>Achternaam: ".htmlspecialchars($_POST["Achternaam"]);
        echo "<br>Voornaam: ".htmlspecialchars($_POST["Voornaam"]);
        echo "<br>Straat: ".htmlspecialchars($_POST["Straat"]);
        echo "<br>Postcode: ".htmlspecialchars($_POST["Postcode"]);
        echo "<br>Straat: ".htmlspecialchars($_POST["Straat"]);
        echo "<br>Plaats: ".htmlspecialchars($_POST["Plaats"]);
        echo "<br>E-mailadres: ".htmlspecialchars($_POST["E-mail"]);
        echo "<br>";
        echo "<br>";
        echo "<strong>U wordt ingeschreven voor de volgende opleiding:</strong>";
        $opleiding = $_POST["opleiding"];
            if($opleiding == "ICT"){
                echo "<br>".$opleiding;
                echo "<br>ICT opleidingen zijn vol. Kies een andere opleiding.";
            }
            elseif($opleiding == "Engels"){
                echo "<br>".$opleiding;
            }
            elseif($opleiding == "Techniek"){
                echo "<br>".$opleiding;
            }
            elseif($opleiding == "Nederlands"){
                echo "<br>".$opleiding;
            }
    }
?>