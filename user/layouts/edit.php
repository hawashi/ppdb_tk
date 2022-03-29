<?php
// include database connection file
include_once("function.php");
 
if (isset($_POST['id'])) {
    if ($_POST['id'] != "") {
        // Mengambil data dari form lalu ditampung didalam variabel
        $id = $_POST['id'];
        $nama = $_POST['nama_lengkap'];
        $no_kk = $_POST['no_kk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat']; 
        $agama = $_POST['agama']; 
        $nama_ortu = $_POST['nama_ortu']; 
        $no_hp = $_POST['no_hp']; 
        $program = $_POST['nama_program'];
        $nama_ortu = $_POST['nama_ortu'];
        $no_hp = $_POST['no_hp'];
        $foto_kk = $_FILES['foto_kk']['name'];
        $foto_size_kk = $_FILES['foto_kk']['size'];
        $foto_akte = $_FILES['foto_akte']['name'];
        $foto_size_akte = $_FILES['foto_akte']['size'];
        $foto_anak = $_FILES['foto_anak']['name'];
        $foto_size_anak = $_FILES['foto_anak']['size'];
        
       

    }else{
        header("location:index.php");
    }

    // Mengecek apakah file lebih besar 2 MB atau tidak
    if ($foto_size_kk > 9999999) {
	   // Jika File lebih dari 2 MB maka akan gagal mengupload File
       header("location:index.php?pesan=size");

    }else{

	   // Mengecek apakah Ada file foto kk yang diupload atau tidak
       if ($foto_kk != "") {

		  // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
          $ekstensi_izin = array('png','jpg','jepg');
		  // Memisahkan nama file dengan Ekstensinya
          $pisahkan_ekstensi = explode('.', $foto_kk); 
          $ekstensi = strtolower(end($pisahkan_ekstensi));
		  // Nama file yang berada di dalam direktori temporer server
          $file_tmp = $_FILES['foto_kk']['tmp_name'];   
		  // Membuat angka/huruf acak berdasarkan waktu diupload
        //   $tanggal = md5(date('Y-m-d h:i:s'));
		  // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $foto_kk; 

		  // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT foto_kk FROM pendaftar WHERE id='$id'";
            $data_foto = mysqli_query($conn, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("file/".$foto_lama['foto_kk']);    

			// Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'file/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table Pendaftar
            // $conn, "UPDATE pendaftar SET nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_kk='$foto_kk', foto_akte='$foto_akte', foto_anak='$foto_anak', WHERE id=$id"
            $query = mysqli_query($conn, "UPDATE pendaftar SET  nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_kk='$foto_nama_new' WHERE id='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
            	header("location:index.php?pesan=berhasil");
            } else {
                header("location:index.php?pesan=gagal");
            }

        } else { 
        	// Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
        	header("location:index.php?pesan=ekstensi");        }
            
            // Mengecek apakah Ada file foto akte yang diupload atau tidak
        }else if ($foto_akte != "")  {

            // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
            $ekstensi_izin = array('png','jpg','jepg');
            // Memisahkan nama file dengan Ekstensinya
            $pisahkan_ekstensi = explode('.', $foto_akte); 
            $ekstensi = strtolower(end($pisahkan_ekstensi));
            // Nama file yang berada di dalam direktori temporer server
            $file_tmp = $_FILES['foto_akte']['tmp_name'];   
            // Membuat angka/huruf acak berdasarkan waktu diupload
          //   $tanggal = md5(date('Y-m-d h:i:s'));
            // Menyatukan angka/huruf acak dengan nama file aslinya
            $foto_nama_new = $foto_akte; 
  
            // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
            if(in_array($ekstensi, $ekstensi_izin) === true)  {
  
              // Mengambil data siswa_foto didalam table siswa
              $get_foto = "SELECT foto_akte FROM pendaftar WHERE id='$id'";
              $data_foto = mysqli_query($conn, $get_foto); 
              // Mengubah data yang diambil menjadi Array
              $foto_lama = mysqli_fetch_array($data_foto);
  
              // Menghapus Foto lama didalam folder FOTO
              unlink("file/".$foto_lama['foto_akte']);    
  
              // Memindahkan File kedalam Folder "FOTO"
              move_uploaded_file($file_tmp, 'file/'.$foto_nama_new);
  
              // Query untuk memasukan data kedalam table Pendaftar
              // $conn, "UPDATE pendaftar SET nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_kk='$foto_kk', foto_akte='$foto_akte', foto_anak='$foto_anak', WHERE id=$id"
              $query = mysqli_query($conn, "UPDATE pendaftar SET  nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_akte='$foto_nama_new' WHERE id='$id'");
  
              // Mengecek apakah data gagal diinput atau tidak
              if($query){
                  header("location:index.php?pesan=berhasil");
              } else {
                  header("location:index.php?pesan=gagal");
              }
  
          } else { 
              // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
              header("location:index.php?pesan=ekstensi");        }
            //   Mengecek apakah Ada file foto anak yang diupload atau tidak
          } else if ($foto_anak != "") {
          // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
          $ekstensi_izin = array('png','jpg','jepg');
          // Memisahkan nama file dengan Ekstensinya
          $pisahkan_ekstensi = explode('.', $foto_anak); 
          $ekstensi = strtolower(end($pisahkan_ekstensi));
          // Nama file yang berada di dalam direktori temporer server
          $file_tmp = $_FILES['foto_anak']['tmp_name'];   
          // Membuat angka/huruf acak berdasarkan waktu diupload
        //   $tanggal = md5(date('Y-m-d h:i:s'));
          // Menyatukan angka/huruf acak dengan nama file aslinya
          $foto_nama_new = $foto_anak; 

          // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
          if(in_array($ekstensi, $ekstensi_izin) === true)  {

            // Mengambil data siswa_foto didalam table siswa
            $get_foto = "SELECT foto_anak FROM pendaftar WHERE id='$id'";
            $data_foto = mysqli_query($conn, $get_foto); 
            // Mengubah data yang diambil menjadi Array
            $foto_lama = mysqli_fetch_array($data_foto);

            // Menghapus Foto lama didalam folder FOTO
            unlink("file/".$foto_lama['foto_anak']);    

            // Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'file/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table Pendaftar
            // $conn, "UPDATE pendaftar SET nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_kk='$foto_kk', foto_akte='$foto_akte', foto_anak='$foto_anak', WHERE id=$id"
            $query = mysqli_query($conn, "UPDATE pendaftar SET  nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_anak='$foto_nama_new' WHERE id='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                header("location:seleksi.php?pesan=berhasil");
            } else {
                header("location:index.php?pesan=gagal");
            }

        } else { 
            // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
            header("location:index.php?pesan=ekstensi");        }
          //   Mengecek apakah Ada file foto anak yang diupload atau tidak
        } else {

    	// Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
          $query = mysqli_query($conn, "UPDATE pendaftar SET  nama_lengkap='$nama',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp' WHERE id='$id'");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
                // header("location:index.php?pesan=berhasil");
                // header("location:index.php?page=seleksi");
                echo "<script>
                alert('Data Berhasil Diubah')
            </script>";
            header("location:index.php?page=seleksi");
            }else {
                header("location:index.php?pesan=gagal");
            }
        }

    }
}else{
    // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman index
    // header("location:edit.php?id=id");
    // echo "ID tidak ditemukan";
}

