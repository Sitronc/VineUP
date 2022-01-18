<?php

// connection à la base de donnée

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=vineup', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur :'.$e->getMessage());
        }
?>