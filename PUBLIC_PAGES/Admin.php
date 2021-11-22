<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN</title>
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

                    <form id="form1" name="form1" method="post" action="" class="contact">
                        <div><label for="frm1_nom"></label><input name="nom" type="text" id="frm1_nom" size="100" placeholder="Pseudo"/></div>
                                      
                        <div><label for="frm1_email"></label><input name="email" type="email" id="frm1_email" size="50" placeholder="EMAIL"/></div>
                        <div><input type="submit" id="frm1_submit" value="Login" /></div>
                    </form>
            </main>

                    <?php
                        include "footer.php"
                    ?> 
        </div>
<script>index.js</script>
</body>
</html>