<?php

function fungsi_pilihan_log($target_variabel, $target_folder, $target_nama){
	global $ganti_baris;
	if (preg_match('/tidak|no|ga|g|t|tdk|n/i', $target_variabel)) {
		$a = $ganti_baris."Tidak Menyimpan Log...";
		echo $a;
		exit;

	}elseif (preg_match('/iya|yes|ya|y|kuy/i', $target_variabel)) {
		echo $ganti_baris."Menyimpan Log...";

	 if (!fungsi_cek_folder($target_folder)){
			echo $ganti_baris."Folder Belum  ada...";
		echo $ganti_baris."\nMembuat folder ".$target_folder;
			fungsi_buat_folder($target_folder);
		
		}else{
		echo $ganti_baris."Folder Sudah Ada...";
		}
		 $a = fungsi_git_log_raw($target_folder."/".$target_nama);
		fungsi_info_custom("LOG", "log tersimpan");
		/*
		if ($a = fungsi_git_log_raw($target_folder."/".$target_nama)){
		echo "error";
		}else{
		echo "simpan";
		}*/
			//	fungsi_tree_all();
		}
	else {
		echo "PILIHAN TIDAK ADA";
	}
}

function fungsi_pilihan_config($target_variabel_input, $target_lokasi_output, $nama_file, $target_isi_file, $target_config=null){
	global $garis_miring;
	if (preg_match('/tidak|no|ga|g|t|tdk|n/i', $target_variabel_input)) {
		fungsi_info_custom("CONFIG", "Tidak Menyimpan Konfigurasi".$target_config);
} elseif (preg_match('/iya|yes|ya|y|kuy/i', $target_variabel_input)) {
	if ($target_config === null) {
	fungsi_info_custom("CONFIG", 'Menyimpan Konfigurasi dalam folder "'.fungsi_teks_warna_merah_terang_tebal($target_lokasi_output).fungsi_teks_warna_kuning_terang('" & Dengan Nama "').fungsi_teks_warna_merah_terang_tebal($nama_file).'"');
	}else{
	fungsi_info_custom("CONFIG", 'Menyimpan Konfigurasi'.$target_config.'dalam folder "'.fungsi_teks_warna_merah_terang_tebal($target_lokasi_output).fungsi_teks_warna_kuning_terang('" & Dengan Nama "').fungsi_teks_warna_merah_terang_tebal($nama_file).'"');
	}
	fungsi_info_custom("CONFIG", "Menyimpan Konfigurasi".$target_config);
	fungsi_menulis_file($target_lokasi_output, $nama_file, $target_isi_file);
	fungsi_info_custom("CONFIG", "Konfigurasi".$target_config."Tersimpan");
	}
	else{
		echo "Masukkan Input Yang Sesuai";
	}
}


function fungsi_pilihan_konfigurasi($x){
	if (preg_match('/tidak|no|ga|g|t|tdk|n/i', $x)) {
	
}elseif (preg_match('/iya|yes|ya|y|kuy/i', $x)) {
	
	}
}

?>