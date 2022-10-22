<?php

function fungsi_cek_folder($x){
	clearstatcache();
	$a = is_dir($x);
	return $a;
}

function f_cek_file($lokasi_file){
	clearstatcache();
	$a = file_exists($lokasi_file);
	return $a;
}

function f_cek_file_dan_status($v_target_lokasi_file, $v_jika_file_belum_ada=null, $v_jika_file_ada){
	if ($a = f_cek_file($v_target_lokasi_file,)){
		echo $v_jika_file_ada;
	}else{
		echo $v_jika_file_belum_ada;
	}
}

function fungsi_buat_folder($x){
	$y = mkdir($x);
	return $y;
}

function f_cek_dan_buat_folder($target_folder, $v_jika_folder_belum_ada=null, $v_membuat_folder=null, 
	$v_jika_folder_ada=null, ){

	if (!fungsi_cek_folder($target_folder)){
			echo $v_jika_folder_belum_ada;
			//echo $ganti_baris."Folder Belum  ada...";
		echo $v_membuat_folder;
		// echo $ganti_baris."\nMembuat folder ".$target_folder;
		
			fungsi_buat_folder($target_folder);
		
		}else{
		echo $v_jika_folder_ada;
		// echo $ganti_baris."Folder Sudah Ada...";
		}
}


function fungsi_menulis_file($nama_folder, $nama_file, $isi_output){
	global $garis_miring;
	f_cek_dan_buat_folder($nama_folder, f_notif_perhatian("FOLDER", "CEK FOLDER BELUM ADA"), f_notif_perhatian("FOLDER", "MEMBUAT FOLDER"), f_notif_perhatian("FOLDER", "FOLDER SUDAH ADA"));
	$a = file_put_contents($nama_folder.$garis_miring.$nama_file, $isi_output);
	return $a;
}

?>