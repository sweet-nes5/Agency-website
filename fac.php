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
    <title>Facture des clients</title>
</head>
<body style="border:4px solid #F39C12;">
    <!--affichage des factures -->
    <?php 

    $recup=$bdd->query('SELECT * from facture');
    echo "N° Facture".' // '."Email".' // '."Date";?> <br><br><?php
    while($user=$recup->fetch()){
       echo $user['numFacture'].' //  '. $user['email'].' // '.$user['dateFacture'].'.  ';?><a href="supprimer.php?numFacture=<?= $user['numFacture'];?>" style="color:red; text-decoration:none;">supprimer la facture. </a> <br><br>
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>