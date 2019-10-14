<html>
<head>
<title>Entrainement PHP</title>
<link rel=stylesheet type=text/css media=screen href=styles.css>
</head>
   <body>
      <h1>
      <?php echo "Serveur Delattre Drelon"; ?>
      </h1>
      <h2> 
         test 1
      </h2>
<div>
<?php
     $maVariableDeTest="je suis un exemple";
     ?><div class="bleu"><?php echo $maVariableDeTest;?>
     </div>
</div>
<h2>Test Formulaire</h2>
<?php
//Test de la variable GET LeChiffre
if (isset($_GET["LeChiffre"]) && !empty($_GET["LeChiffre"])){
   echo "Ma valeur est :" .$_GET["LeChiffre"];
}else{
   echo "Formulaire non saisie";
   ?>
   <form action="Index.php" method="GET">
     <label>Votre chiffre</label>
     <!-- Zone de texte -->
     <input type="text" name="LeChiffre"/>
     <!-- bouton de validitation -->
     <input type="submit" name="Validerr" value="Clique pour valider" />
</form>
<?php
}
?>
<p><a href=DossierPHP.php>Retour</a></p>
</body>
</html>