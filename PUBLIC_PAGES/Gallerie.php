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
                <h1>gallerie : Mes réalisations </h1>
                <a class="button" href="./?pg=Contact">Contactez-moi</a>
                <p class="entete"><img src="./images/prefo.jpg" width="400px" alt=""></p>


                <div class="gallerie">
                     
                   
                    <div class="grid-item">
                        <a href="http://martine.webdev-cf2m.be/PREFO/" data-lightbox="" datga-title="">
                            <img src="./images/prefo.jpg." alt="site de preformation" width="400px"/>
                        </a>
                        
                    </div>
                    <div class="grid-item">
                        <a href="#http://martine.webdev-cf2m.be/Stockolm/" data-lightbox="" datga-title="">
                            <img src="./images/photoStockholm.jpg" alt="Site Stockholm" width="400px"/>
                        </a>
                        
                    </div>
                    <div class="grid-item">
                        <a href="#" data-lightbox="" datga-title="">
                            <img src="images/neonLight1.jpg" alt="" width="400px"/>
                        </a>
                        
                    </div>
                    
                    <div class="grid-item">
                        <a href="#" data-lightbox="" datga-title="">
                            <img src="" alt="" width="400px"/>
                        </a>
                        
                    </div>

                    </div>
                    </div>


                </div>
                
            </main>
            <?php
            include "footer.php"
            ?> 
        </div>
        
        <script>index.js</script>
    </body>
</html>