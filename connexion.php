<?php session_start();?>
<!DOCTYPE html>
<html>

	<head>
		<title>VINEUP/Connexion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/connexion.css">
		

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
<link rel="stylesheet" href="css/acceuil.css">
<link href="inc/css/header.css" rel="stylesheet">
    <link href="inc/css/vine_up.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title> VINE UP </title>
	</head>

	<?php include_once("inc/header/header.php") ?>
	
	<body>
		
		
		<div id="container">
		
		<h1>Connexion</h1>
		<p>
			
			<?php include_once ('inc/co_ins/controleur_formulaire_connexion.php');?>
			<a href="inscription.php"> <input  type="submit" id='submit' value="vous n'avez pas de compte?" ></a>
		</p>

	</div>

	<?php include_once("footer.php") ?>
	 <script src="inc/js/app.js" charset="utf-8"></script>
	</body>

</html>