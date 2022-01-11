<?php
    if (isset($_POST)) 
    {
        include_once('../model/model.php');
        if ($_POST["pass"] == $_POST["pass2"] AND mailinco($_POST["mail"]) == 0)
        {
            //sercuritation du mdp 
            //$_POST["pass"] = secur($_POST["pass"]);

            //inster into puis connection
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $pass = $_POST["pass"];
            $mail = $_POST["mail"];
            $type = 'clients';
            $adresse = $_POST['adresse'];
            $tel = $_POST["tel"];
            $naissance = $_POST["date_naissance"];

            //inscription($nom, $prenom,$date_naissance, $mail,$pass,$type);
            if (inscription($nom, $prenom, $pass, $mail, $type, $adresse, $tel, $naissance))
            {
                $_SESSION["etat"] = 1;
                header('Location: ../index.php'); 
            }
        }

        else
        {
            //afficher cet eamil est déja utilisé
            echo 'utiliser';
        }
    }

?>