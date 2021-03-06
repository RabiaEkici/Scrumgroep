<html lang="nl">
    <head>
        <meta http-equiv="Content-Type"
            content="text/html;
            charset=UTF-8"/>
        <style>
            .album{clear: left; width: 100%;}
            .omslag{float: left;}
            .gegevens{float: left; padding-left: 20px;}
            .korting{clear: left;}
            .aantal{background-color: #f8ce6c;}
        </style>
        <title>Mijn winelmandje</title>
    </head>
    <body style="font-family: Verdana; font-size: 9px;">
    <h3>Mijn winelmandje</h3>
    <form name="albums" action=" " method="post">
        <div class="albums">
            <div class="omslag">
                <img src="images/evora.jpg" width="50px" alt="X"/>
            </div>
            <div class="gegevens">
                Ceseria Evora "Em Um Concerto" Prijs: $9
                <input type="hidden" name="albumcode[0]" value="001">
                <input type="hidden" name="artiest[0]" value="Ceseria Evora">
                <input type="hidden" name="album[0]" value="Em Um Concerto">
                <input type="hidden" name="prijs[0]" value="9">
                <input type="hidden" name="genre[0]" value="World">
                <br>
                Aantal:
                <input type="text" size=2 maxlenght=3 name="aantal[0]" class="aantal" value="0">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="albums">
            <div class="omslag">
                <img src="images/manuchao.jpg" width="50px" alt="X"/>
            </div>
            <div class="gegevens">
                Manu Chao "Clandestino" Prijs: $5
                <input type="hidden" name="albumcode[1]" value="002">
                <input type="hidden" name="artiest[1]" value="Manu Chao">
                <input type="hidden" name="album[1]" value="Clandestino">
                <input type="hidden" name="prijs[1]" value="5">
                <input type="hidden" name="genre[1]" value="World">
                <br>
                Aantal:
                <input type="text" size=2 maxlenght=3 name="aantal[1]" class="aantal" value="0">
            </div>
        </div>

        <div class="korting">
            <br><hr/>Korting:<br/>
            <input type="checkbox" name="student" value="15">
            Student: 15%<br/>
            <input type="checkbox" name="klant" value="10">
            Klant: 10%<br/>
            <br>
            Selecteer een betalingswijze:
            <br>
            <select id="Betaling" name="Betaling">
                <option value="visa">Visa</option>
                <option value="mc">MasterCard</option>
                <option value="paypal">PayPal</option>
                <option value="ideal">Ideal</option>
            </select>
            <input type="submit" width="300px" name="verzenden" value="Bestellen ">
        </div>
    </form>
    </body>
</html>
<?php
    $korting = null;
    $aantal = null;
    if(isset($_POST["student"])){
        $korting = $korting + 15;
    }
    if(isset($_POST["klant"])){
        $korting = $korting + 10;
    }
    if(isset($_POST["aantal"])){
        $aantal = htmlspecialchars($_POST["aantal"][0]);
        echo "Korting is: ".$korting."%";
        echo "<br>Bestelde items: ".$aantal;
    }

    if(isset($_POST["verzenden"]))
    {
        include_once("Externe_Functies.php");
        echo "<br> De korting()-function: " . korting(). "%";
        $betalingswijze = $_POST["Betaling"];
        $servicekosten = Servicekosten($betalingswijze);
        echo "<br>Servicekosten zijn: €" . $servicekosten;
        Facturing();
        Premium();
    }
    
?>
