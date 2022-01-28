<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vineup/forum</title>
<title>VINEUP/Inscription</title>
		<meta charset="utf-8">		

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
	<link href="inc/css/header.css" rel="stylesheet">
    <link href="inc/css/vine_up.css" rel="stylesheet">
    <link href="inc/css/forum.css" rel="stylesheet">
</head>

    <?php include_once("header/header.php") ?>
<body>
	<div class="forum">
		<?php 
		
		include_once ('../controller/controlle_forum.php');?>

		
	</div>

<div class="border"></div>

	<div class="donne">
<?php 
include_once('../model/model.php');
include("../model/connect_bd.php");

                   /* $forum = afficher_forum(session_id());*/
$sql = 'SELECT * FROM forum';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = $bdd-> query($sql) ;

// on recupere le resultat sous forme d'un tableau
$data = $req->fetchAll();
// on libère l'espace mémoire alloué pour cette interrogation de la base
?>
<?php foreach($data as $pseudo): ?>
<article>
                    <?php echo '<br>';
                    echo 'Pseudo: <b>'.$pseudo['Pseudo'].'</b> <br>'; ?>
                    <br>
                    <?php echo ': <b>'.$pseudo['Message'].'</b><br>'; ?>
</article>
 <?php endforeach;?>     
            </div>
	
</body>
</html>