<?php session_start();?>
    <!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="inc/css/header.css" rel="stylesheet">
    <link href="inc/css/technologie.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/inc/css/Index.css">
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title> Nos technologies </title>
    </head>

    <body>
        <?php include_once("header/header.php") ?>
        </br></br> 
        <h1> NOS TECHNOLOGIES</h1>

        <div class = "capteur">
            <div class="divcapteur" >
                <div class=titre>
                    <b>Capteur Humidité</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/CapteurHumidite.png">
                </div>
                <div class="description">
                    </br>
                    Les capteurs d'humidité comptent parmi les instruments les plus utilisés dans la surveillance environnementale. Pourquoi ? Parce qu'il s'agit d'un des paramètres les plus importants pour assurer le confort, la sécurité et l'efficience énergétique. Ainsi, les capteurs d'humidité sont souvent utilisés dans les industries comme l'industrie du CVC, dans le secteur biomédical, alimentaire, pharmaceutique, météorologique, microélectronique, dans l'agriculture et pour la surveillance de la santé structurelle
                    </br>   
                </div>
            </div>
        

            <div class="divcapteur" >
                <div class=titre>
                    <b>Capteur de gaz</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/CapteurGaz.png">
                </div>
                <div class="description">
                </br>
                    Le capteur peut être utilisé pour détecter différents gaz, du CO et des gaz combustibles, contenus dans l'atmosphère. 
                    </br>   
                </div>
            </div>

            <div class="divcapteur" >
                <div class=titre>
                    <b>Capteur CO2</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/CapteurCO2.png">
                </div>
                <div class="description">
                </br>Elle est constituée d’une cellule émettant un rayon infrarouge et d'un récepteur ainsi qu'un filtre pour les interférences. Ce récepteur infrarouge ou NDIR mesure l'intensité du flux émit par l'émetteur après son absorption par les molécules de C02.Plus la quantité de CO2 sera importante plus l'intensité du rayon captée au récepteur sera faible.
                    </br>   
                </div>
            </div>
            
        </div>  
        
        
        <?php include_once("header/footer.php") ?>
        <script src="inc/js/app.js" charset="utf-8"></script>
    </body>
    
</html>