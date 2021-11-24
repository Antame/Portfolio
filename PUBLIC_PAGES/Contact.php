
// modification de variables de configuration du serveur, utile pour le mail sur un serveur local (change le contenu de php.ini pour cette page seulement), inutile d'utiliser ini_set pour envoyer un mail sur un serveur distant, il suffit de paramétrer le smtp comme dans votre doc (gmail.com outlook etc...)
<?ini_set('SMTP',SMTP_HOST);
ini_set('smtp_port',SMTP_PORT);
ini_set('sendmail_from',MAIL_ADMIN);

var_dump($_POST);

// si le formulaire a été envoyé
if(!empty($_POST)){
    // traîtement des variables (htmlspecialchars est souvant inutile sans insertion dans la DB)
    $thename = htmlspecialchars(trim($_POST['thename']),ENT_QUOTES);
    $themail = filter_var(trim($_POST['themail']), FILTER_VALIDATE_EMAIL);
    $thetext = strip_tags(trim($_POST['thetext']));
    // si au moins 1 équivalante à vide ou false
    if(empty($thename) || !$themail || empty($thetext)){
        // création d'une variable pour l'erreur
        $message = "Votre mail n'a pas été envoyé, veuillez recommencer";
    }else{
        // on va créer nos variables pour l'envoi des mails

        // premier, envoi du mail à l'admin
        $aQui   = MAIL_ADMIN;
        $sujet = 'Réponse à votre formulaire 23-mail';
        $message = $thename." à écrit : \n".$thetext;
        $entete = array(
             'From' => "$themail",
             'Reply-To' => "$themail",
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // envoi du mail de confirmation à l'utilisateur
        $aQui   = $themail;
        $sujet = 'Merci pour votre mail sur 23-mail';
        $message = "Vous recevrez une réponse dans les plus brefs délais";
        $entete = array(
             'From' => MAIL_ADMIN,
             'Reply-To' => MAIL_ADMIN,
             'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // mail($themail, 'Depuis 23-mail', $thename." à écrit : \n".$thetext);
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