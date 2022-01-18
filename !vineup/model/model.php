<?php
    function connexion($mail,$password)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $requser = $bdd-> prepare("SELECT * FROM artiste WHERE Mail = ? AND MDP = ?");
        $requser->execute(array($mail, $password));
        return $requser;

        /*while ($donnees = $reponse->fetch())
            {
                $_SESSION["mail"] = $donnees["mail"];
                  return 1;
            }
            $reponse->closeCursor();*/
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

    function inscription($nom, $prenom, $pass, $mail, $type, $adresse, $tel, $naissance)//8
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette

        
        if($bdd)
        {
                    $query = $bdd->prepare
                    ('INSERT INTO utilisateur (IdUtilisateur, Nom, Prenom, Naissance, MDP, Mail, TypeUser, Adresse, Tel, NomDomaine) 
                    VALUES (:IdUtilisateur, :Nom, :Prenom, :Naissance, :MDP, :Mail, :TypeUser, :Adresse, :Tel, :NomDomaine)');
                    $query->execute
                    ([
                        'IdUtilisateur' => NULL,
                        'Nom' => $nom,
                        'Prenom' => $prenom,
                        'Naissance' => $naissance,
                        'MDP' => $pass,
                        'Mail' => $mail,
                        'TypeUser' => 'client',
                        'Adresse' => $adresse,
                        'Tel' => $tel,
                        'NomDomaine' => NULL
                    ]);
            // $reponse = "INSERT INTO utilisateur VALUES (NULL,'".$nom."', '".$prenom."', '".$pass."', '".$mail."', '".$type."', '".$adresse."', '".$tel."', '".$naissance."', NULL)";    
            // $bdd->execute($reponse);
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

    function afficher_profil($IdUtilisateur)
    {
        require("connect_bd.php");
            try {
                    $query = $bdd->prepare(
                        'SELECT * FROM utilisateur WHERE IdUtilisateur = "'.$IdUtilisateur.'"'
                    );
                    $query->execute();
                    $userinfo = $query->fetch();
                    return $userinfo;
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
?>