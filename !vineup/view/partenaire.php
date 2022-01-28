<?php session_start();?>
    <!DOCTYPE html>
    <head>
        <title> Producteurs Partenaires </title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="inc/css/header.css" rel="stylesheet">
        <link href="inc/css/technologie.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body>
        <?php include_once("header/header.php") ?>
        </br></br> 
        <h1> Producteurs Partenaires</h1>
        </br></br>
        <div class = "text">
            Nos différents partenaires
        </div>
</br>

        <div class = "producteur">
            <div class="divcapteur" >
                <div class=titre>
                    <b>Domaine de la Ruissiere</b>
                    </br></br>
                    <img  width = "200px" class ="img_capteur"src="inc/img/DomaineDeLaRuissiere.jpg">
                </div>
                <div class="description">
                    </br>
                    Descrpition
                    </br>   
                    Descrition du capteur
                </div>
            </div>

            <div class="divcapteur" >
                <div class=titre>
                    <b>Domaine de la Montagne</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/DomaineDeLaMoatgne.jfif">
                </div>
                <div class="description">
                    </br>
                    Descrpition
                    </br>   
                    Descrition du capteur
                </div>
            </div>

            <div class="divcapteur" >
                <div class=titre>
                    <b>Domaine d'alsace</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/DomainedAlsace.jpg">
                </div>
                <div class="description">
                    </br>
                    Descrpition
                    </br>   
                    Descrition du capteur
                </div>
            </div>

            <div class="divcapteur" >
                <div class=titre>
                    <b>Domaine du taupe</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/DomaineTaupe.jfif">
                </div>
                <div class="description">
                    </br>
                    Descrpition
                    </br>   
                    Descrition du capteur
                </div>
            </div>

            <div class="divcapteur" >
                <div class=titre>
                    <b>Domaine de la Varenne</b>
                    </br></br>
                    <img class ="img_capteur"src="inc/img/DomaineLaVarenne.jfif">
                </div>
                <div class="description">
                    </br>
                    Descrpition
                    </br>   
                    Descrition du capteur
                </div>
            </div>

            

        </div>

        <?php include_once("header/footer.php") ?>
        <script src="inc/js/app.js" charset="utf-8"></script>
    </body>
    
</html>