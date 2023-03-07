<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-grey">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <?php
                if (!empty(session()->getFlashdata("error"))):
                    ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata("error")?>
                    </div>
                    <?php endif?>
                <div class="row justify-content-center">
                  <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                            </div>
                            <form class="user" method="post" action="saveregister">
                                <div class="form-group row">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-user" name="nik" id="nik" placeholder="nik" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="username" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="telp" required>
                                    </div>
                                </div>
                           
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password" required>
                                    </div> 
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password2"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account!!
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah Punya Akun? Login Disini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>