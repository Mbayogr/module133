<!DOCTYPE html>
<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : genere un nombre aléatoire entre 1 et 25.
                 si le nombre est inférieur à 18, afficher « Vous êtes mineur », sinon afficher « Vous êtes majeur ».
-->
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
            <?php
                // créer le nombre aléatoire entre 1 et 25
                $age = rand(1,25);

                // affiche le nombre
                echo $age . "</br>";

                // si le nmbre est plus petit que 18 affiche vous êtes mineur sinon vous êtes majeur
                if ($age < 18)
                {
                    echo "Vous êtes mineur";
                }
                else
                {
                    echo "Vous êtes majeur";
                }
            ?>
<footer>
    <hr>
  <p>exercice 2.1</p>
</footer>
    </body>
</html>