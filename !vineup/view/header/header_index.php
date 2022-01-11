<header>
    <?php 
        if(!isset($_SESSION["etat"]) OR $_SESSION["etat"] == 0)
        {    
            
    ?>
    <nav class = "menu" >
        <div class="inner">
            <div class="m-left">
                <a href="../index.php"><img class="logo" src="../inc/img/logo.png" alt="logo" title="logo"></a>
            </div>

            <div class ="m-right">   

                <div class ="test">
                <a href="view/technologie.php" class="m-link"> <i class="fas fa-tractor"></i> Nos technologies </a>
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
                <a href="view/partenaire.php" class="m-link"> <i class="fas fa-tractor"></i> Producteurs partenaires </a>
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> Données </a>
                </div>
                <div class ="test">
                <a href="#" class="m-link"> <i class="fas fa-tractor"></i> QR Code </a>
                </div>
                <div class ="test">

                <a href="view/connexion.php" class="m-link"> <i class="fas fa-tractor"></i> Connexion </a>

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
            include("header_cli_index.php");
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