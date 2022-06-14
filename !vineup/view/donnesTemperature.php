<!DOCTYPE html>
<head>
    <title> Profil </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="inc/css/header.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="inc/css/Profil.css">
<link rel="stylesheet" type="text/css" href="inc/css/Templates.css">
<link rel="stylesheet" type="text/css" href="view/inc/css/Index.css">
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>

<body>
    <div class="corps">
        </br>Page profile </br>
        <div class="donnees">
            <?php 
                include_once ('../model/model.php');
                recup_donnees();
            ?>
        </div>
        <script src="inc/js/app.js" charset="utf-8"></script>
    </body>
</html>