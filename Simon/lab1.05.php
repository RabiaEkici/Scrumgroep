<h3>Lab 1.05</h3>
<?php
$tekst = array("een","twee",3,"vier");
array_push($tekst, 5);
echo "Stap 3. " . $tekst[0] . "," . $tekst[1] . "," . $tekst[2] . "," . $tekst[3] . "," . $tekst[4] . "<br>";
echo "Stap 4. Datatype is: " . gettype($tekst[4] . "<br>");
array_pop($tekst);
echo "<br>Stap 6. ". $tekst;
?>