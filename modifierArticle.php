<?php
session_start();
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id=$_GET['id'];
    $user=$bdd->prepare('SELECT * FROM articles  where id=?');
    $user->execute(array($id));
    if($user->rowCount()>0){
        $supp=$bdd->prepare('DELETE FROM client where id=?');
        $supp->execute(array($id));
        header('Location : clients.php');
    }else{echo "";} 
    }else{echo "";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles du site</title>
</style>
</head>
<body style="border:4px solid #F39C12;">
    <!--affichage des articles -->
    <?php 

    $recup=$bdd->query('SELECT * from articles');
    echo "Identifiant".' // '."Destination".' // '."Prix";?> <br><br><?php
    while($user=$recup->fetch()){
       echo $user['id'].' //  '. $user['destination'].' // '.$user['prix'].'.   ';?><a href="forumModification.php?id=<?= $user['id'];?>" style="color:red; text-decoration:none;">modifier l'article . </a>  <br><br>
      
       
       
       <?php

    }
 
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>