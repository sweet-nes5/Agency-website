<?php

$objet=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
$i=$objet-> prepare("INSERT INTO reservation(destination,adultes,enfants,ageEnfants,email) VALUES(:destination,:adultes,:enfants,:ageEnfants,:email)"); 
if(isset($_POST["destination"])){               
        $i->bindValue(':destination',$_POST['destination'], PDO::PARAM_STR);}
    if(isset($_POST["adultes"])){
        $i->bindValue(':adultes',$_POST['adultes'], PDO::PARAM_INT);}
    if(isset($_POST["enfants"])){  
        $i->bindValue(':enfants',$_POST['enfants'], PDO::PARAM_INT);} 
    if(isset($_POST["ageEnfants"])){               
        $i->bindValue(':ageEnfants',$_POST['ageEnfants'], PDO::PARAM_INT);}
    if(isset($_POST["email"])){               
            $i->bindValue(':email',$_POST['email'], PDO::PARAM_STR);} 

    $i-> execute(array(
        ':destination'=>$_POST['destination'],
        ':adultes'=>$_POST['adultes'],
        ':enfants'=>$_POST['enfants'],
        ':ageEnfants'=>$_POST['ageEnfants'],
        ':email'=>$_POST['email']
    ));
    $insert=$i;
    if($insert){
        $message='reservant ajouté!';
    }
    else{
        $message='reservant non ajouté';
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
    <p><?php echo $message; ?></p>
</body>
</html>
