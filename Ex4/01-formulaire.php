<!--
    Author      : Gregory Mbayo
    Date        : 20.03.2025
    Description :                 
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 4.1</title>
    </head>
    <body>
<h2>Reporter un problème</h2>
<form method="post" action="checkBug.php">
   <p>
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo" />
   </p>
   <p>
      <label for="incident">Description du problème :</label><br>
      <textarea name="incident" id="incident"></textarea>
   </p>
   <p>
      <label for="important">Priorité du problème :</label>
      <select name="important" id="important">
         <option value="choice">Choisir</option>
         <option value="low">Basse</option>
         <option value="middle">Moyenne</option>
         <option value="high">Prioritaire</option>
      </select>
   </p>
   <p>
      <label>Visibilité :</label>
      <input type="radio" name="visibility" value="privé">Privé
      <input type="radio" name="visibility" value="public">Public
   </p>
   <p>
      <label>Accepter en cochant les deux cases :</label><br>
      <input type="checkbox" name="condition[]">J'accepte que mes données soient traitées.<br>
      <input type="checkbox" name="condition[]">J'accepte les conditions générales d'utilisation
   </p>
   <p>
      <input type="submit" name="btnSubmit" value="Insérer le ticket" />
   </p>
</form>
</body>