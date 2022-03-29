<?php if(!empty($p_user)) :?>
    
          <!-- Widget: user widget style 1 -->
          
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col mr-2">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Nama : <?php echo $_SESSION['nama'] ?></div>
                                        <?php foreach($user as $usr) : ?>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Status : <?php echo $usr['stat'];?></div>
                                        <?php endforeach ?>
                                        <hr class="sidebar-divider">
                                        <?php foreach($user as $usr) : ?>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-user"></i> Nama Lengkap : <?php echo $usr['nama_lengkap']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-university"></i> No Kartu Keluarga : <?php echo $usr['no_kk']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-tasks"></i> Nama Orang Tua : <?php echo $usr['nama_ayah']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-arrow-right"></i> Program yang dipilih : <?php echo $usr['nama_program']; ?></div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          <!-- /.widget-user -->
        
  

    <?php elseif( !empty($terima)) : ?>
      
          
          <div class="col-xl-16 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="widget-user-header bg-teal">
                                        <!-- <div class="widget-user-image">
                                          <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg" alt="User Avatar">
                                        </div> -->
                                        <!-- /.widget-user-image -->
                                        <h3 class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $_SESSION['nama'] ?></h3>
                                          <?php foreach($terima as $trm) : ?>
                                              <h5 class="h3 mb-0 font-weight-bold text-gray-800">Status : Diterima</h5>
                                              <hr class="sidebar-divider">
                                              <h6 class="widget-user-desc"><a href="cetak_bukti.php?id=<?php echo $trm['id'] ?>" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  Cetak</a></h6>
                                              <!-- <h6 class="widget-user-desc"><a href="pdf_bukti.php?id=<?php echo $trm['id'] ?>" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i>  PDF</a></h6> -->
                                          <?php endforeach ?>
                                      </div>
                                            <div class="box-footer no-padding">
                                            <?php foreach($terima as $trm) : ?>
                                              <!-- <ul class="navbar-nav"> -->
                                              <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-user"></i> Nama Lengkap : <?php echo $trm['nama_lengkap']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-university"></i> No Kartu Keluarga : <?php echo $trm['no_kk']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-tasks"></i> Nama Orang Tua : <?php echo $trm['nama_ayah']; ?></div>
                                            <div class="text-s font-weight-bold text-success mb-1">
                                            <i class="fa fa-arrow-right"></i> Program yang dipilih : <?php echo $trm['nama_program']; ?></div>
                                                    <!-- <li class="nav-item active sidebar-brand-text"><i class="fa fa-user"></i> Nama Lengkap <span> <?php echo $trm['nama_lengkap']; ?></span></li>
                                                    <li class="nav-item active"><i class="fa fa-university"></i> Nama Orang Tua <span> <?php echo $trm['nama_ayah'] ?></span></li>
                                                    <li class="nav-item active"><i class="fa fa-tasks"></i> No Kartu Keluarga  <span> <?php echo $trm['no_kk'] ?> </span></li>
                                                    <li class="nav-item active"><i class=" fa-hand-o-righ"></i> Diterima pada program <span> <?php echo $trm['nama_program'] ?></span></li>         
                                              </ul> -->
                                              <?php endforeach ?>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
          <!-- /.widget-user -->
        </div>
    </div>

<?php elseif( empty($j_user)) : ?>
    <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              
              <h3 class="box-title"><i class="fa fa-bullhorn"></i>
Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
              <h4>Anda Belum  Mengisi Data </h4>
                <p>
                    Anda Belum Mengisi Data Formulir Pendaftaran !!, Silahkan Isi Data Anda Disini <br/><a href="index.php?page=daftar">Register</a>
                </p>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      
    </div>

      <?php endif ?>