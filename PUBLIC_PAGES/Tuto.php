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
                <!--<p class="entete"><img src="" alt=""></p>-->
                <div class="tuto"><p>Lors de la conception d’une page web, il est primordial de réfléchir à la manière dont les divers éléments constituant cette page y seront disposés.<br> La page web est l’interface qui permet de communiquer , de présenter un contenu au visiteur. Le commanditaire du site souhaitera donner une image particulière, un look à son site afin de se présenter au mieux à son public. Il va de soi, qu’il faut maitriser la notion du positionnement afin de rendre un rendu visuel fidèle à la demande de notre client. Maitriser le positionnement, permet de résoudre bien nombre de bugs. 
                Voici les liens de deux tutos qui vous permettront de vous familiariser avec cette notion : </p><br>
                </div><br>
                <div class="tuto">
                    
                    <a href="https://www.alsacreations.com/article/lire/53-Guide-de-survie-du-positionnement-CSS.html"><h2> Guide de survie du positionnement</h2></a>
                    <p>Ce tutoriel est normalement destiné aux personnes ayant déjà des notions de base sur ce sujet.
Mais hélas, le sujet est traité de manière superficiel. Le texte ne présente aucun exemple, aucune ligne de code ni visuel. Le sujet n’a pas été paufiné et je ne conseille donc pas ce tutoriel.
</p>
                    <a href="https://www.vulgarisation-informatique.com/css-positionnement.php"><h2>Positionnement et affichage CSS</h2></a>
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