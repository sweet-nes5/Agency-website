<?php
session_start();
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil administrateur</title>
</head>
<body style="border:4px solid #F39C12;">

  <h1 style="color:#F39C12;">Fonctionnalités:</h1>
    <a href="clients.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Accéder a la liste des clients   =></a><br><br>
    <a href="contact.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Accéder a la liste des contacts   =></a><br><br>
    <a href="reservants.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Accéder a la liste des réservants   =></a><br><br>
    <a href="fac.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Accéder a la liste des factures   =></a><br><br>
    <a href="publier.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Publier un article   =></a><br><br>
    <a href="AfifichageArticle.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Afficher les articles   =></a><br><br>
    <a href="modifierArticle.php" style=" text-decoration:none;font-size:20px;color:#424949;">- Modifier un article   =></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>