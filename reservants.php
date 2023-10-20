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
</head>
<body style="border:4px solid #F39C12;">
    <!--affichage des clients -->
    <?php 

    $recup=$bdd->query('SELECT * from reservation');
    echo "Destination".' // '."Adultes".' // '."Enfants".' // '."Age Enfants".' // '."Email";?> <br><br><?php
    while($user=$recup->fetch()){
       echo $user['destination'].' //  '. $user['adultes'].' // '.$user['enfants'].' // '.'0'.$user['ageEnfants'].'  //  '.$user['email'].'     .     ';?><a href="supprimer.php?email=<?= $user['email'];?>" style="color:red; text-decoration:none;">supprimer le réservant .</a></form> <br><br> 
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>