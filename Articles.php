<?php 
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=client','administrateur','sawnes');
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}

$destination=$_POST['destination'];
$prix=$_POST['prix'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res.css">
    <title>Affichage des articles</title>
</head>
<body>
<section class="top">
        <header class="header">
                        <a class="navbar-brand" href="#">Air Travel</a>
                            <nav class="nav">
                                
                                    <li><a href="index.html">Accueil</a></li>
                                    <li><a href="res.html">Voyages Organisés</a></li>
                                    <li><a href="vols.html">Vols</a></li>
                            </nav>    
        </header>
            
      </section>
 <div class="wrapper">
    <div class="product-img">
      <?php
      
        if (isset($_FILES['fichier'])) {
             $file=$_FILES['fichier'];
             $fileName=$_FILES['fichier']['name'];
             $fileTmp_name=$_FILES['fichier']['tmp_name'];
             $fileError=$_FILES['fichier']['error'];
             $fileType=$_FILES['fichier']['type'];
             $fileEXT=explode('.',$fileName);
             $extension=strtolower(end($fileEXT));
             $allowed=array('jpg','jpeg','png','pdf');
             if (in_array($extension,$allowed)) {
                if ($fileError===0) {
                    echo "une erreur est survenue!";
                }
                $fileDestination='images/'.$fileName;
                move_uploaded_file($fileTmp_name,$fileDestination); 
                //print_r(move_uploaded_file($fileTmp_name,$fileDestination));
             }else{ echo "veuillez utiliser une image d'une extension {jpg,jpeg,png,pdf}";}
        }
    
    
       ?>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?php echo $destination; ?></h1>
        <h2>VOYAGE ORGANISE</h2>
        <ul>
            <li>Hotel 4*-5*</li>
            <li>Billet d'avion air algerie</li>
            <li>Hebergement en PDG</li>
            <li> Croisieres et manage</li>
            <li>Visites guidees</li>
          </ul>
      </div>
      <div class="product-price">
        <p>Prix: <span><?php echo $prix; ?></span></p>
        
      <a href="resarvation.html"><button type = "button" class = "btn">RESERVER</button></a>  
       
      </div>
    </div>
  </div>

  
       
</body>
</html>