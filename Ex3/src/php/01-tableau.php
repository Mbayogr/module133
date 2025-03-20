<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : Créer un tableau simple contenant les jours de la semaine.
                  Créer un second tableau assiociatif contenant la liste des mois avec leur saison.
                  Afficher les tableaux en utilisant les fonctions var_dump() et print_r().                
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 3.1</title>
    </head>
    <body>
            <?php
                /// Création du tableau contenant les jour de la semaine
                $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
                /// Création du tableau associatif contenant les mois avec leur saison
                $monthAndSeason = array("janvier" => "hiver", "fevrier" => "hiver", "mars" => "printemps", "avril" => "printemps", "mai" => "printemps", "juin" => "été", "juillet" => "été", "août" => "été", "septembre" => "automne", "octobre" => "automne", "novembre" => "automne", "decembre" => "hiver");

                /// affiche le contenu des tableaux avec la fonction var_dump
                var_dump($days);
                var_dump($monthAndSeason);

                /// affiche le contenu des tableaux avec la print r
                print_r($days);
                print_r($monthAndSeason);
            ?>
    </body>
</html>