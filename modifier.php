<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=clients','administrateur','sawnes');
if(isset($_GET['email']) AND !empty($_GET['email'])){
$email=$_POST['email'];}
$user=$bdd->prepare('SELECT * FROM clients  where email=?');
$user->execute(array($email));
if($user->rowCount()>0){
    $upp=$bdd->prepare('UPDATE clients set email=:nouvelemail ,numtelephone=:num where email=:ancien');
    $upp->execute(array(
        "nouvelemail" =>$_POST['email'],
        "num" =>$_POST['tel'],
       

    ));}
   
if (isset($_POST['update'])) {
    header('Location : clients.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier le clients</title>
</head>
<body>
    <div align="center">
        <br><br><br></br><br><br>
    <form action="modifier.php" method="post">
        <h1 style="color:#F39C12;">Modification des informations du client</h1><br>
        <p style="color:#424949;">Saisissez le nouvel email:</p>
        <input type="text" placeholder="exemple@gmail.com" style="border-color:#F39C12;" name="email" >
        <p style="color:#424949;">Saisissez le nouveau numero:</p>
        <input type="text" placeholder="0796684215" style="border-color:#F39C12;" name="tel"><br><br>
      <div>  <INPUT type="submit" name="update" VALUE="confirmer"style="border-color:#F39C12; background-color:#F39C12;border-radius:10px;cursor:pointer;color:#424949;"></div>
    </form></div>
</body>
</html>