<!DOCTYPE html>
<?php
session_start() 
?>
<html>

	<head>
		<title>VINEUP/Inscription</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="inc/css/connexion.css">
		

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
	<link rel="stylesheet" href="css/acceuil.css">
	<link href="inc/css/header.css" rel="stylesheet">
    <link href="inc/css/vine_up.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> VINE UP </title>
	</head>
	
	<header>
    <?php include_once("header/header.php") ?>
	</header>
	
	<body>

		
		
		<div id="container">
		
		
		<?php 
		echo $_SESSION['Type'];
		include_once ('../controller/controleur_formulaire_inscription.php');?>

	</div>

	<footer>
		
		<script src="inc/js/app.js" charset="utf-8"></script>
	</footer>
	
	</body>

</html>