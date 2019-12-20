<?php
session_start();
$user = $_SESSION['username'];
include 'conexion.php';
include 'seguridad.php';

$user2 = $_POST['user'];

$player = array('oro','nivel','armadura','ataque');

$texto = array('oro','nivel','armadura','ataque');

$cantidad = count($player);

$oro = "oro";

$sql = "SELECT * FROM `stacks_player` WHERE `user` = '$user2'";
$query = mysqli_query($conexion, $sql);



//$consulta = mysqli_query($conexion, $query);

 ?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GGWP</title>
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

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/animate.css">

    <body style="background-image: url(img/breadcrumb.png);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <?php include("incluidos/barra_menu.php");?>
            <!-- Header part end-->

            <!-- breadcrumb start-->
            <section style="background-color: rgba(0, 0, 0, 0);" class="breadcrumb ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="max-height: 300px;" class="breadcrumb_iner text-center">
                                <div class="breadcrumb_iner_item">
                                    <?php echo "<h2>Perfil de $user2 </h2>"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb start-->
            <div style="width:250px;">
                <form action="buscador_func.php" method="POST">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input name="user" id="user" type="text" class="form-control" placeholder='Buscar Usuario' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar Usuario'">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!--::client logo part end::-->
            <section class="client_logo">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="owl-carousel d-flex justify-content-between">

                                <?php
                        for ($i=0; $i < $cantidad; $i++) {

                        echo '
                        <div style="padding: 10px;background-color: white;margin: 10px;border-radius: 5px; border: 2px solid white;" class="single_client_logo">

                            <img src="img/client_logo/logo-'.$i.'.png" alt="">';
                            echo "&nbsp&nbsp&nbsp";
                                foreach ($query as $fila) {
                                  echo $texto[$i].": &nbsp".$fila[$player[$i]];
                                }

                        echo '</div>';
                        }
                          ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--::client logo part end::-->

            <!-- use sasu part end-->

            <!--::about_us part end::-->

            <!--::footer_part start::-->
            <?php //    include("incluidos/footer.php") ?>
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
                <script src="js/mail-script.js"></script>
                <!-- custom js -->
                <script src="js/custom.js"></script>
    </body>

</html>