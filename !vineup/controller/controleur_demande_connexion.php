<?php
    session_start();
    $_SESSION["etat"] = 0;
    if (isset($_POST)) 
    {
        include("../model/model.php");
        $mail = $_POST['mail'];
        $pass=  $_POST['password'];
        if(connexion($_POST['mail'], $_POST['password']))
        {
            
            //faire une fonction de vérification du type(etat)
            $_SESSION["etat"] = 1; //veri_etat($mail, $pass);
            //$_SESSION["etat"] = 1;
            //echo $_SESSION["etat"];
            header('Location: ../index.php'); 
        }          

        else{
            $_SESSION["error"] = 1;
            header('Location: ../connexion.php'); 
        }
    }

?>
