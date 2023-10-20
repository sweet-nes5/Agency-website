<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication d'articles</title>
</head>
<body>
    
</body>
</html>