<?php
session_start();
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}
$bdd=new PDO('mysql:host=localhost;dbname=contact','administrateur','sawnes');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts du site</title>
</head>
<body style="border:4px solid #F39C12;">
    <!--affichage des clients -->
    <?php 

    $recup=$bdd->query('SELECT * from contact');
    echo "Nom et prenom".' // '."Email".' // '."Message";?> <br><br><?php
    while($user=$recup->fetch()){
       echo  $user['nomETprenom'].' // '.$user['email'].' // '.$user['texte'].'.   ';?><a href="suppcontact.php?email=<?= $user['email'];?>" style="color:red; text-decoration:none;">supprimer le contact  </a> <br><br>
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>