<?php
require '../bootloader.php';

use App\App;

//
//$createForm = new \App\Participants\Views\CreateForm();
//$updateForm = new \App\Participants\Views\UpdateForm();
//$navigation = new \App\Views\Navigation();
//$footer = new \App\Views\Footer();
//
//if (!App::$session->userLoggedIn()) {
//    header('Location: /login.php');
//}
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
       <!--<link rel="stylesheet" href="media/css/mano.css">-->
       <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   </head>
   
   <body>
       <header>
           <?php print $navigation->render(); ?>
       </header>
       <main>
           <section>
               <div class="row">
                   <div class="column">
                       <div class="card">
                           <img class="img"
                                 src="https://media0.giphy.com/media/8h943ofFHgJPy/source.gif"
                                 alt="Nature">
                                <!--                     <p>Nuotraukytė</p>
                                                    <p>Nuotraukytė</p> -->
                       </div>
                   </div>
                   <div class="column">
                       <div class="card">
                           <img class="img"
                                 src="https://i.pinimg.com/originals/42/45/42/424542f92a6fbc8359e925d2447acd06.gif"
                                 alt="Nature">
                                                    <!-- <p>Nuotraukytė</p>
                                                    <p>Nuotraukytė</p> -->
                       </div>
                   </div>
                   <div class="column">
                       <div class="card">
                            <img class="img"
                                 src="https://media0.giphy.com/media/8h943ofFHgJPy/source.gif"
                                 alt="Nature">
                                                    <!-- <p>Nuotraukytė</p>
                                                    <p>Nuotraukytė</p> -->
                       </div>
                   </div>
               </div>
           </section>
           <section>
               <div class="row">
                   <div class="text">
                       <h1>Nuotraukytės tekstukas</h1>
                       <p>Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas</p>
                   </div>
                   <div class="text">
                       <h1>Nuotraukytės tekstukas</h1>
                       <p>Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas</p>
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
           <script defer src="media/js/app.js"></script>
   </body>
</html>

