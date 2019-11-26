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

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/milligram.min.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <style>
           header{
               height:50px;
               background-color: blue;
           }
           section{

               max-width: 100%;
              height: 600px;
               align-items: center;
               background-color: green;
           .row{
               width: 100%;
               display: flex;
               flex-direction: row;
               flex-wrap: wrap;
/*               justify-content:space-around;*/
               justify-content:space-beetween; 
               align-items: center;
           }
           .card{ 
               
               align-content:center; 
              /**/width: 300px; 
               height:250px;
               border:1px solid grey;
               text-align: center;
               margin:10px;
           }
           /*****/
           img{
               height: 50%;
           }
           footer{
               
               background-color: green;
           }
           @media only screen and (max-width: 768px) {
               .row{
                   flex-direction: column;
               }
               .card{
                   max-width:100;
                   margin: 10px;
               }
               section{
                   max-width: 100%;
                   height:600px;
               }
           }
       </style>
       
       </head>
       
       <body>
    <header>
        <?php print $navigation->render(); ?>
    </header>
    <main>
        <div class="container">


            <section>
                <div class="row">
<!--                    <div class="column">-->
                        <div class="card">
                            <img class="img"
                                 src="https://66.media.tumblr.com/tumblr_m5fk5vaKkc1rynkyko1_400.gifv"
                                 alt="Ocean">    
                        </div>
<!--                    </div>
                    <div class="column">-->
                        <div class="card">
                            <img class="img"
                                 src="http://www.olddominionwildlife.com/wp-content/uploads/doe_and_fawns.gif"
                                 alt="nature">


                        </div>
<!--                    </div>
                   <div class="column">
                        <div class="card">
                            <img class="img"
                                 src="https://i.pinimg.com/originals/db/3b/63/db3b638a7d22a77f29cf6c7d1d1d6d2b.gif"
                                 alt="Nature">

                        </div>
                  </div>
                        <div class="column">-->
                            <div class="card">
                                <img class="img"
                                     src="https://i.pinimg.com/originals/db/3b/63/db3b638a7d22a77f29cf6c7d1d1d6d2b.gif"
                                     alt="Nature">




                        </div>     
                </div
                </section>
                </div>     

            <container>
                <div class="row">
                    <div class="textas">
                        <h1>Textas</h1>
                        <p>textas textas textas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dolorum
                            praesentium dignissimos eos eum, vitae blanditiis ipsa quasi explicabo sequi expedita porro
                            nobis quam beatae facere, consequatur ex ab pariatur!</p>

                    </div>

                    <div class="textas">
                        <h1>Textas</h1>
                        <p>textas textas textas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dolorum
                            praesentium dignissimos eos eum, vitae blanditiis ipsa quasi explicabo sequi expedita porro
                            nobis quam beatae facere, consequatur ex ab pariatur!</p>
                    </div>
                </div>
            </container>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2194261566747!2d25.33569661534373!3d54.723355078378496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1573639288714!5m2!1slt!2slt"
                width=100% height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>
    </main>

    <!-- Footer -->        
    <footer>
        <?php print $footer->render(); ?>
    </footer>

    <script defer src="media/js/app.js"></script>
</body>
</html>
