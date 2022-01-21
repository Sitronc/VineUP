<?php
    if (isset($_POST)) 
    {
        include_once('../model/model.php');
        if ($_POST["pass"] == $_POST["pass2"] )
        {
            //sercuritation du mdp 
            //$_POST["pass"] = secur($_POST["pass"]);

            //inster into puis connection
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $naissance = $_POST["date_naissance"];
                $mail = $_POST["mail"];
                $pass = $_POST["pass"];
                $adresse = $_POST["adresse"];
                $tel = $_POST["tel"];
                $type = 'clients';
                $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                
                

             if(empty($_POST['date_naissance']) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || strlen($_POST["pass"])<2 || empty($_POST["adresse"]) || empty($_POST["tel"]) )
                    {

                        header('Location: ../view/inscription.php');                                           
                                       
                    
                    
                    }
                else {
                    
                        if (inscription($nom, $prenom, $pass, $pass_hash, $mail, $type, $adresse, $tel, $naissance))
                        {
                            $_SESSION['etat'] = 1;
                            header('Location: ../index.php'); 
                        }
                    
        }
    }
    
}
?>
