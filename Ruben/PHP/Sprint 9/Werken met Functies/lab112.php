<html lang="nl">
    <head>
        <meta http-equiv="Content-Type"
            content="text/html;
            charset=UTF-8"/>
    </head>
   
    <body>
    <form method="post">
        <h3>Reiskosten</h3>
        <label for="vertrek">Vertrek:</label>
        <select id="vertrek" name="vertrek" value="true">
            <option value="1">Amsterdam</option>
            <option value="2">Utrecht</option>
            <option value="3">Den Haag</option>
            <option value="4">Rotterdam</option>
        </select>

        <label for="bestemming">Bestemming:</label>
        <select id="bestemming" name="bestemming"value="true">
            <option value="1">Amsterdam</option>
            <option value="2">Utrecht</option>
            <option value="3">Den Haag</option>
            <option value="4">Rotterdam</option>
        </select>

        <br>
        <br>

        <input type="submit" name="submit" value="Berekenen">

        <br>
        <br>

        ------------------------------------
    </form>
    <?php
        if(isset($_POST["submit"])){
        $vertrek = $_POST["vertrek"];
        $bestemming = $_POST["bestemming"];
        function reiskosten($vertrek, $bestemming){
            
            $vertrek = $_POST["vertrek"];
            $bestemming = $_POST["bestemming"];

            $reis = array();
            $reiskosten[1] = array();
            $reiskosten[2] = array();
            $reiskosten[3] = array();
            $reiskosten[4] = array();

            $reiskosten[1][1] = 0;
            $reiskosten[1][2] = 30;
            $reiskosten[1][3] = 60;
            $reiskosten[1][4] = 90;

            $reiskosten[2][1] = 30;
            $reiskosten[2][2] = 0;
            $reiskosten[2][3] = 40;
            $reiskosten[2][4] = 20;

            $reiskosten[3][1] = 60;
            $reiskosten[3][2] = 40;
            $reiskosten[3][3] = 0;
            $reiskosten[3][4] = 10;

            $reiskosten[4][1] = 90;
            $reiskosten[4][2] = 20;
            $reiskosten[4][3] = 10;
            $reiskosten[4][4] = 0;

        
            echo ("De berekende reiskosten zijn: ");
            echo $reiskosten[$vertrek][$bestemming];
            echo (" Euro"); 
            } 
            reiskosten($vertrek, $bestemming);
        }
    ?>
    </body>
</html>