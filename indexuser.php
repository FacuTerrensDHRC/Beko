<?php
session_start();
$user = $_SESSION['username'];
include 'conexion.php';
include 'seguridad.php';
 ?>

    <!doctype html>
    <html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bienvendido </title>
        <link rel="icon" href="img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/all.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="body_bg">
            <!--::header part start::-->
            <?php include("incluidos/barra_menu.php");?>
                <!-- Header part end-->

                <!-- banner part start-->
                <section class="banner_part">
                    <div class="container">
                        <div id="block" data-vide-bg="video/video_fondo" data-vide-options="position: 0% 50%" class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <?php echo "<h1>Bienvendido! $user </h1>" ?>
                                            <p>Un juego de aventuras, con retos a cumplir y criaturas </p>
                                            <a href="https://www.youtube.com/watch?v=rqRSUm_Gks8" class="btn_1">Ver Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner part start-->

                <!--::client logo part end::-->
                <section class="client_logo">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_1.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_2.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_3.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_4.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_5.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_1.png" alt="">
                                    </div>
                                    <div class="single_client_logo">
                                        <img src="img/client_logo/client_logo_2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--::client logo part end::-->

                <!-- about_us part start-->
                <section class="about_us section_padding">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-5 col-lg-6 col-xl-6">
                                <div class="learning_img">
                                    <img src="img/about_img.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-6 col-xl-5">
                                <div class="about_us_text">
                                    <h2>Crea tu Propia Historia</h2>
                                    <p>En este Juego podras crear tu propia aventura, mejorar tu personaje, mejorar sus Stacks y muchas cosas mas, quieres probarlo? </p>
                                    <a href="http://www.mediafire.com/folder/738wlmc7g353c/beko" class="btn_1">Descargar ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about_us part end-->

                <!-- use sasu part end-->

                <!-- use sasu part end-->

                <!-- gallery_part part start-->

                <!-- gallery_part part end-->

                <!-- use sasu part end-->

                <!-- use sasu part end-->

                <!-- pricing part start-->

                <!-- pricing part end-->

                <!--::footer_part start::-->

                <!--::footer_part end::-->
        </div>

        <!-- jquery plugins here-->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="js/masonry.pkgd.js"></script>
        <!-- particles js -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- slick js -->
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.vide.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>

    </html>