?>
<?php
// Display selected user data based on id
// Getting id from url
// include_once("function.php");
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama_lengkap'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tgl_lahir = $user_data['tgl_lahir'];
    $alamat = $user_data['alamat'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
    $agama = $user_data['agama'];
    $no_kk = $user_data['no_kk'];
    $nama_program = $user_data['nama_program'];
    $nama_ortu = $user_data['nama_ortu'];
    $no_hp = $user_data['no_hp'];
    $foto_kk = $user_data['foto_kk'];
    $foto_akte = $user_data['foto_akte'];
    $foto_anak = $user_data['foto_anak'];
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

    <title>PPDB ADMIN</title>

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN PPDB</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Persentase Program</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=seleksi">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Mulai Seleksi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=terima">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Murid diterima</span></a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

      <section class="content">
        
        <div class="card shadow">
            <div class="card-header bg-success font-weight-bold text-light">
              <i class="fa fa-user-plus"></i>  <span>Edit Formulir Pendaftaran</span>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap" value=<?php echo $nama; ?> disabled>
                                <!-- <input type="hidden" name="id" value=<?php echo $id;?>> -->
                                <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tempat lahir</label>
                                <input autocomplete="off" type="text" class="form-control" name="tempat_lahir" value=<?php echo $tempat_lahir; ?> disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Tanggal lahir</label>
                            <input autocomplete="off" type="date"  class="form-control" name="tgl_lahir" value=<?php echo $tgl_lahir; ?> disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <input autocomplete="off" type="text" class="form-control" name="alamat" value=<?php echo $alamat; ?> disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Jenis_kelamin</label>
                            <select id="" class="form-control" name="jenis_kelamin" value=<?php echo $jenis_kelamin; ?> disabled>
                               <option value="Laki-laki">Laki-laki</option>
                               <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Agama</label>
                            <select id="" class="form-control" name="agama" value=<?php echo $agama; ?> disabled>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6 mb-2">
                            <label for="">No Kartu Keluarga</label>
                            <input autocomplete="off" type="text"  class="form-control" name="no_kk" value=<?php echo $no_kk; ?> disabled>
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="">Program</label>
                            <select id="" class="form-control" name="program">
                              <option value="Taman Kanak-Kanak">Taman Kanak-Kanak</option>
                              <option value="Play Group">Play Group</option>
                              <option value="Penitipan Anak">Anak</option>
                            </select>
                        </div> -->
                        <div class="col-md-6">
                            <label for="">Program</label>
                            <select id="" class="form-control" name="nama_program" value=<?php echo $nama_program; ?> disabled>
                            <option value="Taman Kanak-kanak">Taman Kanak-kanak</option>
                              <option value="Play Group">Play Group</option>
                              <option value="Penitipan Anak">Penitipan Anak</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Nama Ayah / Wali</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nama_ayah" value=<?php echo $nama_ayah; ?> disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp" value=<?php echo $no_hp; ?> disabled>
                        </div>
                    </div>
                   

                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Kartu Keluarga</span>
                      <img src="../../file/<?php echo $foto_kk; ?>">
                    </div>
                    <!-- <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_kk" value=<?php echo $foto_kk; ?>>
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div> -->
                  </div>
                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Akte Kelahiran</span>
                      <img src="../../file/<?php echo $foto_akte; ?>">
                    </div>
                    <!-- <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_akte" name="foto_akte">
                      <label class="custom-file-label selected" for="foto_akte">Pilih file</label>
                    </div> -->
                  </div>
                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Calon Siswa </span>
                      <img src="../../file/<?php echo $foto_anak; ?>">
                    </div>
                    <!-- <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_anak" value=<?php echo $foto_anak; ?>>
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div> -->
                  </div>

                    <!-- <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Foto Kartu Keluarga</label>
                            <input autocomplete="off" type="file"  class="form-control" name="foto_kk">
                        </div>
                        <div class="col-md-6">
                            <label for="">Foto Akte kelahiran</label>
                            <input autocomplete="off" type="file" class="form-control" name="foto_akte">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Foto Anak</label>
                            <input autocomplete="off" type="file"  class="form-control" name="foto_anak">
                        </div>
                    </div> -->
                    
                    <!-- <button type="submit" class="btn btn-primary mt-3 btn-block"><i class="fa fa-edit"></i> Simpan</button> -->
                    <button type="submit" name="terima" class="btn btn-primary mt-3 btn-block" ><i class="fas fa-check"></i> Terima </button>
                </form>
            </div>
        </div>

    </section>

    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script>
  $(function () {
    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['Rekayasa Perangkat Lunak', '<?php echo $total_rpl; ?>'], ['Teknik Komputer & Jaringan', '<?php echo $total_tkj ?>'], ['Multimedia', '<?php echo $total_mm; ?>']],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['Rekayasa Perangkat Lunak', '<?php echo $j_trpl; ?>'], ['Teknik Komputer & Jaringan', '<?php echo $j_ttkj ?>'], ['Multimedia', '<?php echo $j_tmm; ?>']],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart-terima', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['Pendaftat Ditolah ', '<?php echo $j_tolak; ?>'],],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart-tolak', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    

    

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }

 
</script>

</body>

</html>



