<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
//Selection de l'article voulu
if(isset($_GET['id']) AND !empty($_GET['id'])){
$id=$_GET['id'];
$user=$bdd->prepare('SELECT * FROM articles where id=?');
$user->execute(array($id));
if($user->rowCount()>0){
    $destination=$user->fetch()['destination'];
    $prix=$user->fetch()['prix'];

}else{echo "";} 
}else{echo "";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de l'article</title>
</head>
<body>
    <br><br><br><br><b><br></b>
    <div align="center">
        <p>Saisissez la nouvelle destination:</p>
        <input type="text" name="destination" placeholder="destination" value="<?php echo $destination;?>"><br>
        <p>Saisissez le nouveau prix :</p>
        <input type="text" name="prix" placeholder="prix" value="<?php printf("%d" ,$prix);?>" ><br>
        <br>
        <input type="submit"name ="modifier" value="Modifier" style="background-color:#F39C12; color:#424949;border-color:#F39C12;cursor:pointer;border-radius:12px;">
    </div>
    
</body>
</html>