<?php
    function connexion($mail,$password)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $reponse = $bdd->query('SELECT * FROM utilisateur WHERE mail="'.$mail.'" AND password="'.$password.'"');

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
        $reponse = $bdd->query('SELECT * FROM utilisateur WHERE mail="'.$mail.'" ');
        {
            while ($donnees = $reponse->fetch())
            {
               return 1;
            }
            $reponse->closeCursor();
        }
    }

    function inscription($nom, $prenom, $pass, $mail, $type, $adresse, $tel, $naissance)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette

        
        if($bdd)
        {
            $reponse = "INSERT INTO utilisateur VALUES (NULL,'".$nom."', '".$prenom."', '".$pass."', '".$mail."', '".$type."', '".$adresse."', '".$tel."', '".$naissance."', NULL)";    
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
        $reponse = $bdd->query('SELECT * FROM utilisateur WHERE mail="'.$mail.'" AND password="'.$pass.'"');

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

    function afficher_profil()
    {
        require("connect_bd.php");
            try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM utilisateur'
                    );
                    $query->execute();
                    $userinfo = $query->fetchall();
                    return $userinfo;
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
?>