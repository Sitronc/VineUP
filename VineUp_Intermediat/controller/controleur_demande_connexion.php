<?php
    include("../model/model.php");
    $mail = $_POST['mail'];
    $pass=  $_POST['password'];
    $Connexion = connexion($mail, $pass);
    session_id($id = $Connexion['IdUtilisateur']);
    echo session_id();
    session_start();
    $_SESSION["etat"] = 0;
    if (isset($_POST)) 
    {
        //if($mail, $pass)
        {
            
            //faire une fonction de vérification du type(etat)
            $_SESSION["etat"] = 1; //veri_etat($mail, $pass);
            //$_SESSION["etat"] = 1;
            //echo $_SESSION["etat"];
            header('Location: ../view/profile.php'); 
        }          

        //else
        /*{
            $_SESSION["error"] = 1;
            header('Location: ../view/connexion.php'); 
        }*/
    }

?>
