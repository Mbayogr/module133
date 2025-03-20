<!DOCTYPE html>
<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : genere un nombre aléatoire entre 1 et 80 et affiche affiche la tranche d'age selon le nombre
                 
-->
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2.2</title>
    </head>
    <body>
            <?php
                // genere un nombre aléatoire entre 1 et 80
                $age = rand(1,80);
                
                // affiche le nombre
                echo $age . "</br>";

                // affiche la tranche d'age selon le nombre
                switch ($age)
                {
                    case ($age < 18):
                        echo "Vous êtes mineur";
                    break;

                    case ($age < 26):
                        echo "Vous êtes un jeune adulte";
                    break;

                    case ($age < 66):
                        echo "Vous êtes un adulte";
                    break;

                    case ($age < 81):
                        echo "Vous êtes senior";
                    break;

                    default:
                        echo "Votre âge n’existe pas";
                    break;
                }
            ?>
<footer>
    <hr>
  <p>exercice 2.2</p>
</footer>
    </body>
</html>