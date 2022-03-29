<?php 
include 'function.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];

		// Mengambil data siswa_foto didalam table siswa
		$get_foto = "SELECT foto_kk, foto_akte, foto_anak FROM pendaftar WHERE id='$id'";
		$data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("file/".$foto_lama['foto_kk']);    
		unlink("file/".$foto_lama['foto_akte']);    
		unlink("file/".$foto_lama['foto_anak']);    

		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"DELETE FROM pendaftar WHERE id='$id'");
		if ($query) {
			// header("location:index.php?pesan=hapus");
			header("location:index.php?page=seleksi");
		}else{
			header("location:index.php?pesan=gagalhapus");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan kehalaman index
		header("location:index.php");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman index
	header("location:index.php");
}

?>