<?php 
include_once('../model/model.php');
if(isset($_POST['valider']))
{
	if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){

		$pseudo = $_POST['pseudo'];
		$message = $_POST['message'];

		
		forum($pseudo, $message);
		header('Location: ../view/forum.php'); 	}
	else{
		echo "comppléter tout les champs";
	}}

 ?>



 