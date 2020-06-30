<!DOCTYPE html "PUBLIC">
<html>
    <body>
        <form>
            <button onclick="gooien()">Gooi</button>  
        </form>
<?php

$array = [];
function gooien(){
    $array[0] = rand(1, 6);
    $array[1] = rand(1, 6);
    $array[2] = rand(1, 6);
    $array[3] = rand(1, 6);
    $array[4] = rand(1, 6);

    $som = $array[0] + $array[1] + $array[2] + $array[3] + $array[4];

    echo $array[0];
    echo " ".$array[1];
    echo " ".$array[2];
    echo " ".$array[3];
    echo " ".$array[4];
    echo "<br>".$som;
}
gooien();

?>
</body>
</html>
