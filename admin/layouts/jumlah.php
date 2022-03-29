<?php

// Pendaftar
$pendaftar = query("SELECT * FROM pendaftar WHERE stat = 'Menunggu Keputusan' ");
$jml_tunggu = count($pendaftar);
// $total_pendaftar = $jml_tunggu + $jml_terima;
// $pendaftar = query("SELECT * FROM pendaftar");
// Pendaftar

// Jurusan
// $jurusan = query("SELECT * FROM jurusan");
$program = query("SELECT * FROM program");
$p_daftar = query("SELECT * FROM pendaftar");
// $result = mysqli_query($conn, $p_daftar); 

// if ($result) { 
//   // it return number of rows in the table. 
//   $row = mysqli_num_rows($result); 
// }
// Jurusan

// RPL
// $rpl1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'rekayasa perangkat lunak' AND  stat = 'Menunggu Keputusan' ");
// $rpl2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'rekayasa perangkat lunak' AND  stat = 'Menunggu Keputusan' ");
// $j_rpl1 = count($rpl1);
// $j_rpl2 = count($rpl2);
// $total_rpl = $j_rpl1 + $j_rpl2;
// RPL

// TKJ
// $tkj1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'teknik komputer & jaringan' AND  stat = 'Menunggu Keputusan' ");
// $tkj2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'teknik komputer & jaringan' AND  stat = 'Menunggu Keputusan' ");
// $j_tkj1 = count($tkj1);
// $j_tkj2 = count($tkj2);
// $total_tkj = $j_tkj1 + $j_tkj2;
// TKJ

// MM
// $mm1 = query("SELECT * FROM pendaftar WHERE jurusan_1 = 'multimedia' AND  stat = 'Menunggu Keputusan' ");
// $mm2 = query("SELECT * FROM pendaftar WHERE jurusan_2 = 'multimedia' AND  stat = 'Menunggu Keputusan' ");
// $j_mm1 = count($mm1);
// $j_mm2 = count($mm2);
// $total_mm = $j_mm1 + $j_mm2;
// MM

// Terima
// $terima_rpl = query("SELECT * FROM terima WHERE jurusan = 'Rekayasa Perangkat Lunak' ");
// $j_trpl = count($terima_rpl);
// $terima_tkj = query("SELECT * FROM terima WHERE jurusan = 'Teknik Komputer & Jaringan' ");
// $j_ttkj = count($terima_tkj);
// $terima_mm = query("SELECT * FROM terima WHERE jurusan = 'Multimedia' ");
// $j_tmm = count($terima_mm);
// 

// Tolak
$tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' ");
$j_tolak = count($tolak);
// Tolak

// Terima
$terima = query("SELECT * FROM terima");
$diterima = query("SELECT * FROM pendaftar WHERE stat = 'Diterima' ");
// $jml_terima = mysqli_num_rows($terima);
// Terima

	
// $jumlah_pendaftar = mysqli_query(" SELECT SUM(id) AS jumlah FROM pendaftar");
// mysqli_num_rows($jumlah_pendaftar);
// $jumlah_diterima = mysqli_query("SELECT * from mahasiswa where fakultas='teknik'");
// echo mysqli_num_rows($jumlah_laki);
				
					
// $p_user = query("SELECT * FROM pendaftar WHERE id = $id");
?>