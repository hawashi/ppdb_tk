<?php
require 'function.php';
    if (isset($_POST['daftar'])) {
        $nama_admin = $_POST['nama_admin'];
        $username = $_POST['username'];
        $no_kk = $_POST['no_kk'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO admin VALUES ('', '$nama_admin', '$username', '$no_kk', '$password')";
        mysqli_query($conn, $query);
        echo "<script>
            alert('Berhasil Daftar Sebagai Admin');
            document.location.href = 'login_admin.php';
        </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
     <!-- Custom fonts for this template -->
     <link href="admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="admin/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-success">

<!-- <section class="content container">
        
        <div class="card shadow">
            <div class="card-header bg-success font-weight-bold text-light">
              <i class="fa fa-user-plus"></i>  <span>Formulir Pendaftaran Admin</span>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_admin">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Username</label>
                                <input autocomplete="off" type="text" class="form-control" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Nomor Kartu Keluarga</label>
                            <input autocomplete="off" type="text"  class="form-control" name="no_kk">
                        </div>
                        <div class="col-md-6">
                            <label for="">Password</label>
                            <input autocomplete="off" type="password" class="form-control" name="password">
                        </div>
                    </div>
                   
                    
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section> -->
    <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
            
            <div class="col-lg-9">
                <div class="p-5">
                    <div class="text-center">
                    <div class="logo text-center">
                                        <a href="#">
                                            <img src="assets3/img/logo_sekolah.png" alt="" width="125px">
                                        </a>
                     </div>    
                    <hr>
                        <h1 class="h4 text-black-900 mb-4">Register Adminisrator</h1>
                    </div>
                    <form action="" method="post" class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Nama" name="nama_admin">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="No Kartu Keluarga" name="no_kk">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Password" name="password">
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary btn-user btn-block" name="daftar"><i class="fa fa-edit"></i> Daftar</button>

                        <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a> -->
                        <!-- <hr> -->
                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a> -->
                    </form>
                    <hr>
                    <!-- <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div> -->
                    <div class="text-center">
                        <a class="small" href="login_admin.php">Already have an account? Login!</a>
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