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
    <link rel="stylesheet" href="res.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un article</title>
</head>
<body>
<section class="top">
        <header class="header">
                        <a class="navbar-brand" href="#">AirTravel</a>
                            <nav class="nav">
                                
                                    <li><a href="index.html">Accueil</a></li>
                                    <li><a href="res.html">Voyages Organisés</a></li>
                                    <li><a href="vols.html">Vols</a></li>
                            </nav>    
        </header>
            
      </section>
      <form method="POST" action="voyage.php" ecrypte="multipart/form-data">
 <div class="wrapper">
    <div class="product-img">
    <img src="images/LON.jpg" height="520" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
          
        <input type="text" name="destination" placeholer="Maroc">
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
        <p>Prix: <input type="text" name="prix"></p>
        
      <button type = "button" class = "btn" >Réserver</button> 
       
      </div>
    </div>
  </div>

<div align="center">  <input type="submit"name ="publier" value="Publier" style="background-color:#F39C12; color:#424949;border-color:#F39C12;cursor:pointer;border-radius:12px;"></div>
   
</form>  
       
</body>
</html>