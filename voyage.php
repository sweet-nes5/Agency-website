<?php 
define('HOST', 'localhost');
define('DB_NAME', 'client');
define('USER', 'administrateur');
define('PASS', 'sawnes');
session_start();

$file="";
if (!$_SESSION['mdp']) {
   header('Location: admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="res.css">
    <link rel="shortcut icon" href="images/icon.png">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Publication d'articles</title>
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
    <img src="images/LON.jpg" height="520" width="327">
    <?php
      
        if ( isset($_POST['publier'])) {
           
             $destination=$_POST['destination'];
             $prix=$_POST['prix'];
                
                $bdd=mysqli_connect('localhost','administrateur','sawnes','client');
                $sql="INSERT INTO articles(destination,prix) VALUES('$destination','$prix')";
                mysqli_query($bdd,$sql);
               
        
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
        
      <a href="resarvation.php"><button type = "button" class = "btn">RESERVER</button></a>  
       
      </div>
    </div>
  </div>
<script>
    $(document).ready(function(){
      $('#insert').click(function(){
          var image_name=$('#file'),val();
          var extension=$('"file').val().split('.').pop().tolowercase();

      });

    });
</script>
  
        
       
</body>
</html>
