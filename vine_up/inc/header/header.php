<header>
    <?php 
        if(!isset($_SESSION["etat"]) OR $_SESSION["etat"] == 0)
        {    
            
    ?>
    <nav class = "menu" >
        <div class="inner">
            <div class="m-left">
                <a href="index.php"><img class="logo" src="inc/image/logo.png" alt="logo" title="logo"></a>
            </div>
            <div class ="m-right">

                <div class ="test">
                <a href="acceuil.php" class="m-link"> <i class="fas fa-home"></i>  Acceuil</a>
</div>
               <div class ="test">
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
                <a href="partenaire.php" class="m-link"> <i class="fas fa-tractor"></i> Producteurs partenaires </a>
                </div>
                
                <div class ="test">
                <a href="quisommesnous.php" class="m-link"> <i class="fas fa-home"></i>  Qui sommes nous? </a>
</div>


                        
                <div class ="test">
                <a href="technologie.php" class="m-link"> <i class="fas fa-tractor"></i> Nos technologies </a>
                </div>
                
                <!-- test menu déroulant-->
                
                    
                
                
                
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> Données </a>
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> QR Code </a>
                </div>
                <div class ="test">

                <a href="connexion.php" class="m-link"> <i class="fas fa-tractor"></i> Connexion </a>

                </div>

            </div>
        </div>
        <div class="m-nav-toggle">
            <span class ="m-toggle-icons"></span>    
        </div>
   
    </nav>

    <?php 
            }
        elseif ($_SESSION["etat"] == 1)
        {
            include("header_cli.php");
        }
        
        elseif ($_SESSION["etat"] == 2)
        {
            include("header_vigneron.php");
        }

        elseif ($_SESSION["etat"] == 3)
        {
            include("header_admin.php");
        }
    ?>
</header>  