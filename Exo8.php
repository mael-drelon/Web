<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 8 PHP</title>
    <h2>Exercice 8</h2>
</head>
<body>
    
<?php session_start() ; ?>
<form action="Exo8.php" method="POST">
   <p> Votre nom : <input type="text" name="zone"> 
  
<input type="submit" value="OK">
<input type="submit" value="Vider La Session" name="sup">
</form>
<?php
    if (isset ($_POST["zone"])) {
        $_SESSION["MonIndiceSession"] = $_POST["zone"] ;
        echo "Vous avez saisi : ".$_POST["zone"] ;   
    }
    ?>
<?php  if (isset ($_POST["sup"])) {
        $_SESSION["MonIndiceSession"] = $_POST["sup"] ;
        $_POST["sup"] = "La session est vidée";
        echo $_POST["sup"];
}
    ?>
<br>
<p><a href=DossierPHP.php>Retour</a></p>

</body>
</html>