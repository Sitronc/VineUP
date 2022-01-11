<form action="../controller/controleur_demande_inscription.php" method="post">
	<p>
		<h1> inscritpion</h1>
		NOM:
		<input type="text" placeholder="Entrer votre nom" name="nom" >	

		PRENOM:
		<input type="text" placeholder="Entrer votre prénom" name="prenom" >	
		
		DATE DE NAISSANCE:
		<input type="date" placeholder="Entrer votre prénom" name="date_naissance">
		<br>
		<br>

		NUMERO DE TELEPHONE:
		<input type="tel" name="tel">
		<br>	

		ADRESSE MAIL:
		<input type="text" placeholder="Entrer votre adresse mail" name="mail">

		ADRESSE:
		<input type="text" placeholder="Entrer votre adresse" name="adresse">

		MOT DE PASSE :
		<input type="password" placeholder="Entrer votre mot de passe" name="pass">	

		CONFIRMER MOT DE PASSE :
		<input type="password" placeholder="Confirmer votre mot de passe" name="pass2">	

		<input type="submit" id='submit' value='Créer votre compte'>

		<a id="yes" href="connexion.php"> 
					<input  type="href" value="vous avez un compte ?" >
				</a>
	</p>
</form>