<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Géneration de la facture</title>
</head>
<body>
<br><br><br><br><br><br><br><br>
<form action="facture.php" method="POST">
    <div align="center" style="color:#424949;"><?php echo "Veuillez générer votre facture pour le paiment,des données vous seront transmis vous n'avez qu'a remplire les champs et imprimer votre facture. "; ?></div> <br>
    <div align="center" style="color:#424949;"><?php echo "AirTravel vous remercie de votre fidélité. "; ?></div> <br>
    <div align="center" style="color:#424949;"><p>Veuillez saisir votre email:</p>
    <input type="email" name="email" placeholde="exemple@gmail.com" style="border-color:#F39C12;"></div>
    <br><br>

    <div align="center">  <input type="submit" name="generer" value="Génerer" style="background-color:#F39C12; color:#424949;border-color:#F39C12;cursor:pointer;border-radius:12px;"></div>
</form>

</body>
</html>