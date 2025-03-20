<!DOCTYPE html>
<!--
    Author      : Gregoryy Mbayo
    Date        : 20.03.2025
    Description : 
-->

<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>exercice 4.4</title>
    </head>
    <body>
<h2>Télécharger un fichier</h2>
<form method="post" action="checkFile.php" enctype="multipart/form-data">
   <p>
      <label for="downloadFile">Fichier à télécharger :</label>
      <input type="file" name="downloadFile" id="downloadFile" />
   </p>
   <p>
      <input type="submit" name="btnSubmit" value="Envoyer le fichier" />
   </p>
</form>
</body>