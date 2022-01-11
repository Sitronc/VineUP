<form action="inc/co_ins/controleur_demande_inscription.php" method="post">
			<p>
				<h1>Inscription</h1>
				NOM:
				<input type="text" placeholder="Entrer votre nom" name="nom" >	

				PRENOM:
				<input type="text" placeholder="Entrer votre prénom" name="prenom" >	
				
				DATE DE NAISSANCE:
				<input type="date" placeholder="Entrer votre date de naissance" name="date_naissance" min="1922-01-01" max="2010-12-31" >	

				ADRESSE MAIL:
				<input type="text" placeholder="Entrer votre adresse mail" name="mail" >	

				MOT DE PASSE :
				<input type="password" placeholder="Entrer votre mot de passe" name="pass" >

				CONFIRMER MOT DE PASSE :
				<input type="password" placeholder="Confirmer votre mot de passe" name="pass2">
				

				<input type="submit" id='submit' value='Créer votre compte' >
				
				<a id="yes" href="connexion.php"> 
					<input  type="href" value="vous avez un compte ?" >
				</a>
			</p>
		</form>