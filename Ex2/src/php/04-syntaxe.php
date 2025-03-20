<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : Créer une fonction pour calculer un nombre à la puissance désirée.
                 
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 2.4</title>
    </head>
    <body>
            <?php
                // fonction qui permet la puissance d'un nombre désiré
                // $a = valuer de base 
                // $b = la puissance 
                // retourne le réslutat du calcul
                function CalcPower($a, $b)
                {
                    return pow($a, $b);
                }

                // affiche le résultat de la fonction
                echo CalcPower(2, 3) . "</br>";
                echo CalcPower(4, 2) . "</br>";
                echo CalcPower(6, 3) . "</br>";
                echo CalcPower(7, 4) . "</br>";
                echo CalcPower(12, 5) . "</br>";
                echo CalcPower(3, 6) . "</br>";
                echo CalcPower(5, 5) . "</br>";
                echo CalcPower(8, 8) . "</br>";
            ?>
<footer>
    <hr>
  <p>exercice 2.4</p>
</footer>
    </body>
</html>