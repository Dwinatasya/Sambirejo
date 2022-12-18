<!DOCTYPE html>
<html lang="en">

<head>

    <title>Sambirejo.Wisata</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">



</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div id="contact-form" role="form">
                        <div class="col-md-12 col-sm-12">
                            <div class="footer-info">
                                <form class="form-signin" action="<?php echo base_url('login/login_aksi'); ?>" method="post">
                                    <br></br>
                                    <br></br>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                                    <input type="text" name="pass" class="form-control" placeholder="Password" required>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="images/contact-1-600x400.png" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>