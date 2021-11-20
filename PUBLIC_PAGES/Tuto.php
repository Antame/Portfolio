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
                    
                    <a href="#">tuto1 <p></p></a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos voluptate, iusto magnam, provident atque temporibus nulla officia voluptatum molestiae quasi explicabo sequi itaque id minus. Dicta doloremque alias beatae reiciendis?</p>
                    <a href="#">tuto2</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni explicabo ipsa debitis cupiditate ad aliquid fuga laudantium, corrupti iure voluptatibus quia asperiores cumque ut eaque hic nam aut neque eligendi.</p>
                </div>

                               

            </main>
            <?php
            include "footer.php"
            ?> 
        </div>

        <script>index.js</script>
    </body>
</html>