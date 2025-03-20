<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : Créer un code pour trouver les 10 premiers nombres de la suite de Fibonacci.
                 
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2.3</title>
    </head>
    <body>
            <?php
                $firstValue = 0;  // première valeur de fibonacci
                $secondValue = 1; // deuxième valeur de fibonacci
                $counter = 0;     // compteur de la boucle

                // refait la boucle tant qu'elle est plus petite que 11
                while ($counter < 11)
                { 
                    echo ' ' . $firstValue; 
                    $currentValue = $secondValue + $firstValue; // la valeur acctuelle est égale à la somme de la première et deuxième valeur
                    $firstValue = $secondValue;                 // la première valeur devient la deuxième
                    $secondValue = $currentValue;               // la deuxième devient l'accturlle
                    $counter++;                                 // ajoute 1 au compteur
                } 
            ?>
<footer>
    <hr>
  <p>exercice 2.3</p>
</footer>
    </body>
</html>