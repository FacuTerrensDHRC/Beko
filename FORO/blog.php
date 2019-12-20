<?php
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
  	$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];

	}
?>
    <!doctype html>
    <html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>gaming</title>
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
        <!--::header part start::-->
        <?php include("incluidos/barra_menu.php");?>

            <!-- Header part end-->

            <!-- breadcrumb start-->
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb_iner text-center">
                                <div class="breadcrumb_iner_item">
                                    <h2>Foro</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- breadcrumb start-->

            <!--================Blog Area =================-->
            <section class="blog_area section_padding">
                <div class="container">

                    <div class="div2">
                        <div class="blog_right_sidebar">

                            <a href="formulario2.php" class="button rounded-0 primary-bg text-white w-100 btn_1">crear foro</a>

                        </div>
                    </div>

                    <tr>
                        <td>
                            <div class="blog_details">

                                <ul>
                                    <li>
                                        <h3><?php echo "$autor"; ?></h3></li>
                                    <li>
                                        <h5><?php echo "$titulo"; ?></h5></li>
                                    <li>
                                        <p>
                                            <?php echo "$mensaje"; ?>
                                        </p>
                                    </li>
                                </ul>

                                <ul class="blog-info-link">
                                    <li>
                                        <?php echo "<a href='foro.php?id=$id'>ver</a>";?></li>

                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo "$respuestas"; ?></a></li>
                                </ul>
                            </div>
                        </td>

                        <td>
                            <div class="blog_details">

                                <ul>
                                    <li>
                                        <h3><?php echo "$autor"; ?></h3></li>
                                    <li>
                                        <h5><?php echo "$titulo"; ?></h5></li>
                                    <li>
                                        <p>
                                            <?php echo "$mensaje"; ?>
                                        </p>
                                    </li>
                                </ul>

                                <ul class="blog-info-link">
                                    <li>
                                        <?php echo "<a href='foro.php?id=$id'>ver</a>";?></li>

                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo "$respuestas"; ?></a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="blog_details">

                                <ul>
                                    <li>
                                        <h3><?php echo "$autor"; ?></h3></li>
                                    <li>
                                        <h5><?php echo "$titulo"; ?></h5></li>
                                    <li>
                                        <p>
                                            <?php echo "$mensaje"; ?>
                                        </p>
                                    </li>
                                </ul>

                                <ul class="blog-info-link">
                                    <li>
                                        <?php echo "<a href='foro.php?id=$id'>ver</a>";?></li>

                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo "$respuestas"; ?></a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="blog_details">

                                <ul>
                                    <li>
                                        <h3><?php echo "$autor"; ?></h3></li>
                                    <li>
                                        <h5><?php echo "$titulo"; ?></h5></li>
                                    <li>
                                        <p>
                                            <?php echo "$mensaje"; ?>
                                        </p>
                                    </li>
                                </ul>

                                <ul class="blog-info-link">
                                    <li>
                                        <?php echo "<a href='foro.php?id=$id'>ver</a>";?></li>

                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo "$respuestas"; ?></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </div>
                </div>
                <div class="col-lg-4">

                </div>
                </div>
                </div>
            </section>
            <!--================Blog Area =================-->

            <!--::footer_part start::-->
            <?php include("incluidos/footer.php") ?>
                <!--::footer_part end::-->
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