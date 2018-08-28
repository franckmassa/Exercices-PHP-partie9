<?php
//On affiche le nombre de jours dans le mois de février de l'année 2016
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice6</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <?php
            echo 'Il y a ' . $number . ' jours en février 2016.';
            ?>
        </div>
    </body>
</html>