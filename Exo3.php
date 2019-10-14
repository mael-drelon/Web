<html>
    <head>
    <title>Exo 3 PHP</title>
    </head>
<body>
    <table border=1>
    <tr>
    <?php
        $tableau = array("Nom","Prenom","MDP","date de naissance");

        for ($i=0; $i<4; $i++) {
     ?>
    <td> <?php echo $tableau[$i]; ?></td>
    <?php
    }    
    ?>
    </tr>
    <tr>
    <?php
        $tableau = array("Crepin","Tom","mdplel","11/08/01");

        for ($i=0; $i<4; $i++) {
     ?>
    <td> <?php echo $tableau[$i]; ?></td>
    <?php
    }    
    ?>
    </tr>
    <tr>
    <?php
        $tableau = array("Crepin2","Tom2","steak","11/08/01");

        for ($i=0; $i<4; $i++) {
     ?>
    <td> <?php echo $tableau[$i]; ?></td>
    <?php
    }    
    ?>
    </tr>
    <tr>
    <?php
        $tableau = array("Crepin3","Tom3","bleh","12/12/12");

        for ($i=0; $i<4; $i++) {
     ?>
    <td> <?php echo $tableau[$i]; ?></td>
    <?php
    }    
    ?>
    </tr>
    </table>

    <p><a href=index.php>Retour</a></p>
</body>
</html>