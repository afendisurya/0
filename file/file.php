<?php

function fungsi_menulis_file($nama_folder, $nama_file, $isi_output){
	global $garis_miring;
	f_cek_dan_buat_folder($nama_folder, "CEK FOLDER BELUM ADA", "MEMBUAT FOLDER", "FOLDER SUDAH ADA");
	echo $nama_folder.$garis_miring.$nama_file;
	$a = file_put_contents($nama_folder.$garis_miring.$nama_file, $isi_output);
	return $a;
}

function fungsi_cek_folder($x){
	clearstatcache();
	$a = is_dir($x);
	return $a;
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

function f_cek_file($lokasi_file){
	clearstatcache();
	$a = file_exists($lokasi_file);
	return $a;
}

?>