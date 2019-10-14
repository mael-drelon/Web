<head>
<title>Exo 6 PHP</title>    
<link rel=stylesheet type=text/css media=screen href=styles.css>
</head>
<body>
<?php
//Test de la variable POST LeChiffre
if (isset($_POST["LeMot"]) && !empty($_POST["LeMot"])){
   echo "Mon mot est :" .$_POST["LeMot"];
}else{
   echo "Mot non saisie";
   ?>
   <form action="Exo6.php" method="POST">
     <label>Votre mot</label>
     <!-- Zone de texte -->
     <input type="text" name="LeMot"/>
     <!-- bouton de validitation -->
     <input type="submit" name="Valider" value="Clique pour valider" />
</form>
<?php
}
?>
<p><a href=index.php>Retour</a></p>
</body>