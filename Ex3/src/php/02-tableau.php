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
        <title>exercice 3.2</title>
    </head>
    <body>
            <?php
                /// Création du tableau contenant les jour de la semaine
                $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
                /// Création du tableau associatif contenant les mois avec leur saison
                $monthAndSeason = array("janvier" => "hiver", "fevrier" => "hiver", "mars" => "printemps", "avril" => "printemps", "mai" => "printemps", "juin" => "été", "juillet" => "été", "août" => "été", "septembre" => "automne", "octobre" => "automne", "novembre" => "automne", "decembre" => "hiver");

                /// affiche le contenu des tableaux avec une boucle for
                for ($i = 0; $i < count($days); $i++) {
                    echo $days[$i] . "<br>"; /// Affiche chaque jour suivi d'un saut de ligne
                }
                
                echo "<br>"; 

              
                $keys = array_keys($monthAndSeason); /// Récupère les mois
                $length = count($keys); /// Taille du tableau
                
                /// affiche les contenu du tableau avec une boucle for
                for ($i = 0; $i < $length; $i++) {
                     $month = $keys[$i]; // Récupère la clé du mois
                     $season = $monthAndSeason[$month]; // Récupère la saison associée
                     echo $month . " => " . $season . "<br>";
                    }

                /// affiche le contenu des tableaux avec une boucle foreach
                foreach($days as $day)
                  {
                      echo $day . "<br>";
                  }
  
                  echo "<br>";
  
                /// affiche le contenu des tableaux avec une boucle foreach
                foreach($monthAndSeason as $month => $season)
                  {
                      echo $month . " => " . $season . "<br>";
                  }

                ///
            
            ?>
    </body>
</html>