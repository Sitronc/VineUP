<?php

    if (isset($_POST)) 
    {
        $_SESSION['etat'] = 0;
        if (!isset($_SESSION["error"]))
        {
            $_SESSION["error"] = 0;
        }
        
        include_once ("formulaire_connexion.php") ;
        
    }
?>
