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
    <!--affichage des clients -->
    <?php 

    $recup=$bdd->query('SELECT * from client');
    echo "Identifiant".' // '."Nom et prenom".' // '."Email".' // '."Numero de telephone".' // '."Date de naissance:";?> <br><br><?php
    while($user=$recup->fetch()){
       echo $user['id'].' //  '. $user['nomETprenom'].' // '.$user['email'].' // '.'0'.$user['numtelephone'].' // '.$user['dateDeNaissance'].'.   ';?><a href="supprimer.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">supprimer le client ,  </a>  <a href="modifier.php?email=<?= $user['email'];?>" style="color:red; text-decoration:none;">   modifier le client</a></form> <br><br> 
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>