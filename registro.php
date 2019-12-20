<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

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
    <!--===============================================================================================-->
</head>

<body style="background-color: #999999;">

    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('img/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" method="POST" action="agregar_usuario.php" id="alta">
                    <span class="login100-form-title p-b-59">
						Quieres ser Parte? Registrate.
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Ingrese su Nombre">
                        <span class="label-input100">Nombre </span>
                        <input class="input100" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Ingrese un Email">
                        <span class="label-input100">E-mail </span>
                        <input class="input100" type="text" name="email" id="email" placeholder="Ingrese un Emai...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Ingrese un Usuario">
                        <span class="label-input100">Nombre de Usuario </span>
                        <input class="input100" type="text" name="user" id="user" placeholder="Ingrese un Usuario...">
                        <span class="focus-input100"></span>
                    </div>

                    <div  class="wrap-input100 validate-input" data-validate="Ingrese una Contraseña">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" id="pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>
                    <div  class="wrap-input100 validate-input" data-validate="Confirmar Contraseña">
                        <span class="label-input100">Confirmar Password</span>
                        <input class="input100" type="password" name="confirm_pass" id="confirm_pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div style="border-radius: 0px;" class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button style="border-radius: 0px;" class="login100-form-btn" type="submit">
                                Registrase
                            </button>
                        </div>
                        <div style="border-radius: 0px;" class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <a href="index.php" class="login100-form-btn2">Volver</a>
                        </div>
                        <br>
                        <br>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>