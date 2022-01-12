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
                <h1>galerie : Mes réalisations </h1>
                <a class="button" href="./?pg=Contact">Contactez-moi</a>
                


                <div class="galerie">

                
                <div class="container">
    <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="./images/prefo.jpg." style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="./images/neonLight1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="./images/photoStockholm.jpg" style="width:100%">
  </div>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
                    
                   
                        
                    </div>
                     
                   
                    <div class="grid-item">
                        <a href="http://martine.webdev-cf2m.be/PREFO/" target="_blank"  data-lightbox="" datga-title="" >
                            <img src="./images/prefo.jpg." alt="site de preformation" >
                        </a>
                        
                    </div>
                    <div class="grid-item">
                        <a href="#http://martine.webdev-cf2m.be/Stockolm/" target="_blank" data-lightbox="" datga-title="">
                            <img src="./images/photoStockholm.jpg" alt="Site Stockholm" width="400px"/>
                        </a>
                        
                    </div>
                    <div class="grid-item">
                        <a href="#" data-lightbox=" target="_blank"" datga-title="">
                        <a href="#" data-lightbox=" " datga-title="">
                            <img src="./images/neonLight1.jpg" alt="" >
                        </a>
                        
                    </div>




                </div>
                
            </main>
            <?php
            include "footer.php"
            ?> 
        </div>
        
        <script>index.js</script>
    </body>
    
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</html>