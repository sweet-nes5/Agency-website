<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resarvation-Agence AirTravel</title>
    <link rel="stylesheet" href="reservation.css">
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <section class="top">
            <header class="header">
                            <a class="navbar-brand" href="#"><h2> AirTravel</h2></a>
                                <nav class="nav">
                                    
                                        <li><a href="index.html">Accueil</a></li>
                                        <li><a href="res.html">Voyages Organisés</a></li>
                                        <li><a href="vols.html">Vols</a></li>
                                </nav>    
            </header>
                
          </section>
           
        <div class="container">
            <form class="form-group"  method="post" action="configreservation.php">
               
                <h1 class="text-center"></h1>

                
                <div id="form">
                    <h3 class="text-white">Reservation</h3>

                    
                    <div id="input"><!--input-->
                       
                        <input type="text" id="input-group" placeholder="Destination" name="destination" required>
                        
                      
                        </div><!--input-->
                        <div id="input2"><!--input2-->
                            <input type="number" id="input-group" placeholder="Adulte" name="adultes"required>
                            <input type="number" id="input-group" placeholder="Enfants" name="enfants">
                            
                        </div><!--input2-->



                        <div id="input4"><!--input4-->
                            <input type="text" id="input-group1" placeholder="Age d'enfants" name=ageEnfants required>
                            <input type="email" id="input-group" placeholder="exemple:airtravel@gmail.com" name="email" required>
                        </div><!--input4-->
        
                        <button type="submit" class="btn btn-warning text-black" name="reserver" >Reserver</button>
                      <a href="index.php"> <button type="reset" class="btn btn-warning text-black">Annuler</button></a> 


                </div>
            
                
                

            </form>
<?php  include 'datareservation.php';
                   global $dd;?>

    </body>

</html>