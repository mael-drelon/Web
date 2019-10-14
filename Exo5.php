<head>
<title>Exo 5 PHP</title>    
<link rel=stylesheet type=text/css media=screen href=styles.css>
</head>
<body>
<?php
//Test de la variable GET LeChiffre
if (isset($_GET["LeMot"]) && !empty($_GET["LeMot"])){
   echo "Mon mot est :" .$_GET["LeMot"];
}else{
   echo "Mot non saisie";
   ?>
   <form action="Exo5.php" method="GET">
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