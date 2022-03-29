<?php 
$conn = mysqli_connect("localhost", "root", "", "ppdb_tk");
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id'];   
        // $stat = "Ditolak";
		// Mengapus data siswa berdasarkan ID
		$query = mysqli_query($conn,"UPDATE pendaftar SET stat='Ditolak' WHERE id=$id");
		if ($query) {
			// header("location:index.php?pesan=hapus");
            echo "<script>
            alert('Data Berhasil Ditolak');
            document.location.href= 'index.php?page=seleksi';
             </script>";
			// header("location:index.php?page=seleksi");
		}else{
			// header("location:index.php?pesan=gagalhapus");
            echo "<script>
            alert('Data Gagal Ditolak');
            document.location.href= 'index.php?page=seleksi';
             </script>";
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