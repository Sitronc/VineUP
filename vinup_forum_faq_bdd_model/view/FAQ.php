<?php session_start();?>
    <!DOCTYPE html>
<html>

	<head>
		<title>VINEUP/faq</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/barre.css">
		<link rel="stylesheet" type="text/css" href="css/vin_blanc.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="inc/css/header.css" rel="stylesheet">
  <link href="inc/css/vine_up.css" rel="stylesheet">
  <link rel="stylesheet" href="inc/css/FAQ.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title> VINE UP </title>
	</head>
  <?php include_once("header/header.php") ?>
<body>

  

	
		
  <div class = "fond">
    <li class="menu-deroulant">
      <a class="ok" href="">Comment nous contacter?</a>
      <ul class="sous-menu_faq">
        <li>
          <p>Vous pouvez nous contacter par mail, pour tout problème,nous essayons de répondrent le plus rapidement possible.</p>
        </li>
      </ul>
    </li>
</div>

<div class = "fond">
    <li class="menu-deroulant">
      <a class="ok" href="">Comment Créer un compte vigneron? </a>
      <ul class="sous-menu_faq">
        <li>
          <p>Pour créer un compte vigneron il faut obgligatoirement nous envoyer un mail, pour que l'on vous envoie le formulaire d'inscription.</p>
        </li>
      </ul>
    </li>
</div>

<div class = "fond">
    <li class="menu-deroulant">
      <a class="ok" href="">Autres questions pertinantes? </a>
      <ul class="sous-menu_faq">
        <li>
          <p>contacter-nous sur le forum du site.</p>
        </li>
      </ul>
    </li>
</div>

<script type='text/javascript' language='javascript'>
var laBoite = document.querySelector('.page_deroulante');
laBoite.addEventListener('click', function() {

laBoite.classList.toggle('apparition');
laBoite.classList.toggle('.page_deroulante > a.menu:after');

});
</script>	
	
	</body>

</html>