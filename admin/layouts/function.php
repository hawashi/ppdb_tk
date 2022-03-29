<?php

$conn = mysqli_connect("localhost", "root", "", "ppdb_tk");

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}


function update() {
    global $conn ;

    // if(isset($_POST['update']))
    // {    
    $id = $_POST['id'];
    
    // $name = $_POST['nama_lengkap'];
    // $mobile = $_POST['id'];
    // $email = $_POST['email'];

    $nama = $_POST['nama_lengkap'];
    $id_sah = $_POST['id_user'];
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
    $foto_kk = $_POST['foto_kk'];
    $foto_akte = $_POST['foto_akte'];
    $foto_anak = $_POST['foto_anak'];

    //upload foto kk
    $ekstensi_diperbolehkan	= array('png','jpg');
    $foto_kk = $_FILES['foto_kk']['name'];
    $x = explode('.', $foto_kk);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['foto_kk']['size'];
    $file_tmp = $_FILES['foto_kk']['tmp_name'];
    //upload foto akte
    $ekstensi_diperbolehkan	= array('png','jpg');
    $foto_akte = $_FILES['foto_akte']['name'];
    $x = explode('.', $foto_akte);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['foto_akte']['size'];
    $file_tmp = $_FILES['foto_akte']['tmp_name'];
    //upload foto anak
    $ekstensi_diperbolehkan	= array('png','jpg');
    $foto_anak = $_FILES['foto_anak']['name'];
    $x = explode('.', $foto_anak);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['foto_anak']['size'];
    $file_tmp = $_FILES['foto_anak']['tmp_name'];
    // update user data
    $stat = 'Menunggu Keputusan';

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 9999999){			
            move_uploaded_file($file_tmp, '../../file/'.$foto_kk);
            move_uploaded_file($file_tmp, '../../file/'.$foto_akte);
            move_uploaded_file($file_tmp, '../../file/'.$foto_anak);

    $result = mysqli_query($conn, "UPDATE pendaftar SET nama_lengkap='$nama',id_user='$id_sah',no_kk='$no_kk',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama', nama_ortu='$nama_ortu', no_hp='$no_hp', nama_program='$program', nama_ortu='$nama_ortu', no_hp='$no_hp', foto_kk='$foto_kk', foto_akte='$foto_akte', foto_anak='$foto_anak', $stat WHERE id=$id");
    
    $update = mysqli_query($conn, $result);
        //         // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
                if($update){
                    echo 'FILE BERHASIL DI UPLOAD';
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    // Redirect to homepage to display updated user in list
    header('Location: index.php?page=seleksi');
    }
// }

function terima($data) {
    global $conn;
    $id = $data['id_pdtr'];
    // $terima_msk = $data['terima_msk'];

    for ($i=0; $i < count($id) ; $i++) {
        $data = "SELECT * FROM pendaftar WHERE id_user = '$id[$i]' ";
        $result = mysqli_query($conn, $data);
        $result_fix = mysqli_fetch_assoc($result);
        // $nama = $result_fix['nama_lengkap'];
        $nama = !empty($result_fix['nama_lengkap']) ? $result_fix['nama_lengkap'] : '';
        // $id_sah = $result_fix['id_user'];
        $id_sah = !empty($result_fix['id_user']) ? $result_fix['id_user'] : '';
        // $no_kk = $result_fix['no_kk'];
        $no_kk = !empty($result_fix['no_kk']) ? $result_fix['no_kk'] : '';
        // $tempat_lahir = $result_fix['tempat_lahir'];
        $tempat_lahir = !empty($result_fix['tempat_lahir']) ? $result_fix['tempat_lahir'] : '';
        // $tgl_lahir = $result_fix['tgl_lahir'];
        $tgl_lahir = !empty($result_fix['tgl_lahir']) ? $result_fix['tgl_lahir'] : '';
        // $jenis_kelamin = $result_fix['jenis_kelamin'];
        $jenis_kelamin = !empty($result_fix['jenis_kelamin']) ? $result_fix['jenis_kelamin'] : '';
        // $alamat = $result_fix['alamat']; 
        $alamat = !empty($result_fix['alamat']) ? $result_fix['alamat'] : ''; 
        // $agama = $result_fix['agama']; 
        $agama = !empty($result_fix['agama']) ? $result_fix['agama'] : ''; 
        // $nama_ayah = $result_fix['nama_ayah']; 
        $nama_ayah = !empty($result_fix['nama_ayah']) ? $result_fix['nama_ayah'] : ''; 
         
        $no_hp = !empty($result_fix['no_hp']) ? $result_fix['no_hp'] : ''; 
        // $no_hp = $result_fix['no_hp']; 
        // $program = $result_fix['nama_program'];
        $program = !empty($result_fix['nama_program']) ? $result_fix['nama_program'] : '';
        // $foto_kk = !empty($result_fix['foto_kk']) ? $result_fix['foto_kk'] : '';
        // $foto_akte = !empty($result_fix['foto_akte']) ? $result_fix['foto_akte'] : '';
        // $foto_anak = !empty($result_fix['foto_anak']) ? $result_fix['foto_anak'] : '';
        // $program = $terima_msk[$i];   
        $t_insert = mysqli_query($conn, "INSERT INTO terima (id,id_user,nama_lengkap,no_kk,tempat_lahir,tgl_lahir,jenis_kelamin,alamat,agama,nama_ayah,no_hp,nama_program)
        VALUES('', '$id_sah', '$nama', '$no_kk', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$agama', '$nama_ayah', '$no_hp', '$program')");      
        $delete = mysqli_query ($conn, "DELETE FROM pendaftar WHERE id_user = '$id_sah'");
       
        $insert = mysqli_query($conn, $t_insert);
    }
   

    // return mysqli_affected_rows($conn);
    if($insert){
        // header("location:index.php?pesan=berhasil");
        // header("location:index.php?page=seleksi");
        echo "<script>
        alert('Murid Sudah Diterima')
    </script>";
    header("location:index.php?page=seleksi");
    }else {
        header("location:index.php?pesan=gagal");
    }
   

}

function delete() {
    global $conn;
    // $id = $_GET['id'];
    // $delete = mysqli_query ($conn, "DELETE FROM pendaftar WHERE id=$id");
    // }

    
    if( isset($_GET['id']) ){

        // ambil id dari query string
        $id = $_GET['id'];

        // buat query hapus
        $sql = "DELETE FROM pendaftar WHERE id=$id";
        $query = mysqli_query($conn, $sql);

        // apakah query hapus berhasil?
        if( $query ){
            header('Location: index.php?page=seleksi');
        } else {
            die("gagal menghapus...");
        }

    } else {
        die("akses dilarang...");
    }
}
    // return mysqli_affected_rows($conn);
function tolak() {
        global $conn ;
        if( isset($_GET['id']) ){

            // ambil id dari query string
            $id = $_GET['id'];
        
        // tmp_name'];
        // update user data
        $stat = 'Ditolak';
    
       
    
        $result = mysqli_query($conn, "UPDATE pendaftar SET $stat WHERE id=$id");
        
        $update = mysqli_query($conn, $result);
            //         // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
                    if($update){
                        echo 'DATA BERHASILDITOLAK';
                    }else{
                        echo 'GAGAL DITOLAK';
                    } 
        // Redirect to homepage to display updated user in list
        header('Location: index.php?page=seleksi');
        }
    }
    
?>