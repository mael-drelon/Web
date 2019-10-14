<head>
<title>Exo 2.2 PHP</title>
</head>
<table border="1">
<tr>
<body>
<h2>Exercice 2.2</h2>
    <br>
    <?php
    $tableau = array("Nom","Prenom","MDP");
    for ($i=0; $i<3; $i++) {
        ?>
       <td> <?php echo $tableau[$i]; ?></td>
       <?php
   }    
   ?>
   </tr>
   <tr>
   <?php
       $tableau = array("Drelon","Mael","ABCLol");

       for ($i=0; $i<3; $i++) {
    ?>
   <td> <?php echo $tableau[$i]; ?></td>
   <?php
   }    
   ?>
   </tr>
   </table>
   <xmp><h2>Exercice 2.2</h2>
    <br>
    <?php
    $tableau = array("Nom","Prenom","MDP");
    for ($i=0; $i<3; $i++) {
        ?>
       <td> <?php echo $tableau[$i]; ?></td>
       <?php
   }    
   ?>
   </tr>
   <tr>
   <?php
       $tableau = array("Drelon","Mael","ABCLol");

       for ($i=0; $i<3; $i++) {
    ?>
   <td> <?php echo $tableau[$i]; ?></td>
   <?php
   }    
   ?>
   </tr>
   </table>
</xmp>
   <p><a href=DossierPHP.php>Retour</a></p>
   </body>