<?php
$objet=new PDO('mysql:host=localhost;dbname=contact','administrateur','sawnes');
$i=$objet-> prepare("INSERT INTO contact(nomETprenom,email,texte) VALUES(:nomETprenom,:email,:texte)"); 
if(isset($_GET["nom"])){               
    $i->bindValue(':nomETprenom',$_POST['nom'],PDO::PARAM_STR);}
    if(isset($_GET["email"])){
    $i->bindValue(':email',$_POST['email'],PDO::PARAM_STR);}
    if(isset($_GET["message"])){  
    $i->bindValue(':texte',$_POST['message'],PDO::PARAM_STR);}  
    $insert=$i-> execute(array(
        ':nomETprenom'=>$_POST['nom'],
        ':email'=>$_POST['email'],
        ':texte'=>$_POST['message']
    ));
    if($insert){
        $message='contact ajouté';
    }
    else{
        $message='contact non ajouté';
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