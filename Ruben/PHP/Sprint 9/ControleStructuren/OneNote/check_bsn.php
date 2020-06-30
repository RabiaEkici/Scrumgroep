<html>
    <head>
    <meta http-equiv="Content-Type"
            content="text/html;
            charset=UTF-8"/>
    </head>
    <body>
        <form name="input" action=" " method="post">
        <input type="text" name="BsnNummer" value="">
        <input type="submit" width="300px" name="BsnCheck" value="Check">
        </form>
    </body>
</html>

<?php
function is_decimal( $val )
{
    return is_numeric( $val ) && floor( $val ) != $val;
}
 $BSNsom = 0;
    if(isset($_POST["BsnNummer"])){
        $BSN = $_POST["BsnNummer"];
        if (is_numeric($BSN))
        {
            echo "Bevat alleen getallen.<br>" ;
            
            if (strlen($BSN) == 9)
            {
                echo "Heeft het goede aantal cijfer.<br>" ;
                
                $BSNsom =  $BSNsom + ($BSN[0] * 9);
                $BSNsom =  $BSNsom + ($BSN[1] * 8);
                $BSNsom =  $BSNsom + ($BSN[2] * 7);
                $BSNsom =  $BSNsom + ($BSN[3] * 6);
                $BSNsom =  $BSNsom + ($BSN[4] * 5);
                $BSNsom =  $BSNsom + ($BSN[5] * 4);
                $BSNsom =  $BSNsom + ($BSN[6] * 3);
                $BSNsom =  $BSNsom + ($BSN[7] * 2);
                $BSNsom =  $BSNsom + ($BSN[8] * 1);
                $BSNsomAntwoord = $BSNsom / 11;
                if (is_decimal($BSNsomAntwoord) ){
                    echo "<br>Uw BSN nummer is om deze reden niet geldig: <br>";
                    echo "Voldoet niet aan de elfproef";
                }
                else{
                    echo "Voldoet aan de elfproef<br>";
                    echo "<br>Uw BSN nummer is geldig";
                }
            }
            else
            {
                echo "<br>Uw BSN nummer is om deze reden niet geldig: <br>";
                echo "Heeft niet het goede aantal cijfers.<br>" ;
            }
        }
        else
        {
            echo "<br>Uw BSN nummer is om deze reden niet geldig: <br>";
            echo "Bevat iets anders dan getallen. <br>" ;
        }

    }




?>