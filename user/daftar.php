<?php if(empty($p_user)) : ?>
      <section class="content">
        
        <div class="card shadow">
            <div class="card-header bg-success font-weight-bold text-light">
              <i class="fa fa-user-plus"></i>  <span>Formulir Pendaftaran</span>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tempat lahir</label>
                                <input autocomplete="off" type="text" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Panggilan</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_panggilan">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Anak Ke </label>
                                <input autocomplete="off" type="number" class="form-control" name="anak_ke">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jumlah Saudara</label>
                                <input autocomplete="off" type="number" class="form-control" name="jumlah_saudara">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Status Dalam Keluarga</label>
                                <!-- <input autocomplete="off" type="text" class="form-control" name="status_dalam_keluarga"> -->
                                <select id="" class="form-control" name="status_dalam_keluarga">
                              <option value="Anak Kandung">Anak Kandung</option>
                              <option value="Anak Tiri">Anak Tiri</option>
                              <option value="Anak Angkat">Anak Angkat</option>
                              
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Tanggal lahir</label>
                            <input autocomplete="off" type="date"  class="form-control" name="tgl_lahir">
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <input autocomplete="off" type="text" class="form-control" name="alamat">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Jenis_kelamin</label>
                            <select id="" class="form-control" name="jenis_kelamin">
                               <option value="Laki-laki">Laki-laki</option>
                               <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Agama</label>
                            <select id="" class="form-control" name="agama">
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
                            <input autocomplete="off" type="text"  class="form-control" name="no_kk">
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
                            <select id="" class="form-control" name="nama_program">
                                <?php foreach($program as $jrs) : ?>
                                        <option value="<?php echo $jrs['nama_program'] ?>"><?php echo $jrs['nama_program'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Kewarganegaraan </label>
                            <input autocomplete="off" type="text"  class="form-control" name="kewarganegaraan">
                        </div>
                        <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Nama Ayah</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nama_ayah">
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp">
                        </div> -->
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Tempat Lahir Ayah</label>
                            <input autocomplete="off" type="text"  class="form-control" name="tempat_lahir_ayah">
                        </div>
                        <div class="col-md-6">
                            <label for="">Tanggal Lahir Ayah</label>
                            <input autocomplete="off" type="date" class="form-control" name="tanggal_lahir_ayah">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Agama Ayah</label>
                            <!-- <input autocomplete="off" type="text"  class="form-control" name="agama_ayah"> -->
                            <select id="" class="form-control" name="agama_ayah">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Kewarganegaraan Ayah</label>
                            <input autocomplete="off" type="text" class="form-control" name="kewarganegaraan_ayah">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Pekerjaan Ayah</label>
                            <input autocomplete="off" type="text"  class="form-control" name="pekerjaan_ayah">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pendidikan Ayah</label>
                            <input autocomplete="off" type="text" class="form-control" name="pendidikan_ayah">
                        </div>
                    </div>
                    <!-- data ibu -->
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Nama Ibu</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nama_ibu">
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp">
                        </div> -->
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Tempat Lahir Ibu</label>
                            <input autocomplete="off" type="text"  class="form-control" name="tempat_lahir_ibu">
                        </div>
                        <div class="col-md-6">
                            <label for="">Tanggal Lahir Ibu</label>
                            <input autocomplete="off" type="date" class="form-control" name="tanggal_lahir_ibu">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Agama Ibu</label>
                            <!-- <input autocomplete="off" type="text"  class="form-control" name="agama_ibu"> -->
                            <select id="" class="form-control" name="agama_ibu">
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Kewarganegaraan Ibu</label>
                            <input autocomplete="off" type="text" class="form-control" name="kewarganegaraan_ibu">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Pekerjaan Ibu</label>
                            <input autocomplete="off" type="text"  class="form-control" name="pekerjaan_ibu">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pendidikan Ibu</label>
                            <input autocomplete="off" type="text" class="form-control" name="pendidikan_ibu">
                        </div>
                    </div>

                  <div class="input-group mt-3">
                    
                      <span class="input-group-text">Foto Kartu Keluarga</span>
                  
                    <div class="custom-file ml-2">
                      <input type="file" name="foto_kk">
                      <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                    </div>
                  </div>
                  <div class="input-group mt-3">
                    
                      <span class="input-group-text">Foto Akte Kelahiran</span>
                    
                    <div class="custom-file ml-2">
                      <input type="file" name="foto_akte">
                      <!-- <label class="custom-file-label selected" for="foto_akte">Pilih file</label> -->
                    </div>
                  </div>
                  <div class="input-group mt-3">
                    
                  <span class="input-group-text">Foto Anak</span>
                    
                    <div class="custom-file ml-2">
                      <input type="file" name="foto_anak">
                      <!-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> -->
                    </div>
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
                    
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
                </form>
            </div>
        </div>

    </section>

    <?php elseif(!empty($j_usr_tolak)) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">Pengumuman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">  
                <h4>Kamu Ditolak</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Kamu Ditolak Karena Tidak Sesuai Kualifikasii, Silahkan Logout <br/>
                  <a href="../../logout.php">Logout ?</a>
                </p>
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> 

    <?php elseif(!empty($p_user)) : ?>
      <div class="col-xl-10 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
            <h4 class="font-weight-bold"><i class="fa fa-bullhorn"></i> Pengumuman</h4></div>
              <hr class="sidebar-divider">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="h5 mb-0 text-gray-800">  
                <h4 class="mb-1 font-weight-bold">Anda Sudah Mengisi Data</h4>
              <?php foreach($user as $usr) : ?>
                <p>
                  Anda Sudah Melakukan Pengisian Data Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Mendaftar Pada Program <?php echo $usr['nama_program'] ?>  
                </p>
                <!-- <p>
                  Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                  Mendaftar Pada Jurusan <?php echo $usr['jurusan_1'] ?> Dan <?php echo $usr['jurusan_2'] ?> <br/>
                  Dan Direkomendasikan Masuk Jurusan <?php echo $usr['jurusan_rekomendasi'] ?> 
                </p> -->
              <?php endforeach ?>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      </div>
<?php endif ?>
    

