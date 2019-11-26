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
<!--        <style>
            header {
                display: block;
                width: 100%;
                height: 80px;
                /* background-color: grey; */
                background-image: linear-gradient(to right top,
                    #1f1f3b,
                    #36b971,
                    #6bc521,
                    #134113,
                    #a4c725);
            }

            .logo {
                width: 40px;
                height: 40px;
                border-radius: 7px;
                padding-bottom: 5px;
                ;
            }

            section {
                display: flex;
                max-width: 100%;
                height: 300px;
                align-items: center;
                margin-top: 20px
            }

            .row {
                width: 100%;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
            }

            .card {
                height: 300px;
                width: 200px;
                border: 1px solid grey;
                text-align: center;
            }

            .img {
                width: 200px;
                height: 50%;
            }

            .footer {
                height: 50px;
                /* background-color: grey; */
                background-image: linear-gradient(to right top,
                    #1f1f3b,
                    #36b971,
                    #9ce9d8,
                    #134113,
                    #a4c725);
                text-align: centr;
            }

            @media only screen and (max-width: 768px) {
                .row {
                    flex-direction: column;
                }

                .card {
                    max-width: 100;
                    margin: 10px;
                }

                section {
                    max-width: 100%;
                    height: 600px;
                }
            }



            .textas {
                border: 1px dashed #aaa;
                width: 200px;
                height: 300px;
                padding: 5px;
                align-items: centr;
                margin: 20px;
            }

            a {
                text-decoration: none;
            }

            p {
                text-align: centr;
                margin: 0.75rem 0;
            }

            .navbar {
                height: 60px;
                margin-top: 0px;
                display: flex;
                /* position: sticky; */
                top: 0;
                /* background: rgb(80, 16, 16); */
                background: #6bc521;
                color: white;
                justify-content: space-between;
                z-index: 1;
                padding: 1rem;
            }

            .navbar ul {
                display: flex;
                align-items: center;
                list-style: none;
            }

            .navbar ul li a {
                color: #fff;
                padding: 0.75rem;
                margin: 0 0.25rem;
            }

            .navbar ul li a:hover {
                background: grey;
                border-radius: 5px;
            }

            .container {



                /* background-image: url(https://blog.visitnh.com/wp-content/uploads/2018/01/concord-craft-brewery_1-10-18_039-1024x683.jpg); */
                /* background: cover; */
                background:#ccff99;
                width: 1280px;
                /* height: 100px; */
                opacity: 1;
            }

            /*            * BendrinÄ—s klasÄ—s,
                        nustatymai *
                        html {
                            scroll-behavior: smooth;
                            overflow-x: hidden;
                        }*/

            body {
                margin: 0;
                font-family: "Oswald", sans-serif;
            }

            *,
            *:after,
            *:before {
                box-sizing: border-box;
            }

            /*            ul {
                            list-style: none;
                            padding: 0;
                            margin: 0;
                        }
            
                        .clearfix {
                            clear: both;
                            width: 100%;
                            display: block;
                        }*/

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                text-align: center;
                color: grey;
            }

            p {
                text-align: justify;
            }



            .clearfix:after {
                clear: both;
                display: block;
                width: 100%;
            }

            hr {
                border: 1px solid green;
            }

            .logo-container {
                display: block;
                float: left;
                margin-right: 1rem;
                height: 60px;
                width: 60px;
            }

            .logo {
                height: 40px;
                width: 40px;
                background: url(logo.png);
                background-size: cover;
                background-position: center;
            }

            .prisijungti {
                height: 50px;
                width: 105px;
                border: 2px solid #fff;
                border-radius: 5px;
                padding-top: 15px;
                display: block;
                float: right;

            }


            a[dropdown-target].nav-menu-link:after {
                content: " â–¼";
                font-size: 0.75em;
            }

            .link-menu-item {
                padding-left: 2rem;
            }

            .link-menu-item a {
                display: inline-block;
                width: 100%;
                padding: 0.25rem 0;
                font-size: 0.875rem;
            }

            .link-menu-item:nth-child(1) a {
                padding-top: 0;
            }

            .link-menu-item a:hover {
                cursor: pointer;
                color: #7b7b9b;
            }


            .row {
                display: flex;
                /* justify-content: space-between; */
                flex-wrap: wrap;
            }

            .footer {
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>-->
<!--        <style>
           /* =============== HEADER =============== */

header {
    background-color: #f5f5f5;
    max-width: 800px;
    display: flex;
    justify-content: center;
    align-items: center;    
    height: 70px;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav .link-wrapper {
    display: inline-block;
    padding: 5px;
}

nav .link-wrapper.active {
    border: 2px solid #21006d;
    font-weight: bold;    
}

            section{

               display:flex;
                max-width: 100%;
                height: 300px;
                align-items: center;
                 flex-direction: row;
                 justify-content: space-between;
            }


            .row{
                width: 960px;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }
            .card{display: flex;
                  flex-direction: row;
                backgraund-size: cover;
                justify-content: space-between;
               box-sizing: border-box;
                width: 300px;
                height:150px;
                border:1px solid grey;
                text-align: center;
                margin: 10px
            }
            ***
            .img{
                 backgraund-size: cover;
                box-sizing: border-box;
                height: 100%;
            }
            footer{
                height:50px;
                background-color: green;
            }
                        main {
                            background-image: url("https://images.pexels.com/photos/1250260/pexels-photo-1250260.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
                            background-size: cover;
                        }
            @media only screen and (max-width: 800px) {
                header{
                    
                }
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
            body {
                display: inline-block;
                width: 100%;
                margin: 0;
                height: 100vh;
                background: #ffb88c;  fallback for old browsers 
                background-image: -webkit-linear-gradient(
                    to right,
                    #de6262,
                    #ffb88c
                    );  Chrome 10-25, Safari 5.1-6 
                background-image: linear-gradient(
                    to right,
                    #de6262,
                    #ffb88c
                    );  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ 
                background-size: cover;
            }*/
        </style>-->
    </head>
    <body>
        <header>
            <?php print $navigation->render(); ?>
        </header>

        <main>
        <div class="hero">
           
                <img
                  class="hero-img"
                  src="foto.jpg"
                  alt="hero"
                />
            
             </div


            <section>
                <div class="row">
<!--                    <div class="column">-->
                        <div class="card">
                            <img class="img"
                                 src="https://image.shutterstock.com/image-photo/assortment-fresh-fruits-vegetables-260nw-553662235.jpg" alt="Ocean"> 
<!--                                 src="https://i.pinimg.com/originals/db/3b/63/db3b638a7d22a77f29cf6c7d1d1d6d2b.gif""-->
                                    
                        </div>
<!--                    </div>-->
<!--                    <div class="column">-->
                        <div class="card">
                            <img class="img"
                                 src="https://image.freepik.com/foto-gratis/regar-planta-joven-que-crece-cascara-huevo-jardin_7186-11.jpg" alt="Ocean"> 
<!--                                 src="https://i.pinimg.com/originals/db/3b/63/db3b638a7d22a77f29cf6c7d1d1d6d2b.gif"-->
                               
<!--                        </div>-->


                    </div>
<!--                    <div class="column">-->
                        <div class="card">
                            <img class="img"
                                 src="https://image.shutterstock.com/image-photo/assortment-fresh-fruits-vegetables-260nw-553662235.jpg" alt="Ocean"> 
<!--                                 src="https://i.pinimg.com/originals/db/3b/63/db3b638a7d22a77f29cf6c7d1d1d6d2b.gif"-->
                                

                        </div>   
<!--                    </div>-->
                </div>
            </section>
            <section>
                <div class="row">
                   <div class="text">
                        <h1>Textas</h1>
                        <p>textas textas textas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dolorum
                            praesentium dignissimos eos eum, vitae blanditiis ipsa quasi explicabo sequi expedita porro
                            nobis quam beatae facere, consequatur ex ab pariatur!</p>

                    </div>

                    <div class="text">
                        <h1>Textas</h1>
                        <p>textas textas textas Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dolorum
                            praesentium dignissimos eos eum, vitae blanditiis ipsa quasi explicabo sequi expedita porro
                            nobis quam beatae facere, consequatur ex ab pariatur!</p>
                    </div>
                </div>

            </section>
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

                    
    </body>
</html>
