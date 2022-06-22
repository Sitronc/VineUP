<?php
    function connexion($mail,$password)
    {
        // connection à la base de donnée
        include("connect_bd.php");

        //requette
        $requser = $bdd-> prepare('SELECT * FROM utilisateur WHERE Mail = "'.$mail.'" AND MDP = "'.$password.'"');
        $requser->execute();
        $userinfo = $requser->fetch();
        return $userinfo;

        return $requser;
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

    function inscription($nom, $prenom, $pass, $mail, $type, $adresse, $tel, $naissance, $NomDomaine)
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
                        'TypeUser' => $type,
                        'Adresse' => $adresse,
                        'Tel' => $tel,
                        'NomDomaine' => $NomDomaine
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
            } 
            catch (PDOException $e) 
            {
                $e->getMessage();
            }
    }
    function modif_profil($Nom, $Prenom, $Naissance, $MDP, $Mail, $Type, $Adresse, $Tel, $NomDomaine,  $IdUtilisateur)
    {
        require("connect_bd.php");
        try 
            {
                $query = $bdd->prepare
                (
                    'UPDATE utilisateur SET IdUtilisateur = "'.$IdUtilisateur.'", 
                                            Nom = "'.$Nom.'", 
                                            Prenom = "'.$Prenom.'", 
                                            Naissance = "'.$Naissance.'", 
                                            MDP = "'.$MDP.'", 
                                            Mail = "'.$Mail.'", 
                                            TypeUser = "'.$Type.'", 
                                            Adresse = "'.$Adresse.'", 
                                            Tel = "'.$Tel.'", 
                                            NomDomaine = "'.$NomDomaine.'"  
                                        WHERE IdUtilisateur = "'.$IdUtilisateur.'"'
                );
                $query->execute();
                return $query;      
            } 
                catch (PDOException $e) 
                    {
                        $e->getMessage();
                    }
    }
    function supprimer_compte($IdUtilisateur)
    {
        try 
            {
                require("connect_bd.php");
                $query = $bdd->prepare('DELETE FROM utilisateur WHERE IdUtilisateur = "'.$IdUtilisateur.'"');
                $query->execute();
            } 
            catch (PDOException $e) 
            {
                $e->getMessage();
            }
    }
    function recup_donnees($i)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G6-E");
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        $data_tab = str_split($data,33);
        //echo "Tabular Data:<br />";
        /*for($i=0, $size=count($data_tab); $i<$size; $i++)
        {*/
            //echo "Trame $i: $data_tab[$i]<br />";
            $trame = $data_tab[1];
            $t= substr($trame,0,1);
            $o= substr($trame,1,4);
            list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
            $v = hexdec($v);
            echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
        //}
    }

    function conversion_hex($chaine)
    {
        $valeurDecimal = hexdec($chaine);
        return valeurDecimal;
    }

?>