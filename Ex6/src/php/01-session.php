<!DOCTYPE html>
<!--
    Author      : Gregoryy Mbayo
    Date        : 21.03.2025
    Description : 
-->

<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>exercice 6.1</title>
    </head>
    <body>
<h2>Authentification</h2>
<form method="post" action="checkAuth.php">
   <p>
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo" />
   </p>
   <p>
      <label for="password">Mot de passe :</label>
      <input type="text" name="password" id="password" />
   </p>
   <p>
      <input type="submit" name="btnSubmit" value="ok" />
   </p>
</form>
<a href="profile.php">Entrer...</a>
</body>