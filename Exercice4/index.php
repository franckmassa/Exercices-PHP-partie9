<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice4</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <p>
                <?php
                //On afffiche le timestamp du jour
                echo 'Il s\'est écoulé ' . time() . ' secondes depuis le 1er Janvier 1970.';
                ?>
            </p>
            <p>
                <?php
                //On affiche le timestamp du mardi 2 août 2016 à 15h00.
                echo 'Il s\'est écoulé ' . mktime(15, 0, 0, 8, 2, 2016) . ' secondes entre le 1er Janvier 1970 et le mardi 2 août 2016 à 15h00.';
                ?>      
            </p>
        </div>
    </body>
</html>