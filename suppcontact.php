<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=contact','administrateur','sawnes');
if(isset($_GET['email']) AND !empty($_GET['email'])){
$email=$_GET['email'];
$user=$bdd->prepare('SELECT * FROM contact where email=?');
$user->execute(array($email));
if($user->rowCount()>0){
    $supp=$bdd->prepare('DELETE FROM contact where email=?');
    $supp->execute(array($email));
    header('Location : contact.php');
}else{echo "aucun client n'a été trouvé";} 
}else{echo "L'email n'a pas été récupperé!";}
?>