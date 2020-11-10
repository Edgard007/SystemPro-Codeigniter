<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicia Sesion</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url("recursos/vendor/fontawesome-free/css/all.min.css"); ?>"  rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url ( "recursos/css/sb-admin.min.css"); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card border-0 shadow-lg my-5 ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Inicio de Sesion</h1>
                                </div>
                                <form class="user" action="Login/Login" method="post" name="frmLogin" id="frmLogin">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="user" name="user" aria-describedby="emailHelp" placeholder="User">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    </div>

                                    <input type="submit" value="Login" name="Login" class="form-control btn btn-outline-primary">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="<?php echo base_url ( "recursos/img/logo.png");?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url( "recursos/vendor/jquery/jquery.min.js"); ?>" ></script>
<script src="<?php echo base_url("recursos/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>" ></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url("recursos/vendor/jquery-easing/jquery.easing.min.js"); ?>" ></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url("recursos/js/sb-admin.min.js"); ?>" ></script>

</body>

</html>