<!DOCTYPE html>
<html>
    <head>
        <title>PORTFOLIO</title>
        <link href="./style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <meta charset="8-UTF">
        <meta name="viewport" content="width= device-width, initial-scale=1.0">

    </head>
    <body>
        <div id="global">
            <header>
            <!-- Importation de la barre de navigation-->
                <?php
                    
                    include "menu.php";
                ?>
            </header>        
            <main>
                <h1>Bienvenue </h1>
                <a class="button" href="./?pg=Contact">Contactez-moi</a>
                <p class="entete"><h2>Quelques liens utiles</h2>  </p>
                <hr>
                <div class="liens">
                    <div class="grid-item">
                    <a href="https://apprendre-php.com/index.html" target="_blank"> <i class="fa fa-play-circle" style="font-size:48px;color:red"></i> Apprendre à programmer</a> 
                    
                    <a href="https://j-willette.developpez.com/tutoriels/html/les-bases-du-html/?page=page_1" target="_blank" ><i class="fa fa-play-circle" style="font-size:48px;color:red"></i> les bases du HTML</a>
                    <a href="https://www.codeur.com/tuto/css/les-bases-du-css/" target="_blank"><i class="fa fa-play-circle" style="font-size:48px;color:red"></i> les bases du CSS</a>
                    </div>
                    <div class="grid-item">
                    <a href="http://stylescss.free.fr/v2-tutoriels/responsive.php" target="_blank"><i class="fa fa-play-circle" style="font-size:48px;color:red"></i> La mise en place responsive</a>
                    <a href="https://learncssgrid.com/" target="_blank"><i class="fa fa-play-circle" style="font-size:48px;color:red"></i> Apprendre à manier les grids en CSS</a>
                    <a href="https://esokia.com/fr/blog/ux-ui-quest-ce-que-ca-signifie" target="_blank"><i class="fa fa-play-circle" style="font-size:48px;color:red"></i> Ux / UI design: quelques notions importantes </a>
                    </div>
                </div>
             
                
            </main>
            <?php
            include "footer.php"
            ?> 
        <script>index.js</script>
        </div>
        <script>index.js</script>
    </body>
</html>