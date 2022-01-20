<?php 
include_once('../view/form_modif_profil.php');
include_once('../model/model.php');

$nom = $_POST["nom"];//1
$prenom = $_POST["prenom"];//2
$naissance = $_POST["date_naissance"];//3
$mail = $_POST["mail"];//4
$pass = $_POST["pass"];//5
$passConf = $_POST['pass2'];//6
$adresse = $_POST["adresse"];//7
$tel = $_POST["tel"];//8
$type = 'clients';//9
$NomDomaine = null;//10
$IdUtilisateur = session_id();

if (isset($nom) && isset($prenom) && isset($naissance) && isset($mail) && isset($pass) && isset($passConf) && isset($adresse) && isset($tel)) 
	{
		if (!empty($nom) && !empty($prenom) && !empty($naissance) && !empty($mail) && !empty($pass) && !empty($passConf) && !empty($adresse) && !empty($tel))
			{
				if ($pass === $passConf)
					{			
	    		    $Modif = modif_profil($nom, $prenom, $naissance, $pass, $mail, $type, $adresse, $tel, $NomDomaine, $IdUtilisateur);
	    		    header('Location:../view/profile.php');
	
	    		    /*if ($_POST["pass"] == $_POST["pass2"] AND mailinco($_POST["mail"]) == 0)
	    		    	{
	    		    	    if(empty($_POST['date_naissance']) || empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || strlen($_POST["pass"])<2 )
	    		    	        {
	    		    	            //inscription($nom, $prenom,$date_naissance, $mail,$pass,$type);
	    		    	            $_SESSION["probleme"] = 1;
	    		    	            echo"<script > <!--- alert('ton alerte'); ---> </script>"; 
	    		    	            header('Location: ../view/inscription.php');                                           
	    		    	                            
	    		    	        }
	    		    	         
	    		    	 
	    		    	    if (inscription($nom, $prenom, $pass, $mail, $type, $adresse, $tel, $naissance))
	    		    	         {
	    		    	            $_SESSION["etat"] = 1;
	    		    	            header('Location: ../index.php'); 
	    		    	         }
	    		    	}*/
	    			}
	    		else
	    			echo "Les mots de passe ne sont pas identiques";
	    	}
	    	else
	    		{
	    			echo "<b>Merci de remplir tous les champs</b>";
	    		}
	}
?>