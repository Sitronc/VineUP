<?php

// connection à la base de donnée
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=vine_up', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur :'.$e->getMessage());
        }
?>