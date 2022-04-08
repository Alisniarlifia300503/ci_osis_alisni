<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info"
style="
      background-image: url('data:image/jpeg;base64,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');
      height: 10vh;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <form class="user" action="<?=base_url("Auth/proses_login")?>" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" required="" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">Login</button>
                                        <!-- <a href="<?=base_url("") ?>" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

</body>

</html>