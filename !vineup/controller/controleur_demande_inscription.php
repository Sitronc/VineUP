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
                $date_naissance = $_POST["date_naissance"];
                $mail = $_POST["mail"];
                $pass = $_POST["pass"];
                $type = 'clients';
              

               if(empty($_POST['date_naissance']) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || strlen($_POST["pass"])<2 )
                    {

                        //inscription($nom, $prenom,$date_naissance, $mail,$pass,$type);
                        $_SESSION["probleme"] = 1;
                        echo"<script > <!--- alert('ton alerte'); ---> </script>"; 
                        header('Location: ../view/inscription.php');                                           
                                       
                    }
                    
            
                if (inscription($nom, $prenom,$date_naissance, $mail,$pass,$type))
                    {
                             $_SESSION["etat"] = 1;
                            header('Location: ../index.php'); 
                    }
        }
    }

?>
