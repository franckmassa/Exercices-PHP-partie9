<?php
//Tableau pour la liste des mois de l'année 
$months = array(1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
//On vérifie si les valeurs existent et on récupère les mois et les années 
if (!empty($_POST['month']) && isset($_POST['year'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];
} else {
    //Sinon on récupère le mois et l'année en cours dans $month et $year
    // 'n' pour les mois 1 à 12
    $month = date('n');
    // 'y' pour l'année à 4 chiffres
    $year = date('Y');
}
//On récupère le nombre de jours dans le mois avec la fonction "date"
// 't' Nombre de jours dans le mois 28 à 31
$numberDaysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
//Récupération du premier jour de la semaine du mois grâce à la fonction date
//"N" pour la représentation numérique du jour de la semaine :1 (pour Lundi) à 7 (pour Dimanche)
$firstWeekDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Calendrier</title>
    </head>
    <body class="container">
        <div class="row">
            <form  class="col-md-12 text-center d-flex justify-content-between" action="index.php" method="POST">
            <select class="mt-5 bg-dark text-white" name="month">
                <?php
                //On crée la liste déroulante pour les mois, avec la boucle foreach
                foreach ($months as $monthNumber => $monthName) {
                    ?>
                    <!-- Condition de forme ternaire et Utilisation de l'attribut "selected" pour garder en mémoire le mois sélectionné -->                   
                    <option value="<?= $monthNumber ?>" <?= $month == $monthNumber ? 'selected' : '' ?>>
                        <?= $monthName ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <select class="mt-5 bg-dark text-white" name="year">
                <?php
                //On crée la liste déroulante pour les années, avec la boucle for
                for ($yearsList = 1900; $yearsList <= 2100; $yearsList ++) {
                    // Condition de forme ternaire et Utilisation de l'attribut "selected" pour garder en mémoire l'année sélectionnée -->
                    ?>
                    <option value="<?= $yearsList ?>" <?= $year == $yearsList ? 'selected' : '' ?>><?= $yearsList ?></option>
                    <?php
                }
                ?>
            </select>
            <input class="mt-5 bg-dark text-white" type="submit" name="send" value="Valider" />
        </form>
        </div>
        <div class="row">
            <table border class="col-md-12 bg-dark text-white text-center mt-5 ">
                <thead>
                    <?php
                    //Initialisation du tableau des jours de la semaine avec la boucle foreach
                    $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                    foreach ($days as $element) {
                        ?>
                    <td><?= $element; ?></td>
                    <?php
                }
                ?>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        //Déclaration de la variable initialisée à 1 pour le jour courant
                        $currentDay = 1;
                        //Utilisation d'une boucle "for" pour créer le nombre de cases nécessaires au calendrier
                        for ($daysBoxes = 1; $daysBoxes <= $numberDaysInMonth + $firstWeekDayOfMonth - 1; $daysBoxes ++) {
                            //$firstWeekDayOfMonth est inférieure ou égale au nombre de cases. Quand on arrive au jour de la semaine du premier jour du mois, on commence à écrire le numéro des jours
                            if ($firstWeekDayOfMonth <= $daysBoxes) {
                                ?><td><?= $currentDay ?></td><?php
                                $currentDay ++;
                            } else {
                                //On crée des cases vides pour éviter un décalage vers la gauche
                                ?><td></td><?php
                            }
                            //Si le nombre de cases est un multiple de 7 on passe une ligne car c'est la fin d'une semaine
                            if ($daysBoxes % 7 == 0) {
                                ?></tr><tr><?php
                            }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div> 
    </body>
</html>