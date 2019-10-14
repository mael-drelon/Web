<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercice Final</title>
  <h2>Exercice Final</h2>
</head>
<body>
  
</body>
</html>
<?php
  
  define('LOGIN','Mimos');  
  define('PASSWORD','1234'); 
  $message = 'Bienvenue dans ma page';    
  if(!empty($_POST))
  {  
    echo "empty post";
    if(empty($_POST['login']))
    {

      echo "empty post login";
      $message = 'Indiquer votre login';
    }
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Indiquer votre mot de passe';
    }   
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Login faux ';
    }  
      elseif($_POST['motDePasse'] !== PASSWORD)
    {
      $message = 'Mot de passe faux';
    }
      else
    {    
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>

    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Identifiant</legend>
          <p>
            <label for="login">Login :</label> 
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>
          <p>
            <label for="password">Mot de passe :</label> 
            <input type="password" name="motDePasse" id="password" value="" /> 
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
    <p><a href=index.php>Retour</a></p>
  </body>
</html>