<!-- Page Heading -->
<h1 class="mb-2 text-gray-900 text-center">Data Seleksi</h1>

<div class="card shadow mb-4">
<div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Datatables selection</h6>
        </div>
  <div class="card-body">
    <div class="table-responsive">

          <table class="table table-bordered " id="dataTable" width="100%">
      <thead>
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th width="100">Tempat lahir</th>
        <th>Tanggal lahir</th>
        <th>Jenis Kelamin</th>
        <!-- <th>Alamat</th>
        <th>Agama</th>
        <th>Nama Orang Tua</th>
        <th>No Hp Orang Tua</th>
        <th>No Kartu Keluarga</th> -->
        <th>Program</th>
        <!-- <th>Foto KK</th>
        <th>Foto Akte</th>
        <th>Foto Anak</th>  -->
        <th width="110">Aksi</th>
      </tr>
</thead>
<tbody>
 <?php $no = 1; ?>
      <?php foreach($pendaftar as $pdtr) : ?> 
        
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $pdtr['nama_lengkap'] ?></td>
          <td><?php echo $pdtr['tempat_lahir'] ?></td>
          <td><?php echo $pdtr['tgl_lahir'] ?></td>
          <td><?php echo $pdtr['jenis_kelamin'] ?></td>
          <!-- <td><?php echo $pdtr['alamat'] ?></td>
          <td><?php echo $pdtr['agama'] ?></td>
          <td><?php echo $pdtr['nama_ayah'] ?></td>
          <td><?php echo $pdtr['no_hp'] ?></td>
          <td><?php echo $pdtr['no_kk'] ?></td> -->
          
         
        <td>
          <form action="" method="post">
            <input type="hidden" name="id_pdtr" value="<?php echo $pdtr['id_user'] ?>">
            <!-- <input type="hidden" name="id" value="<?php echo $pdtr['id'] ?>"> -->
            
            <!-- <select name="terima_msk[]" id="" class="form-control">
              <?php foreach($program as $jrs) : ?>
                <option value="<?php echo $jrs['nama_program'] ?>"><?php echo $jrs['nama_program'] ?></option>
              <?php endforeach ?>
            </select> -->
            <?php echo $pdtr['nama_program'] ?>
              </td>
          <!-- <td><?php echo $pdtr['foto_kk'] ?></td>
          <td><?php echo $pdtr['foto_akte'] ?></td>
          <td><?php echo $pdtr['foto_anak'] ?></td> -->
          <td>
                
              <!-- <button type="submit" name="terima" class="btn btn-primary btn-sm pull-right" ><i class="fas fa-check"></i>  </button> -->
             <!-- <a href="index.php?page=edit=<?php echo $pdtr['id'];?>"><i class="fas fa-pencil-alt"></i>  Edit</a> -->
             <a href="edit.php?id=<?php echo $pdtr['id'];?>" class="btn btn-primary btn-sm pull-right m-2"><i class="fas fa-search"></i>  </a>
             <a href="delete.php?id=<?php echo $pdtr['id'];?>" class="btn btn-danger btn-sm pull-right"><i class="fas fa-eraser"></i>  </a>
              <!-- <button type="submit" name="delete" class="btn btn-danger pull-right" ><i class="fa fa-eraser"></i>  Delete</button> -->
              
              
            </form>
          </td>
        </tr>
        <?php endforeach ?>
              </tbody>
    </table>
    </div>
  </div>
</div>

