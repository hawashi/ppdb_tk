<?php 

// require 'function.php';
// require 'jumlah.php';
require 'index.php';
	// if (isset($_GET['edit'])) {
		// $id = $_GET['id'];
		// $update = true;
		// $record = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id='$id'");

		// if ($record->num_rows == 1) {
		// 	$n = mysqli_fetch_array($record);
		// 	$nama = $n['nama_lengkap'];
        //     // $nama = !empty($n['nama_lengkap']) ? $n['nama_lengkap'] : '';
		// 	$no_kk = $n['no_kk'];
		// }
        // while($user_data = mysqli_fetch_array($record))
// {
    // $id = $user_data['id'];
    // $nama = $user_data['nama_lengkap'];
    // $id_sah = $user_data['id_user'];
    // $no_kk = $user_data['no_kk'];
//     $tempat_lahir = $user_data['tempat_lahir'];
//     $tgl_lahir = $user_data['tgl_lahir'];
//     $jenis_kelamin = $user_data['jenis_kelamin'];
//     $alamat = $user_data['alamat']; 
//     $agama = $user_data['agama']; 
//     $nama_ortu = $user_data['nama_ortu']; 
//     $no_hp = $user_data['no_hp']; 
//     $program = $user_data['nama_program'];
// }
	// }
    $id = $_GET['id'];
  
    $query = "SELECT * FROM pendaftar WHERE id = $id";
    
    $result = mysqli_query($conn, $query);
  
    // $row = mysqli_fetch_array($result);

    // var_dump(array_values($row));
    while($row = mysqli_fetch_array($result)){
?>


<section class="content">
        
        <div class="card shadow">
            <div class="card-header bg-success font-weight-bold text-light">
              <i class="fa fa-user-plus"></i>  <span>Edit Formulir Pendaftaran</span>
            </div>

            <div class="card-body">
                <form action="proses_edit" method="post" enctype="multipart/form-data">
              
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input autocomplete="off" type="text" class="form-control" name="nama_lengkap" value=<?php echo $row['nama_lengkap']; ?>>
                                <input type="hidden" name="id" value=<?php echo $row['id']; ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="">Tempat lahir</label>
                                <input autocomplete="off" type="text" class="form-control" name="tempat_lahir" value=<?php echo $row['tempat_lahir']; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Tanggal lahir</label>
                            <input autocomplete="off" type="date"  class="form-control" name="tgl_lahir" value=<?php echo $row['tgl_lahir']; ?>>
                        </div>
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <input autocomplete="off" type="text" class="form-control" name="alamat" value=<?php echo $alamat; ?>>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-2">
                            <label for="">Jenis_kelamin</label>
                            <select id="" class="form-control" name="jenis_kelamin" value=<?php echo $jenis_kelamin; ?>>
                               <option value="Laki-laki">Laki-laki</option>
                               <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Agama</label>
                            <select id="" class="form-control" name="agama" value=<?php echo $agama; ?>>
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
                            <input autocomplete="off" type="text"  class="form-control" name="no_kk" value=<?php echo $_GET['no_kk'];?>>
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
                            <label for="">Nama Orang tua / Wali</label>
                            <input autocomplete="off" type="text"  class="form-control" name="nama_ortu" value=<?php echo $_GET['nama_ortu'];?>>
                        </div>
                        <div class="col-md-6">
                            <label for="">No Hp / WA</label>
                            <input autocomplete="off" type="number" class="form-control" name="no_hp" value=<?php echo $_GET['no_hp'];?>>
                        </div>
                    </div>

                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Kartu Keluarga</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_kk" value=<?php echo $_GET['foto_kk'];?>>
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Akte Kelahiran</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto_akte" name="foto_akte" value=<?php echo $_GET['foto_akte'];?>>
                      <label class="custom-file-label selected" for="foto_akte">Pilih file</label>
                    </div>
                  </div>
                  <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Foto Anak </span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_anak" value=<?php echo $_GET['foto_anak'];?>>
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                    
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="edit"><i class="fa fa-edit"></i> Edit</button>
                </form>
                <?php } ?>
            </div>
        </div>

    </section>
   