<!DOCTYPE html>
<html>
    <head>
        <title>PORTFOLIO</title>
        <link href="./style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="lightbox/css/lightbox.min.css" rel="stylesheet" type="text/css" />
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
                <h1><strong>< Meta martine : " WebDeVeLOpPeR " ></strong> </h1>
                <a class="button" href="./?pg=Contact">Contactez-moi</a>
                <a class="entete"><img src="./images/webDev.webp" width="400px" alt=""></a>
               


                <div class="service">
                <h2>Mon but est de développer des interfaces web adaptées pour mes clients</h2>
               
                   
                     <div class="grid-itemA">
                                              
                             <p>Création sites internet</p>
                             <span class="lv"> </span>
                             <p>Web design </p>
                             <span class="lv"> </span>
                             <p>Création logo</p>

                                         
                     </div>
                     
                    <div class="grid-itemA">
                        
                             <p>Analyse des besoins</p> <span class="lv"> </span><p>cohérence visuelle </p><span class="lv"> </span><p> cahier des charges</p>
                            
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