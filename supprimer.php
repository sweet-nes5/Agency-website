<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
//supression des clients
if(isset($_GET['id']) AND !empty($_GET['id'])){
$id=$_GET['id'];
$user=$bdd->prepare('SELECT * FROM client where id=?');
$user->execute(array($id));
if($user->rowCount()>0){
    $supp=$bdd->prepare('DELETE FROM client where id=?');
    $supp->execute(array($id));
    header('Location : clients.php');
}else{echo "";} 
}else{echo "";}
//supression des reservants
if(isset($_GET['email']) AND !empty($_GET['email'])){
    $id=$_GET['email'];
    $user=$bdd->prepare('SELECT * FROM reservation where email=?');
    $user->execute(array($id));
    if($user->rowCount()>0){
        $supp=$bdd->prepare('DELETE FROM reservation where email=?');
        $supp->execute(array($id));
        header('Location : reservants.php');
    }else{echo "";} 
    }else{echo "";}
//suppression des factures
if(isset($_GET['numFacture']) AND !empty($_GET['numFacture'])){
$id=$_GET['numFacture'];
$user=$bdd->prepare('SELECT * FROM facture where numFacture=?');
$user->execute(array($id));
if($user->rowCount()>0){
    $supp=$bdd->prepare('DELETE FROM facture where numFacture=?');
    $supp->execute(array($id));
    header('Location : clients.php');
}else{echo "";} 
}else{echo "";}
//supression des articles
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id=$_GET['id'];
    $user=$bdd->prepare('SELECT * FROM articles where id=?');
    $user->execute(array($id));
    if($user->rowCount()>0){
        $supp=$bdd->prepare('DELETE FROM articles where id=?');
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
    <title>Suppression</title>
</head>
<body>
    <?php echo "Supression réussie!";?>
</body>
</html>