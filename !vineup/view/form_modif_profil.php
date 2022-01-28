<?php 
include_once('../model/model.php');
session_start();
$Id= session_id();
$Donnees = afficher_profil($Id);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/acceuil.css">
	<link href="inc/css/header.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="inc/css/inscription.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profil</title>
</head>
<body id="container">
	<form action="../controller/demande_modification.php" method="post">
	<p>
		<h1>Modification</h1>
		NOM:
		<input type="text" placeholder="Entrer votre nom" name="nom" value='<?php echo $Donnees['Nom']; ?>'>
		<br>
		<br>

		PRENOM:
		<input type="text" placeholder="Entrer votre prénom" value='<?php echo $Donnees['Prenom']; ?>' name="prenom" >
		<br>
		<br>
		
		DATE DE NAISSANCE:
		<input type="date" placeholder="Entrer votre prénom" value='<?php echo $Donnees['Naissance']; ?>' name="date_naissance">
		<br>
		<br>

		NUMERO DE TELEPHONE:
		<input type="tel" value='<?php echo $Donnees['Tel']; ?>' name="tel">
		<br>	
		<br>

		ADRESSE MAIL:
		<input type="text" placeholder="Entrer votre adresse mail" value='<?php echo $Donnees['Mail']; ?>' name="mail">
		<br>
		<br>

		ADRESSE:
		<input type="text" placeholder="Entrer votre adresse" value='<?php echo $Donnees['Adresse']; ?>' name="adresse">
		<br>
		<br>

		MOT DE PASSE :
		<input type="password" placeholder="Entrer votre mot de passe" name="pass">	
		<br>
		<br>

		CONFIRMER MOT DE PASSE :
		<input type="password" placeholder="Confirmer votre mot de passe" name="pass2">	
		<br>
		<br>

		<input type="submit" id='submit' value='Modifier votre compte'>
		<br>
		<br>

	</p>
</form>
</body>
</html>