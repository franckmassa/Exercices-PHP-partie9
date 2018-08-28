<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice1</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="bg-info d-inline-block text-center rounded font-weight-bold m-5 p-5" style="font-size: 30px;">
            <p>
             <?php
            //On affiche la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
            echo date('d/m/Y');
            ?>   
            </p>   
        </div>
    </body>
</html>


