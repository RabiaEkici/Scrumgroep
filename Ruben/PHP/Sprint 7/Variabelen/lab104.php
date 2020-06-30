<h3>php lab1.4</h3>
<?php
$naamK = "Karim";
$naamS = "Sophie";
$nederlandsK = "8.5";
$nederlandsS = "8.9";
$engelsK = "7.7";
$engelsS = "8.7";
$rekenenK = "6.7";
$rekenenS = "9.7";
$programmerenK = "8.5";
$programmerenS = "9.5";
$databasesK = "9.4";
$databasesS = "9.2";
$GemiddeldK = ($nederlandsK + $engelsK + $rekenenK + $programmerenK + $databasesK) / 5;
$GemiddeldS = ($nederlandsS + $engelsS + $rekenenS + $programmerenS + $databasesS) / 5;
$Gemiddeld = ($GemiddeldK + $GemiddeldS) / 2;
echo "<table border = '1'>
<caption>
    <strong>Rapport</strong>
</caption>
<thead>
    <tr>
        <th>Naam</th><th>Nederlands</th><th>Engels</th>
        <th>Rekenen</th><th>Programmeren</th>
        <th>Databases</th>
        <th>Gemiddeld</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>$naamK</td><td>$nederlandsK</td><td>$engelsK</td>
                <td>$rekenenK</td><td>$programmerenK</td>
                <td>$databasesK</td><td>$GemiddeldK</td>
                </tr>
                <tr>
                <td>$naamS</td><td>$nederlandsS</td><td>$engelsS</td>
                <td>$rekenenS</td><td>$programmerenS</td>
                <td>$databasesS</td><td>$GemiddeldS</td>
                </tr>
                </tbody>
            <tfoot>
                <tr>
                    <td colspan='6'>Groep gemiddeld</td><td>$Gemiddeld</td>
                </tr>
            <tfoot>
</table>";
?>