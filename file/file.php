<?php

function fungsi_cek_folder($x){
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

function f_cek_dan_buat_folder($target_folder){
	global $ganti_baris;

	if (!fungsi_cek_folder($target_folder)){
		f_notif_perhatian("FOLDER", 'CEK FOLDER '.'"'.$target_folder.'"'.' BELUM ADA');
		f_notif_perhatian("FOLDER", 'MEMBUAT FOLDER '.'"'.$target_folder.'"');
		fungsi_buat_folder($target_folder);
		
		}else{
		f_notif_perhatian("FOLDER", 'FOLDER '.'"'.$target_folder.'"'.' SUDAH ADA');
	}

}


function fungsi_menulis_file($target_folder, $nama_file, $isi_output){
	global $garis_miring;
	f_cek_dan_buat_folder($target_folder);
	$a = file_put_contents($target_folder.$garis_miring.$nama_file, $isi_output);
	return $a;
}

?>