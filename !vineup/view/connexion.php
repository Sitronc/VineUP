<?php session_start();?>
<!DOCTYPE html>
<html>

	<head>
		<title> VINE UP </title>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="inc/css/header.css" rel="stylesheet">
    	<link href="inc/css/vine_up.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="inc/css/connexion.css">

   		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="inc/js/app.js" charset="utf-8"></script>
	</head>

	<header>
		<?php include_once("header/header.php") ?>
	</header>

	<body>
		<div id="container">
			<h1>Connexion</h1>
			<p>
				<?php include_once ('../controller/controleur_formulaire_connexion.php');?>
				<a href="inscription.php"> <input  type="submit" id='submit' value="vous n'avez pas de compte?" ></a>
			</p>
		</div>
		<?php include_once("header/footer.php")?>
	</body>
</html>