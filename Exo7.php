<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 7 PHP</title>
    <h2>Exercice 7</h2>
</head>
<body>
  
<?php session_start() ; ?>
<form action="Exo7.php" method="POST">
    <p>Votre nom : <input type="text" name="zone" /></p>

    <p><input type="submit" value="OK"></p>
</form>
<?php
    if (isset ($_POST["zone"])) {
        $_SESSION["MonIndiceSession"] = $_POST["zone"] ;
        echo "La session de ".$_POST["zone"]." est actif";   
    }
    ?>
     <p><a href=DossierPHP.php>Retour</a></p>