
<!DOCTYPE html>
<html>
<head>
  <title>Connexion&Inscription</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="inscription.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
  <form >
    <div class="form sign-in">
      <h2>Se connecter à Air Travel</h2>
      <label>
        <span>Adresse email</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Mot de passe</span>
        <input type="password" name="password">
      </label>
      <button href="#" class="submit" type="submit" name="connecter">Connecter </button>

      <p class="forgot-pass">Mot de Passe oublie ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>
</form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Nouveau ici?</h2>
          <p>inscrivez vous et prendre un rendez vous avec votre pays de rêve</p>
        </div>
        <div class="img-text m-in">
          <h2>Un de nous?</h2>
          <p>Si vous avez déjà un compte, connectez-vous. Vous nous avez manqué!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Inscription</span>
          <span class="m-in">Connexion</span>
        </div>
      </div>
      <form action="configclients.php" method="post">
      <div class="form sign-up">
        <h2>S’inscrire à Air Travel </h2>
        <label>
          <span>Nom&Prenom</span>
          <input type="text" name="nomETprenom">
        </label>
        <label>
          <span>Date de naissance</span>
          <input type="date" name="dateDeNaissance">
        </label>
        <label>
          <span>Adresse email</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>numero de telephone </span>
          <input type="text" name="numtelephone">
        </label>
        <label>
          <span>mot de passe</span>
          <input type="password" name="pass">
        </label>
        <label>
          <span>Confirmer votre mot de passe</span>
          <input class="confirmerPassword" type="password">
        </label></form> 
         <button type="reset"  class="action-button">Annuler</button >
       <button type="submit"  name="inscription" class="action-button">Inscription </button >
        <?php
                   include 'database.php';
                   global $db;
                   
              ?>
              
      </div>
    </div>
  </div>
  
<script type="text/javascript" >
  document.querySelector('.img-btn').addEventListener('click', function()
  {
    document.querySelector('.cont').classList.toggle('s-signup')
  }
);
document.querySelector('.button').onclick= function(){
  var password = doccument.querySelector('.password').value;
  if(password == ''){
    alert("le champ ne peut pas être vide.")

  }
  else if(password != confirmPassword){
    alert("le mot de passe ne correspond pas réessayez.")
    return false
  }
  else if(password==confirmPassword){
    alert("correspondance de mot de passe .")
    return true 
  }
}

</script>





    
</body>
</html>