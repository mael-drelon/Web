<head>
<title>Exo 2.1 PHP</title>
</head>
<table border="1">
 <tr>
<body>
<h2>Exercice 2.1 A</h2>
<?php
    $MonTableauDeChiffre = array(14,21,37,45,95);
    for ($i=0; $i < 5; $i++) { 
    ?><td><?php echo $MonTableauDeChiffre[$i]; ?></td>
<?php    
}

?>
</tr>
</table>
<h2>Exercice 2.1 B</h2>
<br>
<?php
    $MonTableauDeChiffre = array("Nombre1"=>12,"Nombre2"=>21,"Nombre3"=>37,"Nombre4"=>45,"Nombre5"=>95);

    foreach ($MonTableauDeChiffre as $key => $value) {
        echo "Clé ".$key." valeur :".$value ."\n";
    }
    ?>
    <xmp>
   <h2>Exercice 2.1 B</h2>
<br>
<?php
    $MonTableauDeChiffre = array("Nombre1"=>12,"Nombre2"=>21,"Nombre3"=>37,"Nombre4"=>45,"Nombre5"=>95);

    foreach ($MonTableauDeChiffre as $key => $value) {
        echo "Clé ".$key." valeur :".$value ."\n";
    }
    ?>
    </xmp>
    <p><a href=DossierPHP.php>Retour</a></p>
</body>