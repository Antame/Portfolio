
<?php
require_once "./config.php";

var_dump($_POST);


if(!empty($_POST)){
    
    $thename = htmlspecialchars(trim($_POST['thename']),ENT_QUOTES);
    $themail = filter_var(trim($_POST['themail']), FILTER_VALIDATE_EMAIL);
    $themessage = strip_tags(trim($_POST['themessage']));
    
    if(empty($thename) || !$themail || empty($themessage)){
        
        $message = "Votre mail n'a pas été envoyé, veuillez recommencer";
    }else{

        $aQui   = MAIL_ADMIN;
        $sujet = 'Réponse à votre formulaire ';
        $message = $thename." à écrit : \n".$themessage;
        $entete = array(
             'From' => "$themail",
             'Reply-To' => "$themail",
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // envoi du mail de confirmation à l'utilisateur
        $aQui   = $themail;
        $sujet = 'Merci pour votre mail sur mon portfolio';
        $message = "Vous recevrez une réponse dans les plus brefs délais";
        $entete = array(
             'From' => MAIL_ADMIN,
             'Reply-To' => MAIL_ADMIN,
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // mail($themail, 'Depuis ', $thename." à écrit : \n".$thetext);
        // création de la variable de confirmation
        $message = "Votre mail a bien été envoyé, merci";
    }
}
?>
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
    <?php
    if(isset($themessage)):
    ?>
    <h3><?=$message?></h3>
    
    <?php
    endif;
    ?>
                <form id="form1" name="contact" method="POST" action="" class="contact">
                    <div><input name="thename" type="text" id="frm1_nom" size="100" placeholder="VOTRE NOM"/></div>
                                 
                    <div><input name="themail" type="email" id="frm1_email" size="50" placeholder="VOTRE EMAIL"/></div>
                    <div><label for="frm1_message"></label><textarea name="themessage" id="frm1_message" cols="40" rows="5" placeholder="Votre demande: "></textarea></div>
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