<?php 
session_start();
$IdUtilisateur = session_id();
include_once('../model/model.php');
supprimer_compte($IdUtilisateur);
header('Location:../view/connexion.php');
?>