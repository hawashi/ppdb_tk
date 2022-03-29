<?php 
session_start();
if (isset($_SESSION['login_user'])) {
    header("Location:user/layouts/index.php");
}

// if (isset($_SESSION['login_admin'])) {
//     header("Location:admin/layouts/index.php");
// }

require 'function.php';

if (isset($_POST['daftar'])) {
// var_dump($_POST);
   if (register($_POST) > 0) {
       echo "<script>
                alert('Anda Berhasil Registrasi, Silahkan Login Untuk Mengisi Data');
            </script>";
   }
}

if (isset($_POST['login'])) {
    if (login($_POST) == "user_login") {
        header("Location:user/layouts/index.php");
    }

    // elseif(login($_POST) == "admin_login") {
    //     header("Location:admin/layouts/index.php");
    // }

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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sekolah Islam Bina Insani</title>
    <meta
      name="description"
      content="Free Bootstrap Theme by BootstrapMade.com"
    />
    <meta
      name="keywords"
      content="free website templates, free bootstrap themes, free template, free bootstrap, free website template"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans"
    />
    <link rel="stylesheet" type="text/css" href="assets3/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="assets3/css/fontawesome.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets3/css/fontawesome.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets3/css/imagehover.min.css" />
    <link rel="stylesheet" type="text/css" href="assets3/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets3/css/animate.css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets3/css/animate.css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets3/aos/aos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    

    <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  </head>

  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h4>SEKOLAH ISLAM BINA INSANI</h4>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#banner">Beranda</a></li>
            <!-- <li><a href="#organisations">Profile</a></li> -->

            <li><a href="#feature">Program</a></li>
            <li><a href="#work-shop">Persyaratan</a></li>
            <li><a href="#courses">Kegiatan</a></li>
            <li><a href="#testimonial">Kontak</a></li>
            <li class="btn-trial">
            
               
              <a href="#" data-target="#login" data-toggle="modal">Log in</a>
             
            </li>
            <!-- <li class="btn-trial"><a href="pendaftaran.php">DAFTAR</a></li> -->
            
            <!-- <li class="btn-trial"><a href="logout.php">Logout</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "tambah"){
              echo "<div class='text-center alert alert-success'>DATA ANDA SUDAH TERSIMPAN!</div>";
          
            }
          }
    ?>
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <div class="logo text-center">
                    <a href="#">
                        <img src="assets3/img/logo_sekolah.png" alt="" width="100px">
                    </a>
                </div>
            <!-- <h4 class="modal-title text-center form-title">Login</h4> -->
          </div>
          <div class="modal-body padtrbl">
            <div class="login-box-body">
              <p class="h3 login-box-msg">Silahkan Login</p>
              <div class="form-group">
                <form action="" method="post" onSubmit="return validasi()">
                  <div class="form-group has-feedback">
                    <!----- username -------------->
                    <label>No Kartu Keluarga</label>
                    <input
                      class="form-control"
                      placeholder="No KK"
                      id="no_kk"
                      type="text"
                      autocomplete="off"
                      name="no_kk"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: red;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginid"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-user form-control-feedback"
                    ></span> -->
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <label>Password</label>
                    <input
                      class="form-control"
                      placeholder="Password"
                      id="password"
                      type="password"
                      autocomplete="off"
                      name="password"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: grey;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginpsw"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-lock form-control-feedback"
                    ></span> -->
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="checkbox icheck">
                        <!-- <label>
                          <input type="checkbox" id="loginrem" /> Remember Me
                        </label> -->
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <button
                        type="submit"
                        class="btn btn-green btn-block btn-flat"
                        name="login"
                      >
                        Log In
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Modal box daftar-->
   <div class="modal fade" id="daftar" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <div class="logo text-center">
                    <a href="#">
                        <img src="assets3/img/logo_sekolah.png" alt="" width="100px">
                    </a>
                </div>
            <!-- <h4 class="modal-title text-center form-title">Login</h4> -->
          </div>
          <div class="modal-body padtrbl">
            <div class="login-box-body">
              <p class="h3 login-box-msg">Daftar Akun PPDB</p>
              <div class="form-group">
                <form action="" method="post">
                <div class="row">  
                <div class="form-group has-feedback">
                    <!----- username -------------->
                    <label>Nama</label>
                    <input
                      class="form-control"
                      placeholder="Masukkan Nama"
                      id="nama"
                      type="text"
                      autocomplete="off"
                      name="nama"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: red;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginid"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-user form-control-feedback"
                    ></span> -->
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <label>No Kartu Keluarga</label>
                    <input
                      class="form-control"
                      placeholder="Masukkan No Kartu Keluarga"
                      id="no_kk"
                      type="text"
                      autocomplete="off"
                      name="no_kk"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: grey;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginpsw"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-user form-control-feedback"
                    ></span> -->
                  </div>
                  </div>
                <div class="row">  
                <div class="form-group has-feedback">
                    <!----- username -------------->
                    <label>Password</label>
                    <input
                      class="form-control"
                      placeholder="Password"
                      id="password"
                      type="password"
                      autocomplete="off"
                      name="password"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: red;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginid"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-lock form-control-feedback"
                    ></span> -->
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <label>Konfirmasi Password</label>
                    <input
                      class="form-control"
                      placeholder="Ketik Ulang Password"
                      id="confirm_password"
                      type="password"
                      autocomplete="off"
                      name="password_confirmation"
                    />
                    <span
                      style="
                        display: none;
                        font-weight: bold;
                        position: absolute;
                        color: grey;
                        position: absolute;
                        padding: 4px;
                        font-size: 11px;
                        background-color: rgba(128, 128, 128, 0.26);
                        z-index: 17;
                        right: 27px;
                        top: 5px;
                      "
                      id="span_loginpsw"
                    ></span>
                    <!---Alredy exists  ! -->
                    <!-- <span
                      class="glyphicon glyphicon-lock form-control-feedback"
                    ></span> -->
                  </div>
                  
                  <button
                        type="submit"
                        class="btn btn-green btn-block btn-flat"
                        name="daftar"
                      >
                        Daftar
                      </button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner" id="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <!-- <h2 class="text-dec">Trust & Quality</h2> -->
                <img src="assets3/img/logo_sekolah.png" alt="Logo" width="100" />
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">
                   Penerimaan Peserta Didik Baru (PPDB)
                </p>
                <!-- <p class="small-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Laudantium enim repellat sapiente quos architecto<br />Laudantium
                  enim repellat sapiente quos architecto
                </p> -->
                <a href="#" class="btn get-quote" data-target="#daftar" data-toggle="modal">DAFTAR</a>
              </div>
              <a href="#feature" class="mouse-hover">
                <div class="mouse"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Program</h2>
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Exercitationem nesciunt vitae,<br />
              maiores, magni dolorum aliquam.
            </p> -->
            <hr class="bottom-line" />
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Play Group</h4>
                  <p>
                    Program pendidikan anak usia dini pada jalur pendidikan nonformal yang menyelenggarakan pendidikan bagi anak usia di bawah lima tahun.
                  </p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-users"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Taman Kanak-kanak</h4>
                  <p>
                    Taman Kanak-Kanak adalah jenjang pendidikan anak usia dini dalam bentuk pendidikan formal. 
                  </p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-child"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Penitipan Anak</h4>
                  <p>
                   Tempat pengasuhan anak yang terpercaya apabila Orang tua yang sibuk dan khawatir meninggalkan anak di rumah.
                  </p>
                  <p>Berikut <a href="#" data-target="#panak" data-toggle="modal">Fasilitas</a></p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
    <section id="organisations" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="orga-stru">
                <h3><?php 
					$jumlah_pg = mysqli_query($conn,"SELECT * from pendaftar where nama_program='Play Group' AND stat = 'Diterima'");
					echo mysqli_num_rows($jumlah_pg);
					?></h3>
                <p>Murid Play Group</p>
                <i class="fa fa-male"></i>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="orga-stru">
                <h3><?php 
					$jumlah_tk = mysqli_query($conn,"SELECT * from pendaftar where nama_program='Taman Kanak-kanak' AND stat = 'Diterima'");
					echo mysqli_num_rows($jumlah_tk);
					?></h3>
                <p>Murid Taman Kanak-kanak</p>
                <i class="fa fa-male"></i>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="orga-stru">
                <h3><?php 
					$jumlah_pa = mysqli_query($conn,"SELECT * from pendaftar where nama_program='Penitipan Anak' AND stat = 'Diterima'");
					echo mysqli_num_rows($jumlah_pa);
					?></h3>
                <p>Titipan Anak</p>
                <i class="fa fa-male"></i>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-info">
              <hgroup>
                <h3 class="det-txt">
                  Jumlah Murid
                </h3>
                <h4 class="sm-txt">(Update 2022)</h4>
              </hgroup>
              <h4>SEGERA DAFTARKAN PUTRA - PUTRI ANDA!!</h4>
              <p class="det-p">
               Buka Senin - Sabtu
               Pukul 07.00 - 16.00 Wita
               (Minggu & Hari Libur Tutup)
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Organisations-->
    <!--Cta-->
    <!-- <section id="cta-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-center">Subscribe Now</h2>
            <p class="cta-2-txt">
              Sign up for our free weekly software design courses, we’ll send
              them right to your inbox.
            </p>
            <div class="cta-2-form text-center">
              <form action="#" method="post" id="workshop-newsletter-form">
                <input
                  name=""
                  placeholder="Enter Your Email Address"
                  type="email"
                />
                <input
                  class="cta-2-form-submit-btn"
                  value="Subscribe"
                  type="submit"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--/ Cta-->
    <!--fasilitas-->
    <!-- <section id="cta-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="text-center">Fasilitas</h2>
            <p class="cta-2-txt">
              Sign up for our free weekly software design courses, we’ll send
              them right to your inbox.
            </p>
            
          </div>
        </div>
      </div>
    </section> -->
    <!--/fasilitas-->
    <!--work-shop-->
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Persyaratan</h2>
            <p>
              Klik Gambar untuk melihat
            </p>
            <hr class="bottom-line" />
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="#" data-target="#pg" data-toggle="modal"
            >
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-users color-green"></i>
              </div>
            </a>
              <div class="icon-text">
                <h4 class="ser-text">Play Group</h4>
              </div>
            </div>
            
          </div>
          <div class="col-md-4 col-sm-6"> <a href="#" data-target="#tk" data-toggle="modal"
            >
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-child color-green"></i>
              </div>
            </a>
              <div class="icon-text">
               <h4 class="ser-text">Taman Kanak-kanak</h4></a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <a href="#" data-target="#penitipan" data-toggle="modal"
            >
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-star color-green"></i>
              </div>
            </a>
              <div class="icon-text">
                <h4 class="ser-text">Penitipan Anak</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ work-shop-->
    <!--Modal box-->
    <div class="modal fade" id="panak" role="dialog" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <h4 class="modal-title text-center form-title">
              Fasilitas
            </h4>
          </div>
          <div class="modal-body">
            <div class="login-box-body">
              <p class="login-box-msg">Untuk Penitipan Anak</p>
              <div class="form-group">
                <ul>
                  <li>- Kamar tidur, ruang belajar dan bermain ber-AC</li>
                  <li>- Permainan Indoor</li>
                  <li>- Diawasi CCTV</li>
                  <li>- Kunjungan Dokter</li>
                  <li>- Aneka Permainan Anak</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Modal box-->
    <div class="modal fade" id="tk" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <h4 class="modal-title text-center form-title">
              Persyaratan
            </h4>
          </div>
          <div class="modal-body padtrbl">
            <div class="login-box-body">
              <p class="login-box-msg">Untuk Taman Kanak-kanak</p>
              <div class="form-group">
                <ul>
                  <li>1. Berusia 4-5 tahun untuk kelompok A dan Berusia 5-6 tahun untuk kelompok B</li>
                  <li>2. Akta kelahiran calon peserta didik baru</li>
                  <li>3. KTP orang tua</li>
                  <li>4. Kartu keluarga dan surat keterangan domisili</li>
                  <li>5. Surat keterangan tanggung jawab mutlak orang tua atau wali dari calon peserta didik baru.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Modal box-->
    <div class="modal fade" id="pg" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <h4 class="modal-title text-center form-title">
              Persyaratan
            </h4>
          </div>
          <div class="modal-body padtrbl">
            <div class="login-box-body">
              <p class="login-box-msg">Untuk Play Group</p>
              <div class="form-group">
                <ul>
                  <li>1. Fotokopi akta kelahiran anak sebanyak 2 lembar</li>
                  <li>2. Fotokopi Kartu Keluarga atau KK sebanyak 2 lembar</li>
                  <li>3. Fotokopi KTP ayah dan ibu masing-masing 2 lembar</li>
                  <li>4. Foto warna calon peserta didik ukuran 3×4 sebanyak 2 lembar</li>
                  <li>5. Foto warna ayah dan ibu ukuran 3×4 sebanyak 2 lembar</li>
                  <li>6. Fotokopi akta pernikahan orangtua sebanyak 2 lembar</li>
                 </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Modal box-->
    <div class="modal fade" id="penitipan" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
            <h4 class="modal-title text-center form-title">
              Persyaratan
            </h4>
          </div>
          <div class="modal-body padtrbl">
            <div class="login-box-body">
              <p class="login-box-msg">Untuk Penitipan Anak</p>
              <div class="form-group">
                <ul>
                  <li>1. Fotokopi akta kelahiran anak sebanyak 2 lembar</li>
                  <li>2. Fotokopi Kartu Keluarga atau KK sebanyak 2 lembar</li>
                  <li>3. Fotokopi KTP ayah dan ibu masing-masing 2 lembar</li>
                  <li>4. Foto warna calon peserta didik ukuran 3×4 sebanyak 2 lembar</li>
                  <li>5. Foto warna ayah dan ibu ukuran 3×4 sebanyak 2 lembar</li>
                  <li>6. Fotokopi akta pernikahan orangtua sebanyak 2 lembar</li>
                 </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Faculity member-->
    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Tenaga Pengajar</h2>
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Exercitationem nesciunt vitae,<br />
              maiores, magni dolorum aliquam.
            </p> -->
            <hr class="bottom-line" />
          </div>
          
          
          <div>
            <div class="pm-staff-profile-container">
              <div class="pm-staff-profile-image-wrapper text-center justifify-content-center">
                <div class="pm-staff-profile-image">
                  <!-- <div class="img-thumbnail"></div> -->
                  <img
                    src="assets3/img/ketua.jpg"
                    alt=""
                    class="img-thumbnail img-circle"
                    width="300px"
                    height="300px"
                  />
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">H. Andi Emil Salim, SE.,M.Ak.</p>
                <p class="pm-staff-profile-title">Ketua Yayasan Andi Ummuhani</p>

                <!-- <p class="pm-staff-profile-bio">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  et placerat dui. In posuere metus et elit placerat tristique.
                  Maecenas eu est in sem ullamcorper tincidunt.
                </p> -->
              </div>
            </div>
          </div>
        </div>
          
        <div class="row">
          
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container">
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img
                    src="assets3/img/nurhaeni1.png"
                    alt=""
                    class="img-thumbnail img-circle"
                    width="300px"
                    height="300px"
                  />
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Nurhaeni</p>
                <p class="pm-staff-profile-title">Pengajar</p>

                <!-- <p class="pm-staff-profile-bio">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  et placerat dui. In posuere metus et elit placerat tristique.
                  Maecenas eu est in sem ullamcorper tincidunt.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container">
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                 
                  <img
                    src="assets3/img/Khusnul.png"
                    alt=""
                    class="img-thumbnail img-circle"
                    width="135px"
                    
                  />
                  
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Khusnul Khotimah S.Pd</p>
                <p class="pm-staff-profile-title">Pengajar</p>

                <!-- <p class="pm-staff-profile-bio">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  et placerat dui. In posuere metus et elit placerat tristique.
                  Maecenas eu est in sem ullamcorper tincidunt.
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container">
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img
                    src="assets3/img/andi_fitri.png"
                    alt=""
                    class="img-thumbnail img-circle"
                    width="300px"
                    height="300px"
                  />
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Andri Fitri S.Hum</p>
                <p class="pm-staff-profile-title">Pengajar</p>

                <!-- <p class="pm-staff-profile-bio">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  et placerat dui. In posuere metus et elit placerat tristique.
                  Maecenas eu est in sem ullamcorper tincidunt.
                </p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Faculity member-->
    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2 class="white">Kontak</h2>
            <p class="white">
              <i class="fa fa-whatsapp"></i>   081242244227<br />
              <i class="fa fa-envelope"></i> sekolahislambinainsani@gmail.com
            </p>
            <hr class="bottom-line bg-white" />
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.352237814795!2d119.50647511418413!3d-5.207217153934745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee39864bbe745%3A0xec9b68eb8d8fff03!2sSekolah%20Bina%20Insani!5e0!3m2!1sen!2sid!4v1641371304773!5m2!1sen!2sid"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </section>
    <!--/ Testimonial-->
    <!--Courses-->
    <section id="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Kegiatan</h2>
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Exercitationem nesciunt vitae,<br />
              maiores, magni dolorum aliquam.
            </p> -->
            <hr class="bottom-line" />
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/12.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/15.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/10.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/14.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/8.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/7.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/13.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/5.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="assets3/img/4.jpg" class="img-responsive" />
              <figcaption>
              <img src="assets3/img/logo_sekolah.png" class="img-responsive" width="300"/>
                <!-- <h3>Course Name</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Magnam atque, nostrum veniam consequatur libero fugiat,
                  similique quis.
                </p> -->
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!--/ Courses-->
    <!--Pricing-->

    <!--/ Pricing-->
    <!--Contact-->
    <!-- <section id="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Kontak</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Exercitationem nesciunt vitae,<br />
              maiores, magni dolorum aliquam.
            </p>
            <hr class="bottom-line" />
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="col-md-6 col-sm-6 col-xs-12 left">
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control form"
                  id="name"
                  placeholder="Your Name"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  data-rule="email"
                  data-msg="Please enter a valid email"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 right">
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-xs-12">
              
              <button
                type="submit"
                id="submit"
                name="submit"
                class="form contact-form-button light-form-button oswald light"
              >
                SEND EMAIL
              </button>
            </div>
          </form>
        </div>
      </div>
    </section> -->
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
        
        <!-- End newsletter-form -->
        <ul class="social-links">
          <li>
          <a href="https://www.instagram.com/sekolah.islam.bina.insani/"><i class="fa fa-instagram fa-fw"></i></a>
           <p>@sekolah.islam.bina.insani</p>
          </li>
          <li>
            <a href="https://www.facebook.com/Sekolah-Islam-Bina-Insani-Gowa-108130971615160"><i class="fa fa-facebook fa-fw"></i></a>
          <p>Sekolah Islam Bina Insani</p>
          </li>
          <!-- <li>
            <a href="#link"><i class="fa fa-google-plus fa-fw"></i></a>
          </li>
          <li>
            <a href="#link"><i class="fa fa-dribbble fa-fw"></i></a>
          </li>
          <li>
            <a href="#link"><i class="fa fa-linkedin fa-fw"></i></a>
          </li> -->
        </ul>
        ©2022 Sekolah Islam Bina Insani. All rights reserved
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a> -->
        </div>
      </div>
    </footer>
    <!--/ Footer-->
    <script>
      AOS.init();
    </script>
    <!-- <script src="js/fontawesome.js"></script>
    <script src="js/fontawesome.min.js"></script> -->
    <script type="text/javascript">
	function validasi() {
		var nokk = document.getElementById("no_kk").value;
		var password = document.getElementById("password").value;		
		if (nokk != "" && password!="") {
			return true;
		}else{
			alert('No kk dan Password harus di isi !');
			return false;
		}
	}
 
</script>
    <script src="assets3/js/jquery.min.js"></script>
    <script src="assets3/js/jquery.easing.min.js"></script>
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/custom.js"></script>
    <script src="assets3/contactform/contactform.js"></script>
    <script src="assets3/aos/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  </body>
</html>
