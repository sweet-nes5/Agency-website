<?php
$nomETprenom=$_POST['nomETprenom'];
$email=$_POST['email'];
$dateDeNaissance=$_POST['dateDeNaissance'];
$numtelephone=$_POST['numtelephone'];
$pass=$_POST['pass'];
$objet=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
$i=$objet-> prepare("INSERT INTO client(nomETprenom,email,dateDeNaissance,numtelephone,pass) VALUES(:nomETprenom,:email,:dateDeNaissance,:numtelephone,:pass)"); 


    $i-> execute([
        'nomETprenom'=>$nomETprenom,
        'email'=>$email,
        'dateDeNaissance'=>$dateDeNaissance,
        'numtelephone'=>$numtelephone,
        'pass'=>$pass
    ]);
    $insert=$i;
    if($insert){
        $message='client ajouté!';
    }
    else{
        $message='client non ajouté';
    }
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div align="center" style="border:2px solid #F39C12;"><p><?php echo $message; ?></p>
    <br><br><br><br><br><br><br><br><br><br><br>
    <p>Votre nom et prenom :  <?php echo $_POST['nomETprenom']."." ;?></p>
    <p>Votre email :  <?php echo  $_POST['email'].".";?></p>
    <p>Votre numero de telephone :  <?php echo $_POST['numtelephone'].".";?></p>
    <p>Votre date de naissance :  <?php echo $_POST['dateDeNaissance'].".";?></p><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>
</html>
