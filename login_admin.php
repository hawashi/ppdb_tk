<?php 
session_start();
if (isset($_SESSION['login_user'])) {
    header("Location:user/layouts/index.php");
}

if (isset($_SESSION['login_admin'])) {
    header("Location:admin/layouts/index.php");
}

require 'function.php';


if (isset($_POST['login'])) {
    if (login($_POST) == "user_login") {
        header("Location:user/layouts/index.php");
    }

    elseif(login($_POST) == "admin_login") {
        header("Location:admin/layouts/index.php");
    }

    else {
        echo "<script>
            alert('Username / Password Kamu Salah');
        </script>";
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-10 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <div class="logo text-center">
                                        <a href="#">
                                            <img src="assets3/img/logo_sekolah.png" alt="" width="100px">
                                        </a>
                                    </div>
                                    <hr>
                                        <h1 class="h4 text-gray-900 mb-4">Login Adminisrator</h1>
                                    </div>
                                    <form action="" method="post" onSubmit="return validasi()" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="no_kk" name="no_kk" placeholder="Masukkan No KK"
                                                ">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <!-- <a href="index.html" class="btn btn-primary btn-user btn-block" name="login">
                                            Login
                                        </a> -->
                                        <button  type="submit" class="btn btn-primary btn-user btn-block" name="login"
                                        >
                                            Log In
                                        </button>
                                        <hr>
                                       
                                    </form>
                                    
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <!-- <a class="small" href="admin.php">Register Admin!</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/assets/js/sb-admin-2.min.js"></script>

</body>

</html>