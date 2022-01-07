<?php
    function connexion($mail,$password)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE mail="'.$mail.'" AND password="'.$password.'"');

        while ($donnees = $reponse->fetch())
            {
                $_SESSION["mail"] = $donnees["mail"];
                  return 1;
            }
            $reponse->closeCursor();
    }


    function mailinco($mail)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE mail="'.$mail.'" ');
        {
            while ($donnees = $reponse->fetch())
            {
               return 1;
            }
            $reponse->closeCursor();
        }
    }

    function inscription($nom,$prenom,$date,$mail,$pass,$type)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette

        $reponse = "INSERT INTO utilisateurs VALUES (NULL,'".$mail."','".$pass."','".$type."')";    
        $bdd->exec($reponse);
        if($bdd)
        {
            $reponse = "INSERT INTO clients VALUES (NULL,'".$nom."','".$prenom."','".$mail."','".$pass."','1','0')";    
            $bdd->exec($reponse);
            if($bdd)
            {
                return 1;
        }
        }



    }

    function veri_etat($mail,$pass)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE mail="'.$mail.'" AND password="'.$pass.'"');

        while ($donnees = $reponse->fetch())
            {
                if ($donnees['type'] == 'clients')
                {
                    return 1;
                }

                elseif ($donnees['type'] == 'admin')
                {
                    return 2;
                }

                elseif ($donnees['type'] == 'vigneron')
                {
                    return 3;
                }

                else
                {
                    return 0;
                }
            }
            $reponse->closeCursor();

    }
?>