<!DOCTYPE html>
<!--
    Author      : Gregoryy Mbayo
    Date        : 20.03.2025
    Description : 
-->
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>exercice 4.2</title>
    </head>
    <body>
            <?php
                //récupère la valeur du pseudo envoyé par le formulaire est affiche un message d'erreur si le pseudo est vide
                if($_POST["pseudo"] != "")
                {
                    $pseudo = $_POST["pseudo"];
                    echo $pseudo . "<br>";
                }
                else
                {
                    echo "Le pseudo est vide <br>";
                }
                // 
                if($_POST["incident"] != "")
                {
                    $incident = $_POST["incident"];
                    echo $incident . "<br>";
                }
                else
                {
                    echo "la déscription est vide <br>";
                }
             
                if($_POST["important"] != "Choisir")
                {
                    $important = $_POST["important"];
                    echo $important . "<br>";
                }
                else
                {
                    echo " le niveau d'importance est vide <br>";
                }
             
                if(isset($_POST["visibility"]))
                {
                    $radio = $_POST["visibility"];
                    echo $radio . "<br>";
                }
                else
                {
                    echo " le choix est vide <br>";
                }
            
                if(isset($_POST["condition"]))
                {
                    $condition = $_POST["condition"];
                    foreach($condition as $x)              

                    echo $x  . "<br>";
                }
                else
                {
                    echo "le choix est vide <br>";
                }
            ?>
    </body>
</html>