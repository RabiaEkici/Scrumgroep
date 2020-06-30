<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function maxGetal($getal1,$getal2){
            if($getal1 > $getal2){
                return($getal1);
            }elseif($getal2 > $getal1){
                return($getal2);
            }else{
                return("gelijk");
            }
        }
        
        $input1 = doubleval($_POST["eerstegetal"]);
        $input1 = doubleval($_POST["tweedegetal"]);
        
    ?>
    
    <form action="" method="post">
    <input type="number" name="eerstegetal"
    placeholder="Eerste getal"><br>
    <input type="number" name="tweedegetal"
    placeholder="Tweede getal"><br><br>
    <input type="submit" name="submit"
    value="Bereken hoogste getal">
    <p> ---------------------------------</p>
    </from>
    <?php

    if(isset($_POST["submit"])){
        $maxgetal = 
        maxGetal($_POST["eerstegetal"],$_POST["tweedegetal"]);
        echo $maxgetal;
    }
    ?>
</body>
</html>