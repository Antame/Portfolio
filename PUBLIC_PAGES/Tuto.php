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
                <h1>Tutoriels </h1>
                <a class="button" href="./?pg=Contact">Contactez-moi</a>
                <p class="entete"><img src="" alt=""></p>
                <div class="tuto">
                    
                    <a href="https://www.alsacreations.com/article/lire/53-Guide-de-survie-du-positionnement-CSS.html">tuto1: Guide de survie du positionnement</a>
                    <p>Ce tutoriel est normalement destiné aux personnes ayant déjà des notions de base sur ce sujet.
Mais hélas, le sujet est traité de manière superficiel. Le texte ne présente aucun exemple, aucune ligne de code ni visuel. Le sujet n’a pas été paufiné et je ne conseille donc pas ce tutoriel.
</p>
                    <a href="https://www.vulgarisation-informatique.com/css-positionnement.php">tuto2 :Positionnement et affichage CSS</a>
                    <p>Dans ce tutoriel, l’explication est assez claire, simple et fourni.
L’apprenti sera heureux de voir des exemples d’applications ainsi que le code s’y rapportant.
Je conseille ce tutoriel.
</p>
                </div>

                               

            </main>
            <?php
            include "footer.php"
            ?> 
        </div>

        <script>index.js</script>
    </body>
</html>