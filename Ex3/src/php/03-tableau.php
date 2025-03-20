<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description : Créer un tableau multidimensionnel pour stocker les notes de module pour un élève.
                  Ensuite parcourir le tableau avec des boucles foreach. Et afficher chaque élève avec ses résultats.               
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3.3</title>
    </head>
    <body>
            <?php
                // stock le nom + les notes des élèves dans le tableau
                $studentGrades = array(
                    "Basile" => array(
                        "100" => "5.5",
                        "301" => "4.0",
                        "226" => "6.0"
                    ),
                    "Lucien" => array(
                        "100" => "6.0",
                        "301" => "5.0",
                        "226" => "2.5"
                        
                    )
                );
                
                // Affiche le contenu du tableau
                foreach($studentGrades as $name => $array)
                {
                    echo $name . "<br>";
                    foreach($array as $module => $gradeValue)
                    {
                        echo $module . " = " . $gradeValue . "<br>";
                    }
                }
            ?>
    </body>
</html>