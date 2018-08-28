<?php
//Déclaration des variables
$august = new DateTime('2018-08-22');
$may = new DateTime('2016-05-16');
//Calcul du nombre de jours dans l'interval
$interval = $may->diff($august);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <?php
            // %a affiche le nombre total de jours dans l'interval 
            echo 'Il y a ' . $interval->format('%a jours au total.') . "\n";
            ?>
        </div>
    </body>
</html>