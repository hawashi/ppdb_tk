<?php

$id_user = $_SESSION['id_user'];
$user = query("SELECT * FROM pendaftar WHERE id_user = '$id_user' ");
$usr_tolak = query("SELECT * FROM pendaftar WHERE stat = 'Ditolak' AND id_user = '$id_user' ");
$j_usr_tolak = count($usr_tolak);
$p_user = count($user);
$program = query("SELECT * FROM program");
// $t_daftar = query("SELECT * FROM user WHERE stat = 'Menunggu keputusan' AND id_user = '$id_user' ");

// Terima
$terima = query("SELECT * FROM terima WHERE id_user = '$id_user' ");
$diterima = query("SELECT * FROM pendaftar WHERE id_user = '$id_user' AND stat = 'Diterima' ");
// Terima

?>