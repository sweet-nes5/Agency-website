<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png">
    <title>Air Travel-Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <script src="https://kit.fontawesome.com/6dc7c304f4.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="contact">
        <div class="content">
            <h1>Contactez Air Travel</h1>
            <p>Air travel, gagnez le coeur du monde!</p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Adress</h3>
                        <p>19 rue Ouali khaled,<br>Mostaganem,ALgerie<br>27000</p>
                    </div>
                 </div>
                 <div class="box">
                     <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                     </div>
                     <div class="text">
                         <h3>Telephone</h3>
                          <p>07765382970</p>
                    </div>
                 </div>
                 <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                         <p>AirTravel.agence@gmail.com</p>
                   </div>
                </div> 




                 
            </div>
            <div class="contactForm">
                <form method="post" action="config.php">

                                    <h2>Envoyer un Message</h2>
                    <div class="inputBox">
                        <p>Entrez votre Nom et prénom :</p>
                        <input type="text"  required="required" placeholder="exemple: Zahmani Karim" name="nom">
                        
                        
                    </div>
                    <div class="inputBox">
                        <p>Entrez votre Email :</p>
                        <input type="email"  required="required" placeholder="exemple: ZahmaniK@gmail.com" name="email">
                        
                    </div>
                    <div class="inputBox">
                        <p>Entrez votre texte :</p>
                        <textarea required="required" name="message"></textarea>
                       
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Envoyer" id="envoie">
                        
                    </div>

                </form>
              <?php
                   include 'datacontact.php';
                   global $dd;
                   
              ?>
              
            </div>

        </div>

    </section>
</body>

</html>