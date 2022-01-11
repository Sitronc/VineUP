    <form method="POST" action="inc/co_ins/controleur_demande_connexion.php">
    			<h1>Connexion</h1>
				Login : <input type="text" id="login" name="mail" value=""/>
				Mot de Passe : <input type="password" id="passe" name="password" value=""/>

				<?php 
					if ($_SESSION['error'] == 1)
					{?>
						<script>
							alert("Email ou mdp incorrect");
						</script>
							<?php
					}
				
				?>
				<input type="submit" value="Valider"/>
				
				<a id="yes" href="inscription.php"> 
					<input  type="href" value="vous n'avez pas de compte?" >
				</a>

	</form>
