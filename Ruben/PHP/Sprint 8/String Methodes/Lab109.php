<?php
    $brief = "
    Beste <b> <<abonnee>> </b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting:<br>
    U betaalt<b> <<bedrag-met-korting>> </b>
    in plaats van 65 euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur<br>";

    $NewBrief = str_replace(array('<<abonnee>>', '<<bedrag-met-korting>>'), array(' Jan Davids', ' 50 '), $brief);
    echo $NewBrief;
?>