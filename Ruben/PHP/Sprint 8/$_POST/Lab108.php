<form action="Lab108Verwerken.php" method="post">
<?php
$achternaam = "<input required type=\"text\" name=\"Achternaam\"/>";
$Voornaam = "<input required type=\"text\" name=\"Voornaam\"/>";
$Straat = "<input required type=\"text\" name=\"Straat\"/>";
$Postcode = "<input required type=\"text\" name=\"Postcode\"/>";
$Plaats = " <select id=\"Plaats\" name=\"Plaats\">
            <option value=\"enschede\">Enschede</option>
            <option value=\"oldenzaal\">Oldenzaal</option>
            <option value=\"hengelo\">Hengelo</option>
            <option value=\"almelo\">Almelo</option>
            </select>";
$Email = "<input required type=\"text\" name=\"E-mail\"/>";
echo "<table border = '1'>
<caption>
    <strong>InschrijfFormulier</strong>
</caption>
    <thead>
        <tr>
            <td>Achternaam</td>
            <td>$achternaam</td>
        </tr>
        <tr>
            <td>Voornaam</td>
            <td>$Voornaam</td>
        </tr>
        <tr>
            <td>Straat</td>
            <td>$Straat</td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td>$Postcode</td>
        </tr>
        <tr>
            <td>Plaats</td>
            <td>$Plaats</td>
        </tr>
        <tr>
            <td>E-mailAdres</td>
            <td>$Email</td>
        </tr>
</table>

<p>Kies een Opleiding</p>

        <input type=\"radio\" name=\"opleiding\" value=\"ICT\"> ICT
        <br><input type=\"radio\" name=\"opleiding\" value=\"Engels\"> Engels
        <br><input type=\"radio\" name=\"opleiding\" value=\"Techniek\"> Techniek
        <br><input type=\"radio\" name=\"opleiding\" value=\"Nederlands\"> Nederlands
    
        <br>
        <br><input type=\"submit\" name=\"submit\" value=\"Versturen\">
        <input type=\"reset\" name=\"Reset\" value=\"Reset\">
";
?>