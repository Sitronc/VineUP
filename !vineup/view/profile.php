<?php session_start();?>
    <!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="inc/css/header.css" rel="stylesheet">
    <link href="inc/css/vine_up.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="inc/css/profil.css">
    <link rel="stylesheet" type="text/css" href="inc/css/Templates.css">
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title> Profile </title>
    </head>

    <body>
        <?php include_once("header/header.php") ?>
        <div class="corps">
            <div>
                </br></br>Page profile </br>
            </div>
            <div>
                <?php 
                    include_once('../model/model.php');
                    $IdUtilisateur = session_id();
                    $UserInfo = afficher_profil(2);
                    echo $IdUtilisateur;
                    echo $UserInfo;
                    echo 'Votre Nom est: <b>'.$UserInfo['Nom'].'</b> <br>'; 
                    echo 'Votre Prénom est: <b>'.$UserInfo['Prenom'].'</b><br>';
                    echo 'Votre Adresse est: <b>'.$UserInfo['Adresse'].'</b><br>';
                    echo 'Votre Numéro de Téléphone est: <b>'.$UserInfo['Tel'].'</b><br>';
                ?>
            </div>
            <div class = "deco">
                <a href="../controller/deconnection.php" class="btn btn-primary my-2">Déconnexion</a>
            </div>
            <script src="inc/js/app.js" charset="utf-8"></script>
        </div>
        <?php include_once("header/footer.php") ?>
    </body>
    
</html>