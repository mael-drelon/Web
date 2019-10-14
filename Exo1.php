<head>
<title>Exo 1 PHP</title>    
<link rel=stylesheet type=text/css media=screen href=styles.css>
</head>
</head>
<body>
<?php 
            $NombreAleatoire = rand ( 0 , 100 ); 
            

            if ($NombreAleatoire%2 == 1)       
            {
                echo  '<font color="red">'.$NombreAleatoire.'</font>';
                
            }
            else if ($NombreAleatoire)
                {
                echo  '<font color="blue">'.$NombreAleatoire.'</font>';
                }


        ?>
    
</body>