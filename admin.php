<?php
session_start();
if(isset($_POST['valider'])){
$pseudo='administrateur';
$mdp='sawnes';
$pseudo_saisi=htmlspecialchars($_POST['pseudo']);
$mdp_saisi=htmlspecialchars($_POST['mdp']);
if ($pseudo==$pseudo_saisi AND $mdp==$mdp_saisi) {
    $_SESSION['mdp']=$mdp_saisi;
    header('Location: indexadmin.php');
}else{
    echo "votre login ou mot de passe est incorrect!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion administrateur</title>
</head>
<body><center>
    <form action="" method="POST" style="border:4px solid #F39C12;">
    
<br><br><br><br><br><br><br>
          <h1 style="color:#F39C12;">Connexion Administrateur</h1>
          <br>
          <p style="color:#424949;">Login:</p>
          <input type="text"  name="pseudo" required autocomplete="off" >
          <p style="color:#424949;">password:</p>
          <input type="password" name="mdp" required  autocomplete="off" >
          <br><br>
          <input type="submit" name="valider" value="Suivant" style="background-color:#F39C12; color:#424949;border-color:#F39C12;cursor:pointer;border-radius:12px;">
          <br><br><br><br><br><br><br><br><br><br><br><br>
</form>

</center>
    
</body>
</html>
