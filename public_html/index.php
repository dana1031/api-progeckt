<?php
require '../bootloader.php';

use App\App;

$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>

<!--  <container>
               <div class="container"> 
                   

<div class="container">
   <img  class="hero" src="media/css/img/taxigif.gif" alt="taxi">        
       <img  class="hero" src="media/css/img/herotaxi.jpg" alt="taxi">
</div>
                       
                       
                  
               </div>
               <div class="row">
                   <div class="column">
                       <div class="card">
                           <img class="img" src="media/css/img/vaiku.jpg" alt="taxi"
                                 alt="">
                           <div class="text">

                               <h3>Taxi per 5 minutes</h3>
                               <p>Automobilis mieste atvyksta per 5 minutes. Jūsų užsakymas nukreipiamas tiesiogiai 
                                   vairuotojui. Taip sutaupomas užsakymo apdorojimo laikas.Patys galite pasirinkti 
                                   Jums tinkantį automobilį, iš anksto pamatyti kelionės kainą.</p>
                           </div>
                       </div>
                   </div>
                   <div class="column">
                       <div class="card">
                           <img class="img" src="media/css/img/seimos.png"
                                 alt="taksi">
                           <div class="text">

                               <h3>Automobilis šeimai</h3>
                               <p>Siūlome Jums techniškai tvarkingus ir prižiūrėtus automobilius, nemokamas 
                                   vaikiškas kėdutes ir GPS navigacijas. Už papildomą simbolinį mokestį suteiksime 
                                   stogo bagažinę. Užtikrinsime nemokamą automobilių pristatymą Vilniaus mieste.</p>
                           </div>
                       </div>
                   </div>
                   <div class="column">
                       <div class="card">
                           <img class="img" src="https://edelswiss-limousine.ch/wp-content/uploads/2019/02/chauffeur-service-switzerland-1.png
                                " alt="">
                           <div class="text">

                               <h3>Asmeninio vairuotojo paslauga</h3>
                               <p>Jeigu planuojate kelionę ar tiesiog žinote kada Jums 
                                   reikės vairuotojo paslaugos, galite užsakyti mūsų paslaugą 
                                   iš anksto. Tokiu atveju galėsite pamiršti rūpestį kaip nuvykti 
                                   į reikiamą vietą laiku.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </container>


          
      


          
           
           <div class="map">
               <iframe
                   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2194261566747!2d25.33569661534373!3d54.723355078378496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573639288714!5m2!1slt!2slt"
                   width=100% height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

           </div>
       </main>

        Footer         
       <footer>
            <?php print $footer->render(); ?>
       </footer>

                 
   </body>
</html>-->
            <section>
                <div class="container hero-content "> 
                    <div id="hero">
                        <img class="img" src="media/css/img/seimos.png"
                             alt="taxi">
<!--                        <img class="img" src="media/css/img/seimos.png"
                             alt="taxi">-->
<!--                      <img class="img" src="https://ctl.s6img.com/society6/img/dxRjxbThdzGHObpoQYN3iJaC770/w_1500/prints/~artwork/s6-original-art-uploads/society6/uploads/misc/4a931bec8fb04edfbe319aa23a55c027/~~/nyc-taxi711289-prints.jpg
         " alt="">-->
                        
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img class="img" src="media/css/img/seimos.png"
                                 alt="taxi">
                            <div class="text">

                                <h3>Vaikiška taxi</h3>
                                <p>Automobilis mieste atvyksta per 5 minutes. Jūsų užsakymas nukreipiamas tiesiogiai 
                                    vairuotojui. Taip sutaupomas užsakymo apdorojimo laikas.Patys galite pasirinkti 
                                    Jums tinkantį automobilį, iš anksto pamatyti kelionės kainą.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="img" src="media/css/img/taxigif.gif"
                                 alt="taxi">
                            <div class="text">

                                <h3>Automobilis šeimai</h3>
                                <p>Siūlome Jums techniškai tvarkingus ir prižiūrėtus automobilius, nemokamas 
                                    vaikiškas kėdutes ir GPS navigacijas. Už papildomą simbolinį mokestį suteiksime 
                                    stogo bagažinę. Užtikrinsime nemokamą automobilių pristatymą Vilniaus mieste.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="img" src="media/css/img/seimos.png"
                                 alt="taxi">
                            <div class="text">

                                <h3>Asmeninio vairuotojo paslauga</h3>
                                <p>Jeigu planuojate kelionę ar tiesiog žinote kada Jums 
                                    reikės vairuotojo paslaugos, galite užsakyti mūsų paslaugą 
                                    iš anksto. Tokiu atveju galėsite pamiršti rūpestį kaip nuvykti 
                                    į reikiamą vietą laiku.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Map -->

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219602278376!2d25.33569661589081!3d54.72335198029069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573638532307!5m2!1slt!2slt" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <!-- Footer -->        
            <footer>
                <?php print $footer->render(); ?>
            </footer>



    </body>
</html>
