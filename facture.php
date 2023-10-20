<?php
define('HOST', 'localhost');
define('DB_NAME', 'client');
define('USER', 'administrateur');
define('PASS', 'sawnes');
try{
  $db=new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER ,PASS);
  $db-> setAttribute(PDO:: ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
  
}catch(PDOException $e){
   echo $e;
}
 //insertion de l'email dans la table facture
$email=null;
if(isset($_POST['email'])){
     $email=$_POST['email'];}
$objet=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
$i=$objet-> prepare("INSERT INTO facture(email) VALUES(:email)"); 
$i->bindValue(':email',$email,PDO::PARAM_STR);
$i-> execute(array(
     ':email'=>$email
 ));
//recuperer l'identifiant
$tab=array();
if(isset($_POST['email'])){
$email=$_POST['email'];}
$user=$db->prepare("SELECT * FROM client where email=:email");
$user->bindValue(':email', $email, PDO::PARAM_STR);
$user->execute();
$tab=$user->fetch();
//recuperer le numero de facture
$tab1=array();
if(isset($_POST['email'])){
$email1=$_POST['email'];}
$user1=$db->prepare("SELECT * FROM facture where email=:email");
$user1->bindValue(':email', $email, PDO::PARAM_STR);
$user1->execute();
$tab1=$user1->fetch();
$tm=time();
$tm=$tab1['dateFacture'];
//recuperer la destination du client
$tab2=array();
if(isset($_POST['email'])){
$email=$_POST['email'];}
$user2=$db->prepare("SELECT * FROM reservation where email=:email");
$user2->bindValue(':email', $email, PDO::PARAM_STR);
$user2->execute();
$tab2=$user2->fetch();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
</head>
 <body>
 
      <div align="center" style="border:3px solid #F39C12;">
     
      <br><br><br><br>
      <h1 style="color:#F39C12;">Facture du client</h1><br>
      <p style="color:#424949;">N° Facture:</p><input type="text" value="<?php print_r($tab1['numFacture'])  ; ?>" name="num" style="border-color:#F39C12;" >
      <p style="color:#424949;">ID client:</p><input type="text"value="<?php print_r($tab['id'])  ; ?>"  name="id" style="border-color:#F39C12;" ><br>
      <p style="color:#424949;">Destination du client:</p><input type="text" value="<?php print_r($tab2['destination'])  ; ?>" name="destination" style="border-color:#F39C12;"><br>
      <p style="color:#424949;">Date de Facture:</p><input type="text" value="<?php echo date('d/m/y'); ?>" name="date" style="border-color:#F39C12;"><br><br><br>
       <button onclick="window.print()" style="border-color:#F39C12; background-color:#F39C12;border-radius:10px;cursor:pointer;color:#424949;">imprimer</button>
      <a href="reservation.php"><INPUT TYPE="reset" NAME="annuler" VALUE="Annuler"style="border-color:#F39C12; background-color:#F39C12;border-radius:10px;cursor:pointer;color:#424949;"></a>
       
        <br><br><br><br><br><br><br>

       
      </div>
   
 </body>
 
 </html>