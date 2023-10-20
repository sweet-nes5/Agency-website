<?php
session_start();
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients du site</title>
</style>
</head>
<body style="border:4px solid #F39C12;">
    <!--affichage des articles -->
    <?php 

    $recup=$bdd->query('SELECT * from articles');
    echo "Identifiant".' // '."Destination".' // '."Prix";?> <br><br><?php
    while($user=$recup->fetch()){
       echo $user['id'].' //  '. $user['destination'].' // '.$user['prix'].'.   ';?><a href="modifierArticle.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">supprimer l'article . </a>  <br><br>
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
