<html>
<head>
    <meta charset="UTF-8">
    <title>DateDiff</title>
</head>
<body>
    <div id="input">
    <form id="input" method="POST">
        StartDate
        <input type="date" id="start" name="start" value="2020-06-18" >
        <br>
        <br>
        EndDate
        <input type="date" id="end" name="end" value="2020-06-18">
        <br>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>    
        <?php
         if(isset($_POST["submit"]) ){
            $startdate = htmlspecialchars($_POST["start"]);
            $enddate = htmlspecialchars($_POST["end"]);
            $Start = date_create($startdate);
            $End = date_create($enddate);
            $dagen = date_diff($Start ,$End);
            echo "Verschil van ".$startdate." tot ".$enddate." in dagen: ".$dagen->format("%a");
         }
        ?>
    </div>
</body>
</html>