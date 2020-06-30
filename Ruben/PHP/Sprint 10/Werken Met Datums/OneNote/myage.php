<html>
<head>
    <meta charset="UTF-8">
    <title>MyAge</title>
    <style>
    #resultaat{
        height:200px;
        width: 400px;
        background-color: lightyellow;
        font-size: 18px;
        border-radius: 5px;
        border-style: solid;
        border-color: red;
        font-family:"Palatino Linotype", "Book Antiqua", "Palatino", "serif";
        margin-left:35%;
        text-align: center;
    }
    </style>
</head>
<body>
<div id="resultaat">
    <?php
    $geboortedatum = new DateTime('2002-03-18');
    $diff = $geboortedatum->diff(new DateTime());
    $months = $diff->format('%m') + 12 * $diff->format('%y');
    echo "Maanden: ".$months;

    $vandaag = date_create("now");
    $interval = date_diff($geboortedatum , $vandaag);
    echo "<br>Dagen: ".$interval->format("%a");
    echo "<br>Weken: ".floor($geboortedatum->diff($vandaag)->days/7);
    echo "<br>Uren: ".floor($geboortedatum->diff($vandaag)->days*24);
    echo "<br>Minuten: ".floor($geboortedatum->diff($vandaag)->days*1440);
    echo "<br>Seconden: ".floor($geboortedatum->diff($vandaag)->days*86400);
    ?>
</body>
</html>