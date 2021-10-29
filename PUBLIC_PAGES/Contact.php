<!DOCTYPE html>
<html>
    <head>
        <title>PORTFOLIO</title>
        <link href="./style.css" rel="stylesheet">
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
            <header>        
            <main>
                <h1>Contactez-moi</h1>
                
                <p class="entete"><img src="images/640px-contacts.jpg" /></p>
                <h3 class="entete">Pour tout renseignement et devis: remplissez le formulaire ci-dessous :</h3>

                <form id="form1" name="form1" method="post" action="" class="contact">
                    <div><label for="frm1_nom">NOM et PRENOM : </label><input name="nom" type="text" id="frm1_nom" size="100" /></div>
                                      
                    <div><label for="frm1_email">E-MAIL : </label><input name="email" type="email" id="frm1_email" size="50" /></div>
                    <div><label for="frm1_message">Votre demande : </label><textarea name="message" id="frm1_message" cols="40" rows="5"></textarea></div>
                    <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>
                </form>


        <script>index.js</script>
            

            

        </main>
        <footer>

        </footer>
    </body>
</html>