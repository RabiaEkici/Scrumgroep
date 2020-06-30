<html>
<head>
    <meta charset="UTF-8">
    <title>celsius_fahrenheit_kelvin</title>
    <style>
    td{
        background-color: lightgreen;
    }
    </style>
</head>
<body>
    <table border="1" cellpadding="3" >
        <thead>
            <th>Celsius</th>
            <th>Fahrenheit</td>
            <th>Kelvin</th>
        </thead>
        <?php
            $Freeze = "style='background-color : lightblue';"; 

            $celsius = -50;
            while ($celsius <= 50) {
                    $kelvin = ($celsius + 273.15);
                    $fahrenheit = ($celsius * 1.8)+ 32 ;
                    if ($celsius <= 0) {
                        print "<td ".$Freeze.">".$celsius."</td>";
                    }
                    else{
                        print "<tr><td>".$celsius."</td>";
                    }
                    if ($fahrenheit <= 32) {
                        print "<td ".$Freeze.">".$fahrenheit."</td>";
                    }
                    else{
                        print "<td>".$fahrenheit."</td>";
                    }
                    if ($kelvin <= 273.15) {
                        print "<td ".$Freeze.">".$kelvin."</td></tr>";
                    }
                    else{
                    print "<td>".$kelvin."</td></tr>";
                    }
            $celsius += 1;
            } 
        ?>
    </table>
</body>
</html>