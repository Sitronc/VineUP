    <form method="POST" action="inc/co_ins/controleur_demande_connexion.php">
				Login : <input type="text" id="login" name="mail" value=""/>
				Passe : <input type="password" id="passe" name="password" value=""/>
				<?php 
					if ($_SESSION['error'] == 1)
					{?>
						<script>
							alert("mail ou mdp incorrect");
						</script>
							<?php
					}
				
				?>
				<input type="submit" value="Valider"/>
	</form>
