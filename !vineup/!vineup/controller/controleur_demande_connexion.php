<?php
    include("../model/model.php");
    $mail = $_POST['mail'];
    $pass=  $_POST['password'];
    $_SESSION["etat"] = 0;
    echo 'fdsdsfs'.$mail.'fdf';
    if (isset($_POST)) 
    {
        if($mail != null && $pass != null)
        {
            $Connexion = connexion($mail, $pass);
            if ($mail === $Connexion['Mail'] && $pass === $Connexion['MDP']) 
            {
                session_id($id = $Connexion['IdUtilisateur']);
                echo session_id();
                session_start();
                //faire une fonction de vérification du type(etat)
                $_SESSION["etat"] = 1; //veri_etat($mail, $pass);
                $_SESSION["Type"] = $Connexion['TypeUser'];
                //$_SESSION["etat"] = 1;
                //echo $_SESSION["etat"];
                header('Location: ../view/profile.php'); 
                //echo $mail;
            }
            else
                header('Location: ../view/connexion.php');
        }          

        else
        {
            //$_SESSION["error"] = 1;
            echo "mot de passe incomplet";
            header('Location: ../view/connexion.php'); 
        }
    }

?>
