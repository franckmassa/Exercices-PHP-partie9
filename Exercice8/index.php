<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice8</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <p>
              <?php
            //Affiche la date du jour -22 jours.
            echo date('Y-m-d', strtotime('-22 day'));
            ?>  
            </p>           
        </div>
    </body>
</html>