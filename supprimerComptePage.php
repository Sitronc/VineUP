<?php
     $button =
    include'../model/supprimerCompte.php';
    if ($button == true){
      supprimerCompte();}
    //$bd = new PDO('mysql:host=localhost;dbname=vine_up;charset=utf8','root','')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="inc/css/header.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vine Up</title>
</head>
<body>
<nav class = "menu" >
        <div class="inner">
            <div class="m-left">
                <a href="../index.php"><img class="logo" src="inc/image/logo.png" alt="logo" title="logo"></a>
            </div>
            <div class ="m-right">
            
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-home"></i>  Qui sommes nous? </a>
</div>


                        
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> Nos technologies </a>
                </div>
                <div class ="test">
                <!-- test menu déroulant-->
                
                    <li class="menu-deroulant">
                        <a class="m-link"> <i class="fas fa-tractor"></i> Vignoble</a>
                        <ul class="sous-menu">
                            <li>
                                <a href="#"> vin blanc</a>
                            </li>
                            <li>
                                <a href="#"> bordeaux</a>
                            </li>
                        </ul>
                    </li>
                
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> Producteurs partenaires </a>
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> Données </a>
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> QR Code </a>
                </div>
                <div class ="test">

                <a href="../model/co_ins/deconnection.php" class="m-link"> <i class="fas fa-tractor"></i> conneté </a>
                </div>

            </div>
        </div>
        <div class="m-nav-toggle">
            <span class ="m-toggle-icons"></span>    
        </div>
   
    </nav>

    <input type="button" value="supprimer compte" name="Validation" onclick="supprimerCompte();">
</body>
</html>