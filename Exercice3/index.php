<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice3</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <?php
            
            //On affiche la date courante en Français avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
            setlocale(LC_ALL, 'fr_FR.utf-8');
            echo strftime("%A %e %B %Y");
            ?>
        </div>
    </body>
</html>
