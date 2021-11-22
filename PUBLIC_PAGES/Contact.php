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
                <h1>Contactez-moi</h1>
                <a class="button" href="./?pg=Contact">let's get in touch! </a>
                
                <h3 class="description">Pour tout renseignement/ devis:</br>
                <img src="./images/boutonContact-us.png" alt="bouton clic" width="300px"> </h3>

                <form id="form1" name="form1" method="post" action="" class="contact">
                    <div><label for="frm1_nom"></label><input name="nom" type="text" id="frm1_nom" size="100" placeholder="NOM"/></div>
                                      
                    <div><label for="frm1_email"></label><input name="email" type="email" id="frm1_email" size="50" placeholder="EMAIL"/></div>
                    <div><label for="frm1_message"></label><textarea name="message" id="frm1_message" cols="40" rows="5" placeholder="Votre demande: "></textarea></div>
                    <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>
                </form>
        
            </main>
            <?php
            include "footer.php"
            ?> 
        </div>
        <script>index.js</script>

    </body>
</html>