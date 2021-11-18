<form action="inc/co_ins/controleur_demande_inscription.php" method="post">
			<p>
				NOM:
				<input type="text" placeholder="Entrer votre nom" name="nom" >	

				PRENOM:
				<input type="text" placeholder="Entrer votre prénom" name="prenom" >	
				
				DATE DE NAISSANCE:
				<input type="date" placeholder="Entrer votre prénom" name="date_naissance" >	

				ADRESSE MAIL:
				<input type="text" placeholder="Entrer votre adresse mail" name="mail" >	

				MOT DE PASSE :
				<input type="password" placeholder="Entrer votre mot de passe" name="pass" >

				CONFIRMER MOT DE PASSE :
				<input type="password" placeholder="Confirmer votre mot de passe" name="pass2">

				<input type="submit" id='submit' value='Créer votre compte' >
				<a href="connexion.php"> vous avez déjà un compte?</a>
			</p>
		</form>