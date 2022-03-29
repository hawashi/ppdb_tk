<?php
$conn = mysqli_connect("localhost", "root", "", "ppdb_tk");
date_default_timezone_get();

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

    function daftar($data) {
        global $conn;
        
        $nama = !empty($data['nama_lengkap']) ? $data['nama_lengkap'] : '';
        // $nama ??= $data['nama_lengkap'];
        $tempat_lahir = !empty($data['tempat_lahir']) ? $data['tempat_lahir'] : '';
        // $tempat_lahir = $data['tempat_lahir'];
        $tgl_lahir = !empty($data['tgl_lahir']) ? $data['tgl_lahir'] : '';
        // $tgl_lahir = $data['tgl_lahir'];
        $no_kk = !empty($data['no_kk']) ? $data['no_kk'] : '';
        // $no_kk = $data['no_kk'];
        $alamat = !empty($data['alamat']) ? $data['alamat'] : '';
        // $alamat = $data['alamat'];
        $jenis_kelamin = !empty($data['jenis_kelamin']) ? $data['jenis_kelamin'] : '';
        // $jenis_kelamin = $data['jenis_kelamin'];
        $agama = !empty($data['agama']) ? $data['agama'] : '';
        // $agama = $data['agama'];
       
        // $nama_ortu = $data['nama_ortu'];
        $no_hp = !empty($data['no_hp']) ? $data['no_hp'] : '';
        // $no_hp = $data['no_hp'];
        // $foto_kk = $data['foto_kk'];
        $program = !empty($data['nama_program']) ? $data['nama_program'] : '';
        $nama_panggilan = !empty($data['nama_panggilan']) ? $data['nama_panggilan'] : '';
        $anak_ke = !empty($data['anak_ke']) ? $data['anak_ke'] : '';
        $jumlah_saudara = !empty($data['jumlah_saudara']) ? $data['jumlah_saudara'] : '';
        $status_dalam_keluarga = !empty($data['status_dalam_keluarga']) ? $data['status_dalam_keluarga'] : '';
        $kewarganegaraan = !empty($data['kewarganegaraan']) ? $data['kewarganegaraan'] : '';

        //data ayah
        $nama_ayah = !empty($data['nama_ayah']) ? $data['nama_ayah'] : '';
        $tempat_lahir_ayah = !empty($data['tempat_lahir_ayah']) ? $data['tempat_lahir_ayah'] : '';
        $tanggal_lahir_ayah = !empty($data['tanggal_lahir_ayah']) ? $data['tanggal_lahir_ayah'] : '';
        $agama_ayah = !empty($data['agama_ayah']) ? $data['agama_ayah'] : '';
        $kewarganegaraan_ayah = !empty($data['kewarganegaraan_ayah']) ? $data['kewarganegaraan_ayah'] : '';
        $pekerjaan_ayah = !empty($data['pekerjaan_ayah']) ? $data['pekerjaan_ayah'] : '';
        $pendidikan_ayah = !empty($data['pendidikan_ayah']) ? $data['pendidikan_ayah'] : '';
        //data ibu
        $nama_ibu = !empty($data['nama_ibu']) ? $data['nama_ibu'] : '';
        $tempat_lahir_ibu = !empty($data['tempat_lahir_ibu']) ? $data['tempat_lahir_ibu'] : '';
        $tanggal_lahir_ibu = !empty($data['tanggal_lahir_ibu']) ? $data['tanggal_lahir_ibu'] : '';
        $agama_ibu = !empty($data['agama_ibu']) ? $data['agama_ibu'] : '';
        $kewarganegaraan_ibu = !empty($data['kewarganegaraan_ibu']) ? $data['kewarganegaraan_ibu'] : '';
        $pekerjaan_ibu = !empty($data['pekerjaan_ibu']) ? $data['pekerjaan_ibu'] : '';
        $pendidikan_ibu = !empty($data['pendidikan_ibu']) ? $data['pendidikan_ibu'] : '';

        // $program =strtolower($data['program']);
        // $jurusan_2 = strtolower($data['jurusan_2']);
        $foto_kk = !empty($data['foto_kk']) ? $data['foto_kk'] : '';
        $foto_akte = !empty($data['foto_akte']) ? $data['foto_akte'] : '';
        $foto_anak = !empty($data['foto_anak']) ? $data['foto_anak'] : '';
        $id_user = $_SESSION['id_user'];
        $no_kk = $_SESSION['no_kk'];
        $nama_user = $_SESSION['nama'];
        $tgl_daftar = date('Y-m-d H:m:s');
        
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

       
            $stat = 'Menunggu Keputusan';
        // }
        // Cek Apakah Data Diisi
    if ( empty($nama) || empty($no_kk)  || empty($tempat_lahir) || empty($tgl_lahir) ||  empty($alamat) || empty($jenis_kelamin) || empty($agama) || empty($no_hp) || empty($program) || empty($nama_panggilan) || empty($anak_ke) || empty($jumlah_saudara) || empty($status_dalam_keluarga) || empty($kewarganegaraan) || empty($nama_ayah) || empty($tempat_lahir_ayah) || empty($tanggal_lahir_ayah) || empty($agama_ayah) || empty($kewarganegaraan_ayah) || empty($pekerjaan_ayah) || empty($pendidikan_ayah) || empty($nama_ibu) || empty($tempat_lahir_ibu) || empty($tanggal_lahir_ibu) || empty($agama_ibu) || empty($kewarganegaraan_ibu) || empty($pekerjaan_ibu) || empty($pendidikan_ibu) || empty($foto_kk) || empty($foto_akte) || empty($foto_anak))  {
        echo "<script>
            alert('Isi Semua Data Anda !!');
            document.location.href = 'index.php';
        </script>";
        exit();
    }
        // elseif($nilai < 60) {
        //     $jr = null;
        //     $stat = "Ditolak";
        // }
             //cek file
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 9999999){			
                move_uploaded_file($file_tmp, '../../file/'.$foto_kk);
                move_uploaded_file($file_tmp, '../../file/'.$foto_akte);
                move_uploaded_file($file_tmp, '../../file/'.$foto_anak);
                $q_insert = "INSERT INTO pendaftar VALUES (null, '$id_user', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$agama', '$nama_ayah', '$no_hp', '$no_kk', '$nama_panggilan', '$anak_ke', '$jumlah_saudara', '$status_dalam_keluarga', '$kewarganegaraan', '$stat', '$tgl_daftar', '$program', '$foto_kk', '$foto_akte', '$foto_anak', '$tempat_lahir_ayah', '$agama_ayah', '$kewarganegaraan_ayah', '$pekerjaan_ayah', '$pendidikan_ayah', '$nama_ibu', '$tempat_lahir_ibu', '$agama_ibu', '$kewarganegaraan_ibu', '$pekerjaan_ibu', '$pendidikan_ibu', '$tanggal_lahir_ayah', '$tanggal_lahir_ibu') ";
                $insert = mysqli_query($conn, $q_insert);
        //         // $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
                if($insert){
                    echo "<script>
                            alert('Kamu Berhasil Registrasi, Silahkan Tunggu Kabar Berikutnya ');
                            document.location.href = 'index.php?page=daftar';
                        </script>";
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo "<script>
            alert('Isi Semua Data Anda !!');
        </script>";
        }

        // Input --> DB
        // $jurusan_1 = strtolower($data['jurusan_1']); 
        // $jurusan_2 = strtolower($data['jurusan_2']);
        // $q_insert = "INSERT INTO pendaftar VALUES (null, '$id_user', '$nama', '$tempat_lahir', '$tgl_lahir', '$no_kk', '$alamat', '$jenis_kelamin', '$agama', '$nama_ortu', '$no_hp', '$program', '$stat', '$tgl_daftar') ";
        // $insert = mysqli_query($conn, $q_insert);

        return mysqli_affected_rows($conn);

    }



?>