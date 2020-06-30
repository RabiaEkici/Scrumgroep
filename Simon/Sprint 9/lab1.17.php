<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Voorbeeld van de do_while-lus</h3>
    <?php
    echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
    $saldo = 100;
    $rente = 0.1;
    $maand =1;
    echo "<br>Beginsaldo is: $saldo";
    echo "<br>START...";
    
    while($saldo < 2000)
    {
        
        $saldo = $saldo + ($saldo * $rente);
        $saldo = sprintf("%0.2f", $saldo);
        echo "<br>Maand: $maand je saldo is: $saldo";
          $maand++;

    }


    

    echo "<br> FINISH";
    ?>
</body>
</html>