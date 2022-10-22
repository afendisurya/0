<?php

$kotak_input = $ganti_baris.fungsi_teks_warna_merah_terang_tebal("[").fungsi_teks_warna_kuning_terang("input").fungsi_teks_warna_merah_terang_tebal("] ");

function fungsi_input($judul){
	$a = readline($judul);
	return $a;
}

function fungsi_input2($judul){
	echo $judul;
	$a = trim(fgets(STDIN));
	return $a;
}

function f_input($judul){
	global $kotak_input;
	echo $kotak_input.$judul." ";
	$a = trim(fgets(STDIN));
	return $a;
}

?>