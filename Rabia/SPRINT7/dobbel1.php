<!DOCTYPE html PUBLIC>
<html>
<head></head>
<body>
    <form method="post">
        <input type="submit" name="button1"class="button" value="Button1" />
    </form>
    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            $dice0 = rand(1,6);
            $dice1 = rand(1,6);
            $dice2 = rand(1,6);
            $dice3 = rand(1,6);
            $dice4 = rand(1,6);
            $randomArray = array($dice0,$dice1,$dice2,$dice3,$dice4);
            $totaal = $randomArray[0] + $randomArray[1] + $randomArray[2] + $randomArray[3] + $randomArray[4];
            echo $randomArray[0];
            echo "<br>" . $randomArray[1];
            echo "<br>" . $randomArray[2];
            echo "<br>" . $randomArray[3];
            echo "<br>" . $randomArray[4];
            echo "<br>" . $totaal;
        }
        ?>
</body>
</html